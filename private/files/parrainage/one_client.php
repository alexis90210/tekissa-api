<?php

if(!isset($data->mobile)){

    $controller->response('error','data missing');

}

$client  = "SELECT * FROM parrainnage WHERE tel_parrain = ?";

$request = $db->prepare($client);

$bool = $request->execute([$data->mobile]);

$bool
? $controller->response('success',$request->fetchAll(PDO::FETCH_ASSOC))
: $controller->response('error',false);

