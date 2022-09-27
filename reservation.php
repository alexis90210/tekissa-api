<?php

$client  = "SELECT * FROM reservation WHERE id_client = ?";

$request = $db->prepare($client);

$bool = $request->execute([$data->id_client]);

$res = $request->fetchAll(PDO::FETCH_ASSOC);

foreach ($res as $key => $value) {
    $res[$key]['panier'] = json_decode($res[$key]['panier']) ;
}

$prix = 0;

$controller->response('success', $res);

foreach ($res as $key => $value) {
    $prix += intval($res[$key]['panier']['prix']) ;
}



if($bool){
    
 $controller->response('success', $prix);
} else {
 $controller->response('error', 'Erreur serveur');
}
