<?php

$sql  = "DELETE FROM dispatching WHERE id_dispatching = :id_dispatching";

try {

    $request = $db->prepare($sql);

    $bool = $request->execute([
        'id_dispatching' => $data->id_dispatching
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
