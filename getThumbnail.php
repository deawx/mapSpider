<?php
  extract($_GET);
//   error_reporting(E_ALL);
//   ini_set('display_errors', 1);
session_cache_limiter('none');
  header('Cache-control: max-age='.(60*60*24*30));
header('Expires: '.gmdate(DATE_RFC1123,time()+60*60*24*30));
function make_thumb($src, $desired_width,$desired_h) {

  $filename = $src;

// Set a maximum height and width
$width = $desired_width;
$height = $desired_h;

// Content type


// Get new dimensions
list($width_orig, $height_orig) = getimagesize($filename);

$ratio_orig = $width_orig/$height_orig;

if ($width/$height > $ratio_orig) {
   $width = $height*$ratio_orig;
} else {
   $height = $width/$ratio_orig;
}

// Resample
// $fname=basename($src);
$mimeType=mime_content_type($src);
$image="";
switch($mimeType)
{
  case "image/png":
    $image = imagecreatefrompng($filename);
  break;
  case "image/jpeg":
    $image = imagecreatefromjpeg($filename);
  break;
  default:
  break;
}
if(!$image)
{
  return null;
}
$image_p = imagecreatetruecolor($width, $height);

imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
  return $image_p;
}
//   $src='header_bkg.png';
  $image = make_thumb($src,100,100);
  $mimeType=mime_content_type($src);
  switch($mimeType)
  {
    case "image/png":
      header('Content-Type: image/png');
      imagepng($image);
//       $image = imagecreatefrompng($filename);
    break;
    case "image/jpeg":
      header('Content-Type: image/pjpeg');
      imagejpeg($image);
//       $image = imagecreatefromjpeg($filename);
    break;
    default:
    break;
  }
  // If 0 is provided as a width or height parameter,
  // aspect ratio is maintained
//   $image->thumbnailImage(100, 0);
//   echo $image;
?>
