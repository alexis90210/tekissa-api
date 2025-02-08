<?php

$sql = "UPDATE dispatching SET 
                id_invite = :id_invite, 
                id_agent_integration = :id_agent_integration, 
                commentaire = :commentaire
            WHERE id_dispatching = :id_dispatching";

try {

    $request = $db->prepare($sql);

    $bool = $request->execute([
        "id_invite" => $data->id_invite, 
        "id_agent_integration" => $data->id_agent_integration, 
        "commentaire" => $data->commentaire,
        "id_dispatching" => $data->id_dispatching
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
