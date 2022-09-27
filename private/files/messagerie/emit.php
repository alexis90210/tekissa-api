<?php

$query  =
    "INSERT INTO messagerie (id_envoyeur , id_receveur , message ) 
VALUES (:id_envoyeur , :id_receveur , :message )";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_envoyeur' => $data->id_envoyeur,
        'id_receveur' => $data->id_receveur,
        'message' => $data->message
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', 'Alerte Doublant');
}
