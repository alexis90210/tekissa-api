<?php

$query  = "DELETE FROM followers WHERE id_followers = :id_followers";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_followers' => $data->id_followers
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
