<?php

$query  = "INSERT INTO preference_article ( id_article, id_client ) 
VALUES (  :id_article, :id_client)";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_article' => $data->id_article,
        'id_client' => $data->id_client
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
