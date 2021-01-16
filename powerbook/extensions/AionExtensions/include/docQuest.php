<?php



function docQuest($name, $language)
{
	$lowname = strtolower($name);

$AionDir = $_SERVER['DOCUMENT_ROOT'];

	if (file_exists($AionDir . '/DOC_ITEM/' .$language . '/' . $lowname . '.html')) {
		$htmlfile = $AionDir . '/DOC_ITEM/' .$language . '/' . $lowname . '.html';
	} else {
	if (file_exists($AionDir . '/DOC_ITEM/ko/' . $lowname . '.html')) {
		$htmlfile = $AionDir . '/DOC_ITEM/ko/' . $lowname . '.html';
		}else {
			$htmlfile = $AionDir . '/DOC_ITEM/doc_quest.html';
		}
	}



$xmlfile = file_get_contents($htmlfile);

$fixdxml = strtr($xmlfile, array(
    '<Contents cdata="true">' => '<Content><![CDATA[',
	'</Contents>' => ']]></Content>',
	'<contents cdata="true">' => '<Content><![CDATA[',
	'</contents>' => ']]></Content>'	
));

$xml = new SimpleXMLElement($fixdxml);


foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_1")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_2")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_3")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_4")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_5")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_6")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_7")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_8")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_9")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_10")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_11")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_12")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_13")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_14")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_15")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_16")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_17")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_18")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_19")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}
foreach ($xml->xpath('//HtmlPage[starts-with(@name, "page_20")]') as $value) {
   $questtext .= '<br>' . $value->asXml();
}


$finalquest = str_replace(']]>', '', $questtext);





$questitem = preg_replace_callback('/\[%dic:STR_DIC_I_(?<item>[a-z_0-9]+)\]/i', function(array $matches) use ($language) {
return dictionaryitemlink($matches['item'], $language);
}, $finalquest);

$questnpc = preg_replace_callback('/\[%dic:STR_DIC_N_(?<npc>[a-z_0-9]+)\]/i', function(array $matches) use ($language) {
return dictionarynpclink($matches['npc'], $language);
}, $questitem);

$questmonster = preg_replace_callback('/\[%dic:STR_DIC_M_(?<monster>[a-z_0-9]+)\]/i', function(array $matches) use ($language) {
return dictionarymonsterlink($matches['monster'], $language);
}, $questnpc);

$questt = preg_replace_callback('/\[%dic:(?<translation>[a-z_0-9]+)\]/i', function(array $matches) use ($language) {
return dictionarylink($matches['translation'], $language);
}, $questmonster);




$questtext = strtr($questt, array(
    ".dds" => '.png',
	"Textures/UI/doc_item/" => 'https://aionpowerbook.com/DOC_ITEM/textures/'
));






	
	return $questtext;
}