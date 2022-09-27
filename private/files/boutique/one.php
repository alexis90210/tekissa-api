<?php

if(!isset($data->id_boutique) ){

    $controller->response('error','data missing');
}


$boutique  = "SELECT * , 
(SELECT COUNT(*) FROM populaire AS p WHERE p.id_element = boutique.id_boutique AND p.statut = 1) as pop
FROM boutique WHERE boutique.id_boutique = ? ";

$request = $db->prepare($boutique);

$bool = $request->execute([$data->id_boutique]);

$fetch  = $request->fetch(PDO::FETCH_ASSOC);

$fetch['tags'] = json_decode($fetch['tags']);

$bool
? $controller->response('success',$fetch)
: $controller->response('error','Erreur serveur');

