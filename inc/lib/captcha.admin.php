<?

  // initialise image with dimensions of 120 x 30 pixels
  $image = @imagecreatetruecolor(120, 30);

  // set background to white and allocate drawing colours
  $background = imagecolorallocate($image,0, 66, 37);
  imagefill($image, 0, 0, $background);
  $linecolor = imagecolorallocate($image, 255, 255, 255);
  $textcolor = imagecolorallocate($image, 255, 255, 255);


  session_start();

  // add random digits to canvas
  $digit = '';
  for($x = 15; $x <= 95; $x += 20) {
    $digit .= ($num = rand(0, 9));
    imagechar($image, rand(3, 5), $x, rand(2, 14), $num, $textcolor);
  }


  // record digits in session variable
  $_SESSION['captcha_secure'] = $digit;


  // display image and clean up
  header('Content-type: image/png');
  imagepng($image);
  imagedestroy($image);
?>