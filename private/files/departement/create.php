<?php


// Préparer la requête SQL
$sql = "INSERT INTO departement (nom, description) VALUES (:nom, :description)";


try {

    $request = $db->prepare($sql);

    $bool = $request->execute([
        "nom" => $data->nom,
        "description" => $data->description
    ]);

    $bool 
    ? $controller->response('success', ['status' => true, 'id_departement' => $db->lastInsertId()]) :
    $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
