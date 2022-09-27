<?php

$boutique  = "SELECT COUNT(*) AS total FROM boutique";

$request = $db->query($boutique);

$client  = "SELECT COUNT(*) AS client FROM client";

$request2 = $db->query($client);

$total = $request->fetch(PDO::FETCH_OBJ);
$client = $request2->fetch(PDO::FETCH_OBJ);

$controller->response('success',[
    'total' => $total->total,
    'client' => $client->client
]);
