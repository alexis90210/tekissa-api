<?php


$sql  = "SELECT * FROM departement WHERE id_departement = ". $data->id_departement;

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$controller->response('success',$fetch);
