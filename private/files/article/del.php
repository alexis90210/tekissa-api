<?php

$query  = "DELETE FROM article WHERE id_article = :id_article";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_article' => $data->id_article
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
