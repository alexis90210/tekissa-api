<?php

// REQUIRED FILE

require_once(realpath('./') . '/private/files/lib/compresseur_photo.php');

// CHECKING FILE ERROR

if ((isset($_FILES['asset']['name']) && empty($_FILES['asset']['name'])) || !isset($_FILES['asset'])) {

    $controller->response('error', 'Image est corrompue ou non transmise');
}


// GETTING FILE INFO

$name = $_FILES['asset']['name'];

$tmp_name = $_FILES['asset']['tmp_name'];

$size = $_FILES['asset']['size'];

$type = $_FILES['asset']['type'];

$extension = strtolower(explode('.', $name)[1]);

$allowed_extension = ['png', 'jpg', 'jpeg', 'gif'];


// AUTHORIZED SIZE

if ($size > 15000000) {

    $controller->response('error', "La taille de l'image depasse 15Mo");
}

// AUTHORIZED EXTENSION

if (!in_array($extension, $allowed_extension)) {

    $controller->response('error', "Type d'image non autorisée");
}

// FINAL DESTINATION

$dir = realpath('./') ;

$filename = '/public/client/'.uniqid() . uniqid().  uniqid() . '.' . $extension;

$target =  $dir . $filename;

$bool = move_uploaded_file($tmp_name, $target);

if ($bool && compress_image($target, $target, 70)) {   

    $link = 'http://'. $_SERVER['HTTP_HOST'] . $filename ;

    try {

        $controller->response('success', $link);

    } catch(PDOException $e){

        $controller->response('error', $e->getMessage());
    }

} else {

    $controller->response('error', "Echec telechargement");
}
