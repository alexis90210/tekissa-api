<?php

$query  = "DELETE FROM departement WHERE id_departement = :id_departement";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_departement' => $data->id_departement
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
