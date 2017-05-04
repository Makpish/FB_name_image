<?php

    error_reporting(0);
    $url = "http://graph.facebook.com/".$_GET['id']."/picture?width=720&heigth=720";
    $file = "./avatar/".$_GET['name'].'.jpg';
    file_put_contents($file, file_get_contents($url));

    $jpg_image = imagecreatefromjpeg($file);
    $white = imagecolorallocate($jpg_image, 255, 255, 255);
    $font_path = './font.ttf';
    $text = $_GET['name'];
    imagettftext($jpg_image, 50, 0, 0, 70, $white, $font_path, $text);
    imagejpeg($jpg_image,$file);
    imagedestroy($jpg_image);
    echo "<img src='$file'/>";

?>