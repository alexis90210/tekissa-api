<?php
// QUERY
$query  =
    "INSERT INTO client (login, nom, prenom, 
    password, civilite, mobile , 
    adresse, ville , parrainage, parrain ) 
    VALUES (:login, :nom, :prenom, :password, 
    :civilite, :mobile , :adresse, :ville , 
    :parrainage, :parrain )
";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'login' => $data->login,
        'nom' => $data->nom ,
        'prenom' => $data->prenom ,
        'civilite' => $data->civilite ,
        'password' => $data->password,
        'mobile' => $data->mobile ,
        'adresse' => $data->adresse ??'',
        'ville' => $data->ville ?? '',
        'parrainage' => $data->parrainage ?? 1,
        'parrain' => $data->parrain ?? ''
    ]);

    $bool 
    ? $controller->response('success',  ['status' => true, 'id_client' => $db->lastInsertId()]) 
    : $controller->response('error', [
        'reduce' => 'Echec de l\'enregistrement', 
        'detailed' => ''
    ]);

} catch(PDOException $e){
    $controller->response('error', [
        'reduce' => explode(':', $e->getMessage())[1], 
        'detailed' => explode(':', $e->getMessage())[2]
    ]);
}

?>