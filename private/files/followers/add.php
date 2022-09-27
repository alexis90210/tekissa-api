<?php

$query  = "INSERT INTO followers ( id_boutique , id_client ) VALUES ( :id_boutique, :id_client )";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_boutique' => $data->id_boutique,
        'id_client' => $data->id_client,
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
