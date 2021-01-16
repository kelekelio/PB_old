<?php
$id =  $_GET['id'];

$serv = $_SERVER['DOCUMENT_ROOT'];
$en = $serv . '/powerbook/extensions/AionExtensions/cache/itemdetails/en/'.$id.'.html';
$de = $serv . '/powerbook/extensions/AionExtensions/cache/itemdetails/de/'.$id.'.html';
$es = $serv . '/powerbook/extensions/AionExtensions/cache/itemdetails/es/'.$id.'.html';
$fr = $serv . '/powerbook/extensions/AionExtensions/cache/itemdetails/fr/'.$id.'.html';
$it = $serv . '/powerbook/extensions/AionExtensions/cache/itemdetails/it/'.$id.'.html';
$ko = $serv . '/powerbook/extensions/AionExtensions/cache/itemdetails/ko/'.$id.'.html';
$pl = $serv . '/powerbook/extensions/AionExtensions/cache/itemdetails/pl/'.$id.'.html';
$us = $serv . '/powerbook/extensions/AionExtensions/cache/itemdetails/us/'.$id.'.html';

if (file_exists($en)) { 
	unlink ($en); 
	$UnEN = 'EN Deleted<br>';
	}
if (file_exists($de)) { 
	unlink ($de); 
	$UnDE = 'DE Deleted<br>';
	}
if (file_exists($es)) { 
	unlink ($es); 
	$UnES = 'ES Deleted<br>';
	}
if (file_exists($fr)) { 
	unlink ($fr); 
	$UnFR = 'FR Deleted<br>';
	}
if (file_exists($it)) { 
	unlink ($it); 
	$UnIT = 'IT Deleted<br>';
	}
if (file_exists($ko)) { 
	unlink ($ko); 
	$UnKO = 'KO Deleted<br>';
	}
if (file_exists($pl)) { 
	unlink ($pl); 
	$UnPL = 'PL Deleted<br>';
	}
if (file_exists($us)) { 
	unlink ($us); 
	$UnUS = 'US Deleted<br>';
	}
	

echo $UnEN . $UnDE . $UnES . $UnFR . $UnIT . $UnKO . $UnPL . $UnUS;
?>
