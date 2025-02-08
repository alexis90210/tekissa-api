<?php

$sql  = "DELETE FROM membre WHERE id_membre = :id_membre";

try {

    $request = $db->prepare($sql);

    $bool = $request->execute([
        'id_membre' => $data->id_membre
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
