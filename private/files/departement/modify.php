<?php

$sql = "UPDATE departement SET 
                nom=:nom, description=:description
    WHERE id_departement=:id_departement";

try {

    $request = $db->prepare($sql);

    $bool = $request->execute([
        "id_departement" => $data->id_departement, 
        "nom" => $data->nom, 
        "description" => $data->description
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
