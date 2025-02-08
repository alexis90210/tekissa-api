<?php


$sql  = "SELECT * FROM invites WHERE id_invite = ". $data->id_invite;

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$controller->response('success',$fetch);
