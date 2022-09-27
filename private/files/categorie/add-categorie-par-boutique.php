<?php

$query  = "INSERT INTO categorie_boutique ( id_categorie, id_boutique ) VALUES ( :id_categorie, :id_boutique )";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_categorie' => $data->id_categorie,
        'id_boutique' => $data->id_boutique,
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
