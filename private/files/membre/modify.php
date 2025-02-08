<?php

$sql = "UPDATE membre SET 
    identifiant=:identifiant, 
    password=:password, 
    civilite=:civilite, 
    noms=:noms, 
    prenoms=:prenoms, 
    tranche_age=:tranche_age, 
    telephone=:telephone, 
    whatsapp=:whatsapp, 
    adresse=:adresse, 
    longitude=:longitude, 
    latitude=:latitude, 
    situationMatrimoniale=:situationMatrimoniale, 
    SituationProfessionnelle=:SituationProfessionnelle, 
    SiEtudiantFiliere=:SiEtudiantFiliere, 
    SiEmployeFonction=:SiEmployeFonction,
    EstAgentIntegration=:EstAgentIntegration, 
    EstStar=:EstStar,
    WHERE id_membre=:id_membre";

try {

    $request = $db->prepare($sql);

    $bool = $request->execute([
        "identifiant" => $data->identifiant, 
        "password" => $data->password, 
        "civilite" => $data->civilite, 
        "noms" => $data->noms, 
        "prenoms" => $data->prenoms, 
        "tranche_age" => $data->tranche_age, 
        "telephone" => $data->telephone, 
        "whatsapp" => $data->whatsapp, 
        "adresse" => $data->adresse, 
        "longitude" => $data->longitude, 
        "latitude" => $data->latitude, 
        "situationMatrimoniale" => $data->situationMatrimoniale, 
        "SituationProfessionnelle" => $data->SituationProfessionnelle, 
        "SiEtudiantFiliere" => $data->SiEtudiantFiliere, 
        "SiEmployeFonction" => $data->SiEmployeFonction,
        "EstAgentIntegration" => $data->EstAgentIntegration, 
        "EstStar" => $data->EstStar,
        "id_membre" => $data->id_membre
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
