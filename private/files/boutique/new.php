<?php
// check if has boutique or no 

$test = $db->prepare('SELECT * FROM boutique WHERE id_client = ?');
$test->execute([$data->id_client]);

if($test->rowCount() > 0){
    $controller->response('error', 'Vous avez deja ouvert une boutique avec ce compte');
}

// creation 

$query  =
    "INSERT INTO boutique ( nom, mobile ,  adresse, ville , quartier , description , tags, id_client  ) 
VALUES ( :nom, :mobile ,  :adresse, :ville , :quartier , :description , :tags, :id_client )";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'nom' => $data->nom,
        'mobile' => $data->mobile,
        'adresse' => $data->adresse,
        'ville' => $data->ville,
        'quartier' => $data->quartier,
        'description' => $data->description,
        'tags' => json_encode($data->tags),
        'id_client' => $data->id_client
    ]);

    $bool 
    ? $controller->response('success', ['status' => true, 'id_boutique' => $db->lastInsertId()]) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', explode(':',$e->getMessage())[1]);
}
