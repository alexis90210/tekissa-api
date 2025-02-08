<?php


$sql  = "SELECT * FROM dispatching ORDER BY id_dispatching ASC";

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$controller->response('success',$fetch);
