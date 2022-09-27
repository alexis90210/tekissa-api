<?php

if (!isset($data->id)) {

    $controller->response('error', 'proprietaire missing');
}


$client  = "SELECT nom AS titre, id_boutique AS id FROM boutique WHERE id_client = ?";

$request = $db->prepare($client);

$bool = $request->execute([$data->id]);

$bool
    ? $controller->response('success', $request->fetch(PDO::FETCH_ASSOC))
    : $controller->response('error', false);
