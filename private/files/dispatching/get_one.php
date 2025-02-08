<?php


$sql  = "SELECT * FROM dispatching WHERE 1 AND id_dispatching = ". $data->id_dispatching;

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$controller->response('success',$fetch);
