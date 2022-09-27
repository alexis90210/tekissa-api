<?php

$query  =
    "INSERT INTO parrainnage (tel_parrain , tel_filleul) 
VALUES (:tel_parrain , :tel_filleul)";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'tel_parrain' => $data->tel_parrain,
        'tel_filleul' => $data->tel_filleul
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', 'Alerte Doublant');
}
