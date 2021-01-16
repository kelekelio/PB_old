/*!
 * VisualEditor user interface MWCategoriesPage class.
 *
 * @copyright 2011-2017 VisualEditor Team and others; see AUTHORS.txt
 * @license The MIT License (MIT); see LICENSE.txt
 */

/**
 * MediaWiki meta dialog categories page.
 *
 * @class
 * @extends OO.ui.PageLayout
 *
 * @constructor
 * @param {string} name Unique symbolic name of page
 * @param {Object} [config] Configuration options
 * @cfg {jQuery} [$overlay] Overlay to render dropdowns in
 */
ve.ui.MWCategoriesPage = function VeUiMWCategoriesPage( name, config ) {
	// Configuration initialization
	config = config || {};

	// Parent constructor
	ve.ui.MWCategoriesPage.super.apply( this, arguments );

	// Properties
	this.metaList = null;
	this.defaultSortKeyTouched = false;
	this.fallbackDefaultSortKey = mw.config.get( 'wgTitle' );
	this.categoriesFieldset = new OO.ui.FieldsetLayout( {
		label: ve.msg( 'visualeditor-dialog-meta-categories-data-label' ),
		icon: 'tag'
	} );
	this.categoryOptionsFieldset = new OO.ui.FieldsetLayout( {
		label: ve.msg( 'visualeditor-dialog-meta-categories-options' ),
		icon: 'settings'
	} );
	this.categoryWidget = new ve.ui.MWCategoryWidget( {
		$overlay: config.$overlay
	} );
	this.defaultSortInput = new OO.ui.TextInputWidget( {
		placeholder: this.fallbackDefaultSortKey
	} );

	this.defaultSortInput.$element.addClass( 've-ui-mwCategoriesPage-defaultsort' );

	this.defaultSort = new OO.ui.FieldLayout(
		this.defaultSortInput,
		{
			$overlay: config.$overlay,
			align: 'top',
			label: ve.msg( 'visualeditor-dialog-meta-categories-defaultsort-label' ),
			help: ve.msg( 'visualeditor-dialog-meta-categories-defaultsort-help' )
		}
	);

	// Events
	this.categoryWidget.connect( this, {
		newCategory: 'onNewCategory',
		updateSortkey: 'onUpdateSortKey'
	} );
	this.defaultSortInput.connect( this, {
		change: 'onDefaultSortChange'
	} );

	// Initialization
	this.categoriesFieldset.$element.append( this.categoryWidget.$element );
	this.categoryOptionsFieldset.addItems( [ this.defaultSort ] );
	this.$element.append( this.categoriesFieldset.$element, this.categoryOptionsFieldset.$element );
};

/* Inheritance */

OO.inheritClass( ve.ui.MWCategoriesPage, OO.ui.PageLayout );

/* Methods */

/**
 * @inheritdoc
 */
ve.ui.MWCategoriesPage.prototype.setOutlineItem = function () {
	// Parent method
	ve.ui.MWCategoriesPage.super.prototype.setOutlineItem.apply( this, arguments );

	if ( this.outlineItem ) {
		this.outlineItem
			.setIcon( 'tag' )
			.setLabel( ve.msg( 'visualeditor-dialog-meta-categories-section' ) );
	}
};

/**
 * Handle category default sort change events.
 *
 * @param {string} value Default sort value
 */
ve.ui.MWCategoriesPage.prototype.onDefaultSortChange = function ( value ) {
	this.categoryWidget.setDefaultSortKey( value === '' ? this.fallbackDefaultSortKey : value );
	this.defaultSortKeyTouched = true;
};

/**
 * Inserts new category into meta list
 *
 * @param {Object} item
 * @param {ve.dm.MWCategoryMetaItem} [beforeMetaItem] Meta item to insert before,
 *  or undefined to go at the end
 */
ve.ui.MWCategoriesPage.prototype.onNewCategory = function ( item, beforeMetaItem ) {
	// Insert new metaList item
	if ( beforeMetaItem ) {
		this.insertMetaListItem(
			this.getCategoryItemForInsertion( item ),
			beforeMetaItem.getOffset(),
			beforeMetaItem.getIndex()
		);
	} else {
		this.insertMetaListItem( this.getCategoryItemForInsertion( item ) );
	}
};

/**
 * Removes and re-inserts updated category widget item
 *
 * @param {Object} item
 */
ve.ui.MWCategoriesPage.prototype.onUpdateSortKey = function ( item ) {
	// Replace meta item with updated one
	item.metaItem.replaceWith( this.getCategoryItemForInsertion( item, item.metaItem.getElement() ) );
};

/**
 * Bound to MetaList insert event for adding meta dialog components.
 *
 * @param {ve.dm.MetaItem} metaItem
 */
ve.ui.MWCategoriesPage.prototype.onMetaListInsert = function ( metaItem ) {
	// Responsible for adding UI components
	if ( metaItem.element.type === 'mwCategory' ) {
		this.categoryWidget.addItems(
			[ this.getCategoryItemFromMetaListItem( metaItem ) ],
			this.metaList.findItem( metaItem.getOffset(), metaItem.getIndex(), 'mwCategory' )
		);
	}
};

/**
 * Bound to MetaList insert event for removing meta dialog components.
 *
 * @param {ve.dm.MetaItem} metaItem
 */
ve.ui.MWCategoriesPage.prototype.onMetaListRemove = function ( metaItem ) {
	var item;

	if ( metaItem.element.type === 'mwCategory' ) {
		item = this.categoryWidget.categories[ this.getCategoryItemFromMetaListItem( metaItem ).value ];
		this.categoryWidget.removeItems( [ item ] );
	}
};

/**
 * Get default sort key item.
 *
 * @return {string} Default sort key item
 */
ve.ui.MWCategoriesPage.prototype.getDefaultSortKeyItem = function () {
	return this.metaList.getItemsInGroup( 'mwDefaultSort' )[ 0 ] || null;
};

/**
 * Get array of category items from meta list
 *
 * @return {Object[]} items
 */
ve.ui.MWCategoriesPage.prototype.getCategoryItems = function () {
	var i,
		items = [],
		categories = this.metaList.getItemsInGroup( 'mwCategory' );

	// Loop through MwCategories and build out items
	for ( i = 0; i < categories.length; i++ ) {
		items.push( this.getCategoryItemFromMetaListItem( categories[ i ] ) );
	}
	return items;
};

/**
 * Gets category item from meta list item
 *
 * @param {ve.dm.MWCategoryMetaItem} metaItem
 * @return {Object} item
 */
ve.ui.MWCategoriesPage.prototype.getCategoryItemFromMetaListItem = function ( metaItem ) {
	var title = mw.Title.newFromText( metaItem.element.attributes.category ),
		value = title ? title.getMainText() : '';

	return {
		name: metaItem.element.attributes.category,
		value: value,
		// TODO: sortkey is lcase, make consistent throughout CategoryWidget
		sortKey: metaItem.element.attributes.sortkey,
		metaItem: metaItem
	};
};

/**
 * Get metaList like object to insert from item
 *
 * @param {Object} item category widget item
 * @param {Object} [oldData] Metadata object that was previously associated with this item, if any
 * @return {Object} metaBase
 */
ve.ui.MWCategoriesPage.prototype.getCategoryItemForInsertion = function ( item, oldData ) {
	var newData = {
		attributes: { category: item.name, sortkey: item.sortKey || '' },
		type: 'mwCategory'
	};
	if ( oldData ) {
		return ve.extendObject( {}, oldData, newData );
	}
	return newData;
};

/**
 * Inserts a meta list item
 *
 * @param {Object} metaBase meta list insert object
 * @param {number} [offset] Offset of the meta items within the document
 * @param {number} [index] Index of the meta item within the group of meta items at this offset
 */
ve.ui.MWCategoriesPage.prototype.insertMetaListItem = function ( metaBase, offset, index ) {
	this.metaList.insertMeta( metaBase, offset, index );
};

/**
 * Setup categories page.
 *
 * @param {ve.dm.MetaList} metaList Meta list
 * @param {Object} [data] Dialog setup data
 */
ve.ui.MWCategoriesPage.prototype.setup = function ( metaList ) {
	var defaultSortKeyItem,
		page = this;

	this.metaList = metaList;
	this.metaList.connect( this, {
		insert: 'onMetaListInsert',
		remove: 'onMetaListRemove'
	} );

	defaultSortKeyItem = this.getDefaultSortKeyItem();

	this.categoryWidget.addItems( this.getCategoryItems() );

	this.defaultSortInput.setValue(
		defaultSortKeyItem ? defaultSortKeyItem.getAttribute( 'content' ) : ''
	);
	this.defaultSortKeyTouched = false;

	// Update input position after transition
	setTimeout( function () {
		page.categoryWidget.fitInput();
	}, OO.ui.theme.getDialogTransitionDuration() );
};

/**
 * @inheritdoc
 */
ve.ui.MWCategoriesPage.prototype.focus = function () {
	this.categoryWidget.focus();
};

/**
 * Tear down the page. This is called when the MWMetaDialog is torn down.
 *
 * @param {Object} [data] Dialog tear down data
 */
ve.ui.MWCategoriesPage.prototype.teardown = function ( data ) {
	var currentDefaultSortKeyItem = this.getDefaultSortKeyItem(),
		newDefaultSortKey = this.defaultSortInput.getValue(),
		newDefaultSortKeyData = {
			type: 'mwDefaultSort',
			attributes: { content: newDefaultSortKey }
		};

	if ( data && data.action === 'apply' ) {
		// Alter the default sort key iff it's been touched & is actually different
		if ( this.defaultSortKeyTouched ) {
			if ( newDefaultSortKey === '' ) {
				if ( currentDefaultSortKeyItem ) {
					currentDefaultSortKeyItem.remove();
				}
			} else {
				if ( !currentDefaultSortKeyItem ) {
					this.metaList.insertMeta( newDefaultSortKeyData );
				} else if ( currentDefaultSortKeyItem.getAttribute( 'content' ) !== newDefaultSortKey ) {
					currentDefaultSortKeyItem.replaceWith(
						ve.extendObject( true, {},
							currentDefaultSortKeyItem.getElement(),
							newDefaultSortKeyData
						)
					);
				}
			}
		}
	}

	this.categoryWidget.clearItems();
	this.metaList.disconnect( this );
	this.metaList = null;
};
