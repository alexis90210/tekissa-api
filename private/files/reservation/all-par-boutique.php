<?php

$query  = "SELECT *, r_code as code, createdAt as date FROM reservation WHERE id_boutique = ?";

$request = $db->prepare($query);
$request->execute([$data->id_boutique]);

$controller->response('success',$request->fetchAll(PDO::FETCH_ASSOC));
