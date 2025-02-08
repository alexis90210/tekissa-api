<?php


$sql  = "SELECT * FROM invites ORDER BY id_invite ASC";

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$controller->response('success',$fetch);
