<?php
session_start();
header('content-type: image/jpeg');
$text=$_SESSION['secure'];
$font_size=30;

$image_width=100;
$image_height=60;

$image=imagecreate($image_width,$image_height);
imagecolorallocate($image,255,255,255);
$font_color=imagecolorallocate($image,0,0,0);
for($x=1;$x<=30;$x++)
{
  $x1=rand(1,100);
  $y1=rand(1,100);
  $x2=rand(1,100);
  $y2=rand(1,100);
  imageline($image,$x1,$y1,$x2,$y2,$font_color);
}
$font_file='font.ttf';
imagettftext($image,$font_size,0,15,30,$font_color,$font_file,$text);//with font
//imagestring($image,$font_size,15,30,$text,$font_color);//without font
imagejpeg($image);
?>