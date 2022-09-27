<?php

$boutique  = "SELECT * FROM boutique";

$request = $db->query($boutique);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

foreach ($fetch as $key => $value) {
    $fetch[$key]['tags'] = json_decode($fetch[$key]['tags']);
}

$controller->response('success',$fetch);
