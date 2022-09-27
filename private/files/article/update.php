<?php

$query  = "UPDATE TABLE article SET nom = :nom , prix = :prix WHERE id_article = :id_article";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'nom' => $data->nom,
        'prix' => $data->prix,
        'id_article' => $data->id_article
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
