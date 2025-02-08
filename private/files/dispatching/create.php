<?php


$sql = "INSERT INTO dispatching (id_invite, id_agent_integration, commentaire) 
            VALUES (:id_invite, :id_agent_integration, :commentaire)";


try {

    $request = $db->prepare($sql);

    $bool = $request->execute([
        "id_invite" => $data->id_invite, 
        "id_agent_integration" => $data->id_agent_integration, 
        "commentaire" => $data->commentaire
    ]);

    $bool 
    ? $controller->response('success', ['status' => true, 'id_dispatching' => $db->lastInsertId()]) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
