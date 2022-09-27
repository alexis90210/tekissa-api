<?php

$query  = "INSERT INTO categories ( nom ) VALUES ( :nom )";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'nom' => $data->nom
    ]);

    $bool 
    ? $controller->response('success', ['status' => true, 'id_categorie' => $db->lastInsertId()]) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}

/*
{
    "nom":"Elombe",
    "prenom":"viny",
    "civilite" :"1",
    "mobile":"069500886",
    "adresse":"poudriere",
    "ville" :"Brazzaville",
    "parrainage":"1",
    "parrain":"044038043"
}
*/