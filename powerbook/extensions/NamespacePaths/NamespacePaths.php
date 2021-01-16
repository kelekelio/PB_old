<?php
/**
 * Namespace Paths
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Friesen (http://danf.ca/mw/)
 * @copyright Copyright © 2010 – Daniel Friesen
 * @license https://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link https://www.mediawiki.org/wiki/Extension:NamespacePaths Documentation
 */

if ( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'NamespacePaths',
	'version' => '1.1.0',
	'author' => array( '[http://danf.ca/mw/ Daniel Friesen]', '[http://redwerks.org/mediawiki/ Redwerks]' ),
	'url' => 'https://www.mediawiki.org/wiki/Extension:NamespacePaths',
	'descriptionmsg' => 'namespacepaths-desc',
);

$wgMessagesDirs['NamespacePaths'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['NamespacePaths'] = dirname( __FILE__ ) . '/NamespacePaths.i18n.php';


$wgHooks['WebRequestPathInfoRouter'][] = 'efNamepacePathRouter';

function efNamepacePathRouter( $router ) {
	$router->add( 'powerbook/Item/$1', array( 'title' => 'Item', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Item:$1', array( 'title' => 'Item', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Item/$1/$2', array( 'title' => 'Item', 'dbid' => '$1', 'setlang' => '$2' ) );
	
	$router->add( 'powerbook/Quest/$1', array( 'title' => 'Quest', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Quest:$1', array( 'title' => 'Quest', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Quest/$1/$2', array( 'title' => 'Quest', 'dbid' => '$1', 'setlang' => '$2' ) );
	
	$router->add( 'powerbook/NPC/$1', array( 'title' => 'NPC', 'dbid' => '$1' ) );
	$router->add( 'powerbook/NPC:$1', array( 'title' => 'NPC', 'dbid' => '$1' ) );
	$router->add( 'powerbook/NPC/$1/$2', array( 'title' => 'NPC', 'dbid' => '$1', 'setlang' => '$2' ) );
	
	$router->add( 'powerbook/Skill/$1', array( 'title' => 'Skill', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Skill:$1', array( 'title' => 'Skill', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Skill/$1/$2', array( 'title' => 'Skill', 'dbid' => '$1', 'setlang' => '$2' ) );
	
	$router->add( 'powerbook/Craft/$1', array( 'title' => 'Craft', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Craft/$1/$2', array( 'title' => 'Craft', 'dbid' => '$1', 'setlang' => '$2' ) );
	
	$router->add( 'powerbook/Pet/$1', array( 'title' => 'Dbpet', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Pet/$1/$2', array( 'title' => 'Dbpet', 'dbid' => '$1', 'setlang' => '$2' ) );
	
	$router->add( 'powerbook/Minion/$1', array( 'title' => 'Dbminion', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Minion/$1/$2', array( 'title' => 'Dbminion', 'dbid' => '$1', 'setlang' => '$2' ) );
	
	$router->add( 'powerbook/Gather/$1', array( 'title' => 'Gather', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Gather/$1/$2', array( 'title' => 'Gather', 'dbid' => '$1', 'setlang' => '$2' ) );
	
	$router->add( 'powerbook/Transformation/$1', array( 'title' => 'Dbtransformation', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Transformation/$1/$2', array( 'title' => 'Dbtransformation', 'dbid' => '$1', 'setlang' => '$2' ) );
	
	$router->add( 'powerbook/Gathering/$1', array( 'title' => 'Dbgathering', 'dbid' => '$1' ) );
	$router->add( 'powerbook/Gathering/$1/$2', array( 'title' => 'Dbgathering', 'dbid' => '$1', 'setlang' => '$2' ) );
	
	return true;
}

