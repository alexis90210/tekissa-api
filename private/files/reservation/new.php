<?php

$query  =
    "INSERT INTO reservation (id_client , r_code , panier ) 
VALUES (:id_client , :r_code , :panier )";

try {
    $min = 7004435; $max = 957894435;
    $r_code = random_int($min, $max);

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_client' => $data->id_client,
        'r_code' => $r_code,
        'panier' => json_encode($data->panier)
    ]);

    $bool 
    ? $controller->response('success', 'Réservation effectuée, code : '.$r_code) 
    : $controller->response('error', 'Réservation non effectuée');

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
