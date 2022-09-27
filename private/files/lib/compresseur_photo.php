<?php

function compress_image($source, $final, $quality) {

    $info = getimagesize($source);

    // JPEG
    
    if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/jpg')
        $image = imagecreatefromjpeg($source);

    // GIF
    
    elseif ($info['mime'] == 'image/gif')
        $image = imagecreatefromgif($source);

    // PNG
    
    elseif ($info['mime'] == 'image/png')
        $image = imagecreatefrompng($source);

    // RENVOIE L'IMAGE COMPRESSEE

    imagejpeg($image, $final, $quality);

    return $final;

}