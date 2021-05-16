<?php
// File and new size
$filename = 'myimage.png';
$dst_image = 'result.png';

$newwidth=200;
$newheight=100;
list($width, $height) = getimagesize($filename);

$img= imagecreatefrompng($filename);

$newImage= imagecreatetruecolor( $newwidth, $newheight );

$white = imagecolorallocate($newImage, 255, 255, 255);
imagefill($newImage, 0, 0, $white);


imagecopyresampled( $newImage, $img, 50,0,0,0, 100, $newheight, $width, $height );
imagepng( $newImage, $dst_image ); 


