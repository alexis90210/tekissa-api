<?php

if(!isset($data->login) || !isset($data->password)){

    $controller->response('error','data missing');

}


$client  = "SELECT  
client.id_client,
client.nom,
client.prenom,
client.civilite,
client.mobile,
client.adresse,
client.ville,
client.image,
client.etat,
client.parrainage ,
client.parrain,
client.createdAt,
client.admin,
client.lastSeen,
boutique.id_boutique FROM client
LEFT JOIN boutique ON boutique.id_client = client.id_client
WHERE login = ? AND password = ?";

$request = $db->prepare($client);

$bool = $request->execute([$data->login, $data->password]);

if($bool){
    // LAST SEEN 
    $exec = $db->prepare("UPDATE client SET lastSeen = current_timestamp 
     WHERE login = ?");

    $exec->execute([$data->login]);

    // RENDER REPONSE
    $controller->response('success',$request->fetch(PDO::FETCH_ASSOC)) ;
}
else {
    $controller->response('error','Erreur serveur');
}
