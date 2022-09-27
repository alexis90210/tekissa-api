<?php

$query  = "UPDATE TABLE categories SET nom = :nom  WHERE id_categorie = :id_categorie";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'nom' => $data->nom,
        'id_categorie' => $data->id_categorie
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
