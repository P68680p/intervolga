<?php

// set image width and height
$w = 20000;
$h = 20000;
          
// randoms coords for polygons
$coords = [];
foreach(range(0,127) as $p){
	$coords[] = rand(0,$w);
	$coords[] = rand(0,$h);
}

// create image
$image = imagecreatetruecolor($w, $h);

// fill the background
imagefilledrectangle($image, 0, 0, $w, $h, imagecolorallocate($image, mt_rand(0,255) , mt_rand(0,255) , mt_rand(0,255)));

// draw some polygons
imagefilledpolygon($image, $coords, 48, imagecolorallocate($image, mt_rand(0,255) , mt_rand(0,255) , mt_rand(0,255)));
imagefilledpolygon($image, $coords, 24, imagecolorallocate($image, mt_rand(0,255) , mt_rand(0,255) , mt_rand(0,255)));


imagepng($image, "myimage.png");
?>
