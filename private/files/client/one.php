<?php

if(!isset($data->mobile) || !isset($data->password)){

    $controller->response('error','Login data missing');

}


$client  = "SELECT * FROM client WHERE mobile = ? AND password = ?";

$request = $db->prepare($client);

$bool = $request->execute([$data->mobile, $data->password]);

$bool
? $controller->response('success',$request->fetch(PDO::FETCH_ASSOC))
: $controller->response('error','Erreur serveur');

