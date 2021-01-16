<?php
$mesh = $_GET['mesh'];
$id = $_GET['meshID'];


function createThumbnail( $src, $max_w, $max_h, $fle ) {
    $img_url = file_get_contents( $src );
    $img = imagecreatefromstring( $img_url );
    $old_x = imagesx( $img );   // Source image width
    $old_y = imagesy( $img );   // Source image height
	
	
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$dir = $serv . '/preview/thumb/';
	

    // Conditions for maintaining output aspect ratio
    switch ( true ) {
        case ( $old_x > $old_y ):   // If source image is in landscape orientation
            $thumb_w = $max_w;
            $thumb_h = $old_y / $old_x * $max_w;
            break;
        case ( $old_x < $old_y ):   // If source image is in portrait orientation
            $thumb_w  = $old_x / $old_y * $max_h;
            $thumb_h  = $max_h;
            break;
        case ( $old_x == $old_y ):  // If source image is a square
            $thumb_w = $max_w;
            $thumb_h = $max_h;
            break;
    }

    $thumb = imagecreatetruecolor( $thumb_w, $thumb_h );

/**
    I quoted this one out since I ran in compatibility issues, I'm using PHP 5.3.x
    and imagesetinterpolation() doesn't exist in this version

    imagesetinterpolation( $thumb, IMG_SINC ); // Recommended Downsizing Algorithm
**/

    imagecopyresampled( $thumb, $img, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y );

    $result = imagejpeg( $thumb, $dir . $fle );

    imagedestroy( $thumb ); 
    imagedestroy( $img );

    return $result;
}





if (($id >= 100000001) && ($id <= 102299999)) {
	
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$dir = $serv . '/preview/thumb/' . $mesh . '_t.jpg';
	$exists = file_exists($dir);
	if (!$exists) {
		
		$mainpic = $serv . '/preview/weapon/' . $mesh . '.jpg';
		$Mainexists = file_exists($mainpic);
		if (!$Mainexists) {
			
		}else {
			$thumb = createThumbnail('https://aionpowerbook.com/preview/weapon/'.$mesh.'.jpg', 462, 260, $mesh . '_t.jpg');
		}
		
		$preview = '<div class="row"><div class="previewcolumn"><img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_t.jpg"  style="height:100%"></div></div>';
	}else {
		$preview = '<div class="row"><div class="previewcolumn"><img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_t.jpg"  style="height:100%"></div></div>';
	}
	
	
	
	
	
}

elseif (($id >= 110600003) && ($id <= 114069999)) {
	
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$dir = $serv . '/preview/thumb/' . $mesh . '_1_t.jpg';
	$exists = file_exists($dir);
	if (!$exists) {
		
		$mainpic = $serv . '/preview/armor/' . $mesh . '_1.jpg';
		$Mainexists = file_exists($mainpic);
		if (!$Mainexists) {
			
		}else {
			$thumb = createThumbnail('https://aionpowerbook.com/preview/armor/'.$mesh.'_1.jpg', 330, 750, $mesh . '_1_t.jpg');
		}
		
		$preview1 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%">';
	}else {
		$preview1 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%">';
	}
	
	$dir2 = $serv . '/preview/thumb/' . $mesh . '_2_t.jpg';
	$exists2 = file_exists($dir2);
	if (!$exists2) {
		
		$mainpic2 = $serv . '/preview/armor/' . $mesh . '_2.jpg';
		$Mainexists2 = file_exists($mainpic2);
		if (!$Mainexists2) {
			
		}else {
			$thumb2 = createThumbnail('https://aionpowerbook.com/preview/armor/'.$mesh.'_2.jpg', 330, 750, $mesh . '_2_t.jpg');
		}
		
		$preview2 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_2_t.jpg"  style="height:100%">';
	}else {
		$preview2 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_2_t.jpg"  style="height:100%">';
	}
	
	
	
	
	
	
	
	
	
	
	$preview = '
<div class="row">
  <div class="previewcolumn">
    '.$preview1.'
  </div>
  <div class="previewcolumn">
    '.$preview2.'
  </div>
</div>
	';
	
	
	
}

elseif (($id >= 115000011) && ($id <= 115069999)) {
	
	
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$dir = $serv . '/preview/thumb/' . $mesh . '_t.jpg';
	$exists = file_exists($dir);
	if (!$exists) {
		
		$mainpic = $serv . '/preview/shield/' . $mesh . '.jpg';
		$Mainexists = file_exists($mainpic);
		if (!$Mainexists) {
			
		}else {
			$thumb = createThumbnail('https://aionpowerbook.com/preview/shield/'.$mesh.'.jpg', 462, 260, $mesh . '_t.jpg');
		}
		
		$preview = '<div class="row"><div class="previewcolumn"><img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_t.jpg"  style="height:100%"></div></div>';
	}else {
		$preview = '<div class="row"><div class="previewcolumn"><img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_t.jpg"  style="height:100%"></div></div>';
	}
	
	
}

elseif (($id >= 187000000) && ($id <= 187069999)) {
	
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$dir = $serv . '/preview/thumb/' . $mesh . '_1_t.jpg';
	$exists = file_exists($dir);
	if (!$exists) {
		
		$mainpic = $serv . '/preview/wings/' . $mesh . '_1.jpg';
		$Mainexists = file_exists($mainpic);
		if (!$Mainexists) {
			
		}else {
			$thumb = createThumbnail('https://aionpowerbook.com/preview/wings/'.$mesh.'_1.jpg', 462, 260, $mesh . '_1_t.jpg');
		}
		
		$preview = '<div class="row"><div class="previewcolumn"><img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%"></div></div>';
	}else {
		$preview = '<div class="row"><div class="previewcolumn"><img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%"></div></div>';
	}
	
	
}

elseif (($id >= 190100000) && ($id <= 190199999)) {
	
	
	$preview = '
<div class="row">
  <div class="previewcolumn">
    <img src="https://aionpowerbook.com/preview/'.$mesh.'.jpg"  style="height:100%">
  </div>
</div>
	';
	
}


elseif ($id == 'cloth') {
	
	
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$dir = $serv . '/preview/thumb/' . $mesh . '_1_t.jpg';
	$exists = file_exists($dir);
	if (!$exists) {
		
		$mainpic = $serv . '/preview/armor/' . $mesh . '_1.jpg';
		$Mainexists = file_exists($mainpic);
		if (!$Mainexists) {
			
		}else {
			$thumb = createThumbnail('https://aionpowerbook.com/preview/armor/'.$mesh.'_1.jpg', 330, 750, $mesh . '_1_t.jpg');
		}
		
		$preview1 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%">';
	}else {
		$preview1 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%">';
	}
	
	$dir2 = $serv . '/preview/thumb/' . $mesh . '_2_t.jpg';
	$exists2 = file_exists($dir2);
	if (!$exists2) {
		
		$mainpic2 = $serv . '/preview/armor/' . $mesh . '_2.jpg';
		$Mainexists2 = file_exists($mainpic2);
		if (!$Mainexists2) {
			
		}else {
			$thumb2 = createThumbnail('https://aionpowerbook.com/preview/armor/'.$mesh.'_2.jpg', 330, 750, $mesh . '_2_t.jpg');
		}
		
		$preview2 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_2_t.jpg"  style="height:100%">';
	}else {
		$preview2 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_2_t.jpg"  style="height:100%">';
	}
	
	
	
	
	
	
	
	
	
	
	$preview = '
<div class="row">
  <div class="previewcolumn">
    '.$preview1.'
  </div>
  <div class="previewcolumn">
    '.$preview2.'
  </div>
</div>
	';
	
	
}

elseif ($id == 'leather') {
	
	
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$dir = $serv . '/preview/thumb/' . $mesh . '_1_t.jpg';
	$exists = file_exists($dir);
	if (!$exists) {
		
		$mainpic = $serv . '/preview/armor/' . $mesh . '_1.jpg';
		$Mainexists = file_exists($mainpic);
		if (!$Mainexists) {
			
		}else {
			$thumb = createThumbnail('https://aionpowerbook.com/preview/armor/'.$mesh.'_1.jpg', 330, 750, $mesh . '_1_t.jpg');
		}
		
		$preview1 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%">';
	}else {
		$preview1 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%">';
	}
	
	$dir2 = $serv . '/preview/thumb/' . $mesh . '_2_t.jpg';
	$exists2 = file_exists($dir2);
	if (!$exists2) {
		
		$mainpic2 = $serv . '/preview/armor/' . $mesh . '_2.jpg';
		$Mainexists2 = file_exists($mainpic2);
		if (!$Mainexists2) {
			
		}else {
			$thumb2 = createThumbnail('https://aionpowerbook.com/preview/armor/'.$mesh.'_2.jpg', 330, 750, $mesh . '_2_t.jpg');
		}
		
		$preview2 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_2_t.jpg"  style="height:100%">';
	}else {
		$preview2 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_2_t.jpg"  style="height:100%">';
	}
	
	
	
	
	
	
	
	
	
	
	$preview = '
<div class="row">
  <div class="previewcolumn">
    '.$preview1.'
  </div>
  <div class="previewcolumn">
    '.$preview2.'
  </div>
</div>
	';
	
	
}

elseif ($id == 'chain') {
	
	
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$dir = $serv . '/preview/thumb/' . $mesh . '_1_t.jpg';
	$exists = file_exists($dir);
	if (!$exists) {
		
		$mainpic = $serv . '/preview/armor/' . $mesh . '_1.jpg';
		$Mainexists = file_exists($mainpic);
		if (!$Mainexists) {
			
		}else {
			$thumb = createThumbnail('https://aionpowerbook.com/preview/armor/'.$mesh.'_1.jpg', 330, 750, $mesh . '_1_t.jpg');
		}
		
		$preview1 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%">';
	}else {
		$preview1 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%">';
	}
	
	$dir2 = $serv . '/preview/thumb/' . $mesh . '_2_t.jpg';
	$exists2 = file_exists($dir2);
	if (!$exists2) {
		
		$mainpic2 = $serv . '/preview/armor/' . $mesh . '_2.jpg';
		$Mainexists2 = file_exists($mainpic2);
		if (!$Mainexists2) {
			
		}else {
			$thumb2 = createThumbnail('https://aionpowerbook.com/preview/armor/'.$mesh.'_2.jpg', 330, 750, $mesh . '_2_t.jpg');
		}
		
		$preview2 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_2_t.jpg"  style="height:100%">';
	}else {
		$preview2 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_2_t.jpg"  style="height:100%">';
	}
	
	
	
	
	
	
	
	
	
	
	$preview = '
<div class="row">
  <div class="previewcolumn">
    '.$preview1.'
  </div>
  <div class="previewcolumn">
    '.$preview2.'
  </div>
</div>
	';
	
	
}

elseif ($id == 'plate') {
	
	
	$serv = $_SERVER['DOCUMENT_ROOT'];
	$dir = $serv . '/preview/thumb/' . $mesh . '_1_t.jpg';
	$exists = file_exists($dir);
	if (!$exists) {
		
		$mainpic = $serv . '/preview/armor/' . $mesh . '_1.jpg';
		$Mainexists = file_exists($mainpic);
		if (!$Mainexists) {
			
		}else {
			$thumb = createThumbnail('https://aionpowerbook.com/preview/armor/'.$mesh.'_1.jpg', 330, 750, $mesh . '_1_t.jpg');
		}
		
		$preview1 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%">';
	}else {
		$preview1 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_1_t.jpg"  style="height:100%">';
	}
	
	$dir2 = $serv . '/preview/thumb/' . $mesh . '_2_t.jpg';
	$exists2 = file_exists($dir2);
	if (!$exists2) {
		
		$mainpic2 = $serv . '/preview/armor/' . $mesh . '_2.jpg';
		$Mainexists2 = file_exists($mainpic2);
		if (!$Mainexists2) {
			
		}else {
			$thumb2 = createThumbnail('https://aionpowerbook.com/preview/armor/'.$mesh.'_2.jpg', 330, 750, $mesh . '_2_t.jpg');
		}
		
		$preview2 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_2_t.jpg"  style="height:100%">';
	}else {
		$preview2 = '<img src="https://aionpowerbook.com/preview/thumb/'.$mesh.'_2_t.jpg"  style="height:100%">';
	}
	
	
	
	
	
	
	
	
	
	
	$preview = '
<div class="row">
  <div class="previewcolumn">
    '.$preview1.'
  </div>
  <div class="previewcolumn">
    '.$preview2.'
  </div>
</div>
	';
	
	
}








?>


<html>
<head>
<style>


.previewcolumn {
  float: left;
  width: 45%;
  height: 260px;
  padding: 5px;
}

.row {
  content: "";
  clear: both;
  display: table;
  width: 310px;
  height: 270px
}

.previewcolumn img {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
</style>
</head>
<body>
<?php 
echo $preview;
?>
</body>
<html>