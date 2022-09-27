<?php

$boutique  = "SELECT cb.*,
categories.nom AS nom_categorie,
categories.image AS image_categorie,

boutique.nom AS nom_boutique,
boutique.image AS image_boutique,
boutique.ville AS ville_boutique

FROM categorie_boutique AS cb
INNER JOIN categories ON categories.id_categorie = cb.id_categorie
INNER JOIN boutique ON boutique.id_boutique = cb.id_boutique

WHERE cb.id_categorie = ?";


if(!isset($data->id_categorie) || empty($data->id_categorie)){
    $controller->response('error',[]); // no data error 
}

$request = $db->prepare($boutique);

$bool = $request->execute([$data->id_categorie]);

$bool ?
$controller->response('success',$request->fetchAll(PDO::FETCH_ASSOC)):
$controller->response('error',[]);
