<?php

$query  = "DELETE FROM invites WHERE id_invite = :id_invite";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_invite' => $data->id_invite
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
