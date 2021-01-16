<?php



function HousePreview($name, $type)
{
    include 'DBselect.php';
    $result = $db->query("
SELECT *
FROM $type
WHERE name = '$name'
", $name)->fetchArray();


	
if ($type == 'client_housing_object') {
	
	
	
$AionDir = $_SERVER['DOCUMENT_ROOT'];
if (file_exists($AionDir . '/preview/house/' . strtolower($result["mesh"]) . '_2.jpg')) {
		
		$previewcontrols = '<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>';
		$previewindicator = '<ol class="carousel-indicators"><li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators" data-slide-to="1"></li></ol>';
		
		$previewthree = '<div class="carousel-item"><span style="float:left" ><img class="d-block w-100" src="https://aionpowerbook.com/Preview/house/' . strtolower($result["mesh"]) . '_2.jpg"></span></div>';
		
	}
$preview .= '<br><br><div id="carouselExampleIndicators" class="carousel slide armorcarousel" data-ride="carousel">'.$previewindicator.'<div class="carousel-inner"><div class="carousel-item active"><span style="float:left" ><img class="d-block w-100" src="https://aionpowerbook.com/Preview/house/' . strtolower($result["mesh"]) . '_1.jpg"></span></div>'.$previewthree.'</div>'.$previewcontrols.'</div>';


}
elseif ($type == 'client_housing_custom_part') {
		
$AionDir = $_SERVER['DOCUMENT_ROOT'];
if (file_exists($AionDir . '/preview/house/' . strtolower($result["filename"]) . '_2.jpg')) {
		
		$previewcontrols = '<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>';
		$previewindicator = '<ol class="carousel-indicators"><li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><li data-target="#carouselExampleIndicators" data-slide-to="1"></li></ol>';
		
		$previewthree = '<div class="carousel-item"><span style="float:left" ><img class="d-block w-100" src="https://aionpowerbook.com/Preview/house/' . strtolower($result["filename"]) . '_2.jpg"></span></div>';
		
	}
$preview .= '<br><br><div id="carouselExampleIndicators" class="carousel slide armorcarousel" data-ride="carousel">'.$previewindicator.'<div class="carousel-inner"><div class="carousel-item active"><span style="float:left" ><img class="d-block w-100" src="https://aionpowerbook.com/Preview/house/' . strtolower($result["filename"]) . '_1.jpg"></span></div>'.$previewthree.'</div>'.$previewcontrols.'</div>';

		
}

else {
		$preview = '';
	}
	
	
	
	
	return $preview;
}