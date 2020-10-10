<?php
    session_start();

    $captcha_num = rand(100000, 999999); //captcha value of 6 digits
    $_SESSION['code'] = $captcha_num;
    
    $font_size = 10;
    $img_width = 75;
    $img_height = 25;
    
    $image = imagecreatetruecolor($img_width, $img_height); // create background image with dimensions
    $background_color = imagecolorallocate($image, 255, 255, 255); // set background color
    $text_color = imagecolorallocate($image, 0, 0, 0); // set captcha text color
    
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header('Content-type: image/png');

    imagefill($image, 0, 0, $background_color);
    imagettftext($image, $font_size, rand(-15, 15), rand(5, 15), rand(20, 22), $text_color, __DIR__.'/BEBAS.ttf', $captcha_num); //captcha image generation
    imagepng($image);
?>