<?php

$query  = 
"SELECT categories.* FROM categorie_boutique 
INNER JOIN categories ON categories.id_categorie =  categorie_boutique.id_categorie 
INNER JOIN boutique ON boutique.id_boutique=  categorie_boutique.id_boutique 
WHERE boutique.id_boutique = ?";

$request = $db->prepare($query);

isset($data->id_boutique) && !empty($data->id_boutique)
? $request->execute([$data->id_boutique]) 
: $controller->response('error', []);

$controller->response('success', $request->fetchAll(PDO::FETCH_ASSOC));
