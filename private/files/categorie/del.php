<?php

$query  = "DELETE FROM categories WHERE id_categorie = :id_categorie";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_categorie' => $data->id_categorie
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
