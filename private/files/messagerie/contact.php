<?php

$contact  = 
"SELECT client_fol.id_client AS id_client, 
    client_fol.nom AS nom_client,
    client_fol.prenom AS prenom_client,
    client_fol.image AS image_client,

    client_bout.id_client AS id_client_bout, 
    client_bout.nom AS nom_client_bout,
    client_bout.prenom AS prenom_client_bout,
    client_bout.image AS image_client_bout,

    boutique.id_boutique AS id,
    boutique.nom,
    boutique.image,

( SELECT message FROM messagerie 
 	WHERE ( messagerie.id_envoyeur = followers.id_client 
 	OR messagerie.id_receveur = followers.id_client) ORDER BY messagerie.createdAt DESC
) AS lastMsg,
 

 ( SELECT createdAt FROM messagerie 
 	WHERE ( messagerie.id_envoyeur = followers.id_client 
 	OR messagerie.id_receveur = followers.id_client) ORDER BY messagerie.createdAt DESC
 ) AS createdAt

FROM followers 
    INNER JOIN boutique ON boutique.id_boutique = followers.id_boutique
    INNER JOIN client AS client_fol ON client_fol.id_client = followers.id_client
    INNER JOIN client AS client_bout ON client_bout.id_client = boutique.id_client
WHERE followers.id_client = ?
    AND followers.id_client <> client_bout.id_client 
    AND client_fol.id_client <> client_bout.id_client 
";

if(!isset($data->id_client)){

    $controller->response('error',[]); // 'id client non transmit'

} else if(isset($data->id_client) && empty($data->id_client)){

    $controller->response('error',[]); // 'id client transmit mais vide'

} 

try {

    $request = $db->prepare($contact);

    $bool = $request->execute([$data->id_client]);

    $controller->response('success',$request->fetchAll(PDO::FETCH_ASSOC));

} catch(PDOException $e){

    $controller->response('error',$e->getMessage());
    
}






