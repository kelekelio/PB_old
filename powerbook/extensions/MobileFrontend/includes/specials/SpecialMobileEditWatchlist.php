<?php

/**
 * SpecialMobileEditWatchlist.php
 */

/**
 * The mobile version of the watchlist editing page.
 */
class SpecialMobileEditWatchlist extends SpecialEditWatchlist {
	/** @var string $offsetTitle The name of the title to begin listing the watchlist from */
	protected $offsetTitle;

	/**
	 * Construct function
	 */
	public function __construct() {
		$req = $this->getRequest();
		$this->offsetTitle = $req->getVal( 'from', '' );
		parent::__construct( 'EditWatchlist' );
	}

	/**
	 * Renders the subheader.
	 */
	protected function outputSubtitle() {
		$user = $this->getUser();
		// Make sure a header is rendered with a-z focused (as we know we're on that page)
		$this->getOutput()->addHtml( SpecialMobileWatchlist::getWatchlistHeader( $user, 'a-z' ) );
	}

	/**
	 * Gets the HTML fragment for a watched page.
	 *
	 * @param MobilePage $mp a definition of the page to be rendered.
	 * @return string
	 */
	protected function getLineHtml( MobilePage $mp ) {
		$thumb = $mp->getSmallThumbnailHtml();
		$title = $mp->getTitle();
		if ( !$thumb ) {
			$thumb = MobilePage::getPlaceHolderThumbnailHtml( 'list-thumb-none', 'list-thumb-x' );
		}
		$timestamp = $mp->getLatestTimestamp();
		$user = $this->getUser();
		$titleText = $title->getPrefixedText();
		if ( $timestamp ) {
			$lastModified = $this->msg(
				'mobile-frontend-last-modified-date',
				$this->getLanguage()->userDate( $timestamp, $user ),
				$this->getLanguage()->userTime( $timestamp, $user )
			)->parse();
			$edit = $mp->getLatestEdit();
			$dataAttrs = [
				'data-timestamp' => $edit['timestamp'],
				'data-user-name' => $edit['name'],
				'data-user-gender' => $edit['gender'],
			];
			$className = 'title';
		} else {
			$className = 'title new';
			$lastModified = '';
			$dataAttrs = [];
		}

		$html =
			Html::openElement( 'li', [
				'class' => 'page-summary',
				'title' => $titleText,
				'data-id' => $title->getArticleId()
			] ) .
			Html::openElement( 'a', [ 'href' => $title->getLocalUrl(), 'class' => $className ] );
		$html .= $thumb;
		$html .=
			Html::element( 'h3', [], $titleText );

		if ( $lastModified ) {
			$html .= Html::openElement( 'div', [ 'class' => 'info' ] ) .
				Html::element( 'span', array_merge( $dataAttrs, [ 'class' => 'modified-enhancement' ] ),
					$lastModified ) .
				Html::closeElement( 'div' );
		}
		$html .= Html::closeElement( 'a' ) .
			Html::closeElement( 'li' );

		return $html;
	}

	/**
	 * The main entry point for the page.
	 *
	 * @param int $mode Whether the user is viewing, editing, or clearing their
	 *  watchlist
	 */
	public function execute( $mode ) {
		// Anons don't get a watchlist edit
		$this->requireLogin( 'mobile-frontend-watchlist-purpose' );

		$out = $this->getOutput();
		// turn off #bodyContent element
		$out->setProperty( 'unstyledContent', true );
		parent::execute( $mode );
		$out->setPageTitle( $this->msg( 'watchlist' ) );
	}

	/**
	 * Finds the offset of the page given in this->offsetTitle
	 * If doesn't exist returns 0 to show from beginning of array of pages.
	 *
	 * @param array $pages
	 * @return int where the index of the next page to be shown.
	 */
	private function getPageOffset( $pages ) {
		// Deal with messiness of mediawiki
		$pages = array_keys( $pages );

		if ( $this->offsetTitle ) {
			// PHP is stupid. strict test to avoid issues when page '0' is watched.
			$offset = array_search( $this->offsetTitle, $pages, true );
			// Deal with cases where invalid title given
			if ( $offset === false ) {
				$offset = 0;
			}
		} else {
			$offset = 0;
		}
		return $offset;
	}

	/**
	 * Create paginated view of entire watchlist
	 *
	 * @param array $pages
	 * @return array of pages that should be displayed in current view
	 */
	private function getPagesToDisplay( $pages ) {
		$offset = $this->getPageOffset( $pages );
		// Get the slice we are going to display and display it
		return array_slice( $pages, $offset, SpecialMobileWatchlist::LIMIT, true );
	}

	/**
	 * Identify the next page to be shown
	 *
	 * @param array $pages
	 * @return string|boolean representing title of next page to show or
	 *  false if there isn't another page to show.
	 */
	private function getNextPage( $pages ) {
		$total = count( $pages );
		$offset = $this->getPageOffset( $pages );
		$limit = SpecialMobileWatchlist::LIMIT;

		// Work out if we need a more button and where to start from
		if ( $total > $offset + $limit ) {
			$pageKeys = array_keys( $pages );
			$from = $pageKeys[$offset + $limit];
		} else {
			$from = false;
		}
		return $from;
	}

	/**
	 * Renders the view/edit (normal) mode of the watchlist.
	 */
	protected function executeViewEditWatchlist() {
		$ns = NS_MAIN;
		$html = '';
		$images = [];

		$watchlist = $this->getWatchlistInfo();

		if ( isset( $watchlist[$ns] ) ) {
			$allPages = $watchlist[$ns];
			$from = $this->getNextPage( $allPages );
			$allPages = $this->getPagesToDisplay( $allPages );
		} else {
			$allPages = [];
			$from = false;
		}

		// Begin rendering of watchlist.
		$watchlist = [ $ns => $allPages ];
		Hooks::run( 'SpecialMobileEditWatchlist::images', [
				$this->getContext(),
				&$watchlist,
				&$images
			]
		);

		// create list of pages
		$mobilePages = new MobileCollection();
		$pageKeys = array_keys( $watchlist[$ns] );
		foreach ( $pageKeys as $dbkey ) {
			if ( isset( $images[$ns][$dbkey] ) ) {
				$page = new MobilePage(
					Title::makeTitleSafe( $ns, $dbkey ),
					wfFindFile( $images[$ns][$dbkey] )
				);
			} else {
				$page = new MobilePage( Title::makeTitleSafe( $ns, $dbkey ) );
			}
			$mobilePages->add( $page );
		}

		if ( count( $mobilePages ) === 0 ) {
			$html = SpecialMobileWatchlist::getEmptyListHtml( false, $this->getLanguage() );
		} else {
			$html = $this->getViewHtml( $mobilePages );
		}
		if ( $from ) {
			// show more link if there are more items to show
			$qs = [ 'from' => $from ];
			$html .= Html::element( 'a',
				[
					'class' => MobileUI::anchorClass( 'progressive', 'more' ),
					'href' => SpecialPage::getTitleFor( 'EditWatchlist' )->getLocalURL( $qs ),
				],
				$this->msg( 'mobile-frontend-watchlist-more' ) );
		}
		$out = $this->getOutput();
		$out->addHtml( $html );
		$out->addModules( 'mobile.special.watchlist.scripts' );
		$out->addModuleStyles(
			[
				'mobile.special.watchlist.styles',
				'mobile.pagelist.styles',
				'mobile.pagesummary.styles',
				'mobile.special.pagefeed.styles'
			]
		);
	}

	/**
	 * @param MobileCollection $collection
	 * @return string html representation of collection in watchlist view
	 */
	protected function getViewHtml( MobileCollection $collection ) {
		$html = '<ul class="watchlist content-unstyled page-list thumbs page-summary-list">';
		foreach ( $collection as $mobilePage ) {
			$html .= $this->getLineHtml( $mobilePage );
		}
		$html .= '</ul>';
		return $html;
	}
}
