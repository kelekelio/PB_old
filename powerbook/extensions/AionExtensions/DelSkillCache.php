<?php
$id =  $_GET['id'];

$serv = $_SERVER['DOCUMENT_ROOT'];
$en = $serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/en/'.$id.'.html';
$de = $serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/de/'.$id.'.html';
$es = $serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/es/'.$id.'.html';
$fr = $serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/fr/'.$id.'.html';
$it = $serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/it/'.$id.'.html';
$ko = $serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/ko/'.$id.'.html';
$pl = $serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/pl/'.$id.'.html';
$us = $serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/us/'.$id.'.html';

if (file_exists($en)) {
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/en/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilltooltip/en/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skillcompare/en/'.$id.'.html');
	$UnEN = 'EN Deleted<br>';
}
if (file_exists($de)) {
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/de/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilltooltip/de/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skillcompare/de/'.$id.'.html');
	$UnDE = 'DE Deleted<br>';
}
if (file_exists($es)) {
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/es/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilltooltip/es/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skillcompare/es/'.$id.'.html');
	$UnES = 'ES Deleted<br>';
}
if (file_exists($fr)) {
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/fr/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilltooltip/fr/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skillcompare/fr/'.$id.'.html');
	$UnFR = 'FR Deleted<br>';
}
if (file_exists($it)) {
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/it/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilltooltip/it/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skillcompare/it/'.$id.'.html');
	$UnIT = 'IT Deleted<br>';
}
if (file_exists($ko)) {
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/ko/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilltooltip/ko/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skillcompare/ko/'.$id.'.html');
	$UnKO = 'KO Deleted<br>';
}
if (file_exists($pl)) {
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/pl/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilltooltip/pl/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skillcompare/pl/'.$id.'.html');
	$UnPL = 'PL Deleted<br>';
}
if (file_exists($us)) {
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilldetails/us/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skilltooltip/us/'.$id.'.html');
	unlink ($serv . '/powerbook/extensions/AionExtensions/cache/skillcompare/us/'.$id.'.html');
	$UnUS = 'US Deleted<br>';
}


echo $UnEN . $UnDE . $UnES . $UnFR . $UnIT . $UnKO . $UnPL . $UnUS;
?>
