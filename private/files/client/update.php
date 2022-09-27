<?php 

$query = 
"UPDATE TABLE client 
    SET nom  = ?, prenom = ?, mobile = ? , ville = ?, adresse = ?
WHERE id_client = ?";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        $data->nom, 
        $data->prenom,  
        $data->mobile, 
        $data->adresse, 
        $data->ville,
        $data->id_client
    ]);

$bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', 'Alerte erreur serveur');
}

