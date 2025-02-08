<?php


$sql  = "SELECT * FROM departement ORDER BY id_departement ASC";

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$controller->response('success',$fetch);
