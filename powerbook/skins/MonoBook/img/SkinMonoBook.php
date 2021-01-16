<?php
/**
 * MonoBook nouveau.
 *
 * Translated from gwicke's previous TAL template version to remove
 * dependency on PHPTAL.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Skins
 */

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @ingroup Skins
 */
class SkinMonoBook extends SkinTemplate {
	/** Using MonoBook. */
	public $skinname = 'monobook';
	public $stylename = 'MonoBook';
	public $template = 'MonoBookTemplate';

	/**
	 * @param OutputPage $out
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );

		$out->addModuleStyles( array(
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.monobook.styles'
		) );

		// TODO: Migrate all of these
		$out->addStyle( $this->stylename . '/IE60Fixes.css', 'screen', 'IE 6' );
		$out->addStyle( $this->stylename . '/IE70Fixes.css', 'screen', 'IE 7' );
		$out->addHeadItem('danalytics','<script type="text/javascript">window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More info","link":null,"theme":"dark-bottom"};</script><script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script><link rel="stylesheet" type="text/css" href="http://aionpowerbook.com/powerbook/extensions/DataTables/DataTables-1.10.0/media/css/jquery.dataTables.css" media="screen"><script type="text/javascript" language="javascript" src="http://aionpowerbook.com/powerbook/extensions/DataTables/DataTables-1.10.0/media/js/jquery.js"></script><script type="text/javascript" language="javascript" src="http://aionpowerbook.com/powerbook/extensions/DataTables/DataTables-1.10.0/media/js/jquery.dataTables.js"></script><script type="text/javascript" language="javascript" >
			$(document).ready(function() {
				var dataTable = $(".dataTable").DataTable( {
"columnDefs": [ { targets: \'no-sorting\', orderable: false } ],
"order": [[ 0, "desc" ]]
				} );
			} );
		</script><script type="text/javascript" language="javascript" >
			$(document).ready(function() {
				var dataTable = $(".searchdataTable").DataTable( {
"columnDefs": [ { targets: \'no-sorting\', orderable: false } ],
"order": []
				} );
			} );
		</script><script src="http://aionpowerbook.com/msdropdown/js/msdropdown/jquery.dd.min.js" type="text/javascript"></script><link rel="stylesheet" type="text/css" href="http://aionpowerbook.com/msdropdown/css/msdropdown/dd.css" /><script type="text/javascript" language="javascript" >
$(document).ready(function(e) {
try {
$(".languageselect").msDropDown();
} catch(e) {
alert(e.message);
}
});</script>
<script type="text/javascript" src="http://aionpowerbook.com/fancybox/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="http://aionpowerbook.com/fancybox/source/jquery.fancybox.pack.js"></script>
<link rel="stylesheet" type="text/css" href="http://aionpowerbook.com/fancybox/source/jquery.fancybox.css" media="screen" />
<script type="text/javascript" language="javascript" >
$(document).ready(function() {


	
	$("#various3").fancybox({
\'width\': 650,
\'height\': 700,
\'scrolling\' : \'no\',
\'type\': \'iframe\',
\'transitionIn\': \'elastic\',
\'transitionOut\': \'elastic\',
	});
	
	$(".expand_map_btn").fancybox({	
\'width\': 650,
\'height\': 700,
\'scrolling\' : \'no\',
\'preload\'   : true,
\'type\': \'iframe\',
\'transitionIn\': \'elastic\',
\'transitionOut\': \'elastic\',
	});	
	
	
	
	$("#various4").fancybox({
\'width\': 650,
\'height\': 700,
\'scrolling\' : \'no\',
\'preload\'   : true,
\'type\': \'iframe\',
\'transitionIn\': \'elastic\',
\'transitionOut\': \'elastic\',
	});	
	$("#fancyquest").fancybox({
\'width\': 430,
\'height\': 530,
\'scrolling\' : \'no\',
\'preload\'   : true,
\'type\': \'iframe\',
\'transitionIn\': \'elastic\',
\'transitionOut\': \'elastic\',
	});	
	
	$("#questvideo").fancybox({
		\'type\': \'iframe\',
		\'width\': 640,
		\'height\': 385,
		openEffect  : \'none\',
		closeEffect : \'none\',
		helpers : {
			media : {}
		}
	});	
	
});
		</script>
<script>
$(document).ready(function(){
	$(".additionalinfo").tipsy({html: true,
fade: true,
delayIn: 0, 
delayOut: 500,
gravity: \'n\'});
    $(".additionalinfo").click(function(){
        $(".devdetails").toggle();
    });
	$(".randombonuses").click(function(){
        $(".randombonusesdetails").toggle();
    });
	$(".enchantskills").click(function(){
        $(".enchantskillsdetails").toggle();
    });
});
</script>
<script type="text/javascript" src="http://aionpowerbook.com/tipsy-master/src/javascripts/jquery.tipsy.js"></script>
<link rel="stylesheet" href="http://aionpowerbook.com/tipsy-master/src/stylesheets/tipsy.css" type="text/css" />
<script type="text/javascript">
  $(function() {
    
    
    $(\'#searchBody\').tipsy({fallback: "<p align=\"left\">Search in the selected language, Korean or by DEV_NAME.<br><br>Search operators:<br>\'White Dragon\' Matches either White, Dragon, or both<br>\'+White +Dragon\' Matches both White and Dragon<br>\'+White -Dragon\' Matches White but not Dragon<br>\'+White ~Dragon\' Matches White, but marks down as less relevant records that contain Dragon<br>\' +Comm* \' Matches Comm, Command, Commander, Commander\'s Holy, etc<br>\' \"White Dragon\" \' Matches the exact term \"White Dragon\"<br>\'+White +(Dragon King)\' Matches either \"White Dragon\" or \"White King\"<br>\'+White +(>Dragon &lt;King)\' Matches either \"White Dragon\" or \"White King\", with records matching \"White Dragon\" being considered more relevant</p>",
html: true,
fade: true,
delayIn: 0, 
delayOut: 1000,
gravity: \'n\'	});
 

  });
</script>
<!-- Latest compiled and minified CSS -->




<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript">
$(\'#myTabs a\').click(function (e) {
  e.preventDefault()
  $(this).tab(\'show\')
})
$(\'#myTabs a[href="#profile"]\').tab(\'show\') // Select tab by name
$(\'#myTabs a:first\').tab(\'show\') // Select first tab
$(\'#myTabs a:last\').tab(\'show\') // Select last tab
$(\'#myTabs li:eq(2) a\').tab(\'show\') // Select third tab (0-indexed)
</script>
<script type="text/javascript" language="javascript" src="http://cdn.jsdelivr.net/qtip2/2.2.1/jquery.qtip.min.js"></script>
<script type="text/javascript">
// Create the tooltips only when document ready
 $(document).ready( function()
 {
     // MAKE SURE YOUR SELECTOR MATCHES SOMETHING IN YOUR HTML!!!
     $(\'.tooltipzy\').each(function() {
         $(this).qtip({
            content: {
                text: function(event, api) {
                    $.ajax({
                        url: "http://aionpowerbook.com/powerbook/extensions/AionExtensions/tooltip.php?lang="  + api.elements.target.attr(\'tooltiplang\') + "&id=" + api.elements.target.attr(\'tooltipID\')
                    })
                    .then(function(content) {
                        // Set the tooltip content upon successful retrieval
                        api.set(\'content.text\', content);
                    }, function(xhr, status, error) {
                        // Upon failure... set the tooltip content to error
                        api.set(\'content.text\', status + \': \' + error);
                    });
        
                    return \'Loading...\'; // Set some initial text
                }
            },
            position: {
                target: \'mouse\'
            },
            style: \'qtip-wiki\'
         });
     });
	 
 });
</script>
<script src="http://aionpowerbook.com/testjson/js/jquery.flexslider-min.js"></script>
<!-- bxSlider CSS file -->
<link href="http://aionpowerbook.com/testjson/lib/flexslider.css" rel="stylesheet" />
<script>
$(document).ready(function() {
  $(\'.flexslider\').flexslider({
    animation: "slide",
	slideshow: false,
	animationLoop: false
  });
});
$(document).ready(function() {
  $(\'.flexslider2\').flexslider({
    animation: "slide"
  });
});
</script>


');
		
		
	}
}
