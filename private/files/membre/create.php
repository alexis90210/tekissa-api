<?php


$sql = "INSERT INTO membre (
    identifiant, password, civilite, noms, prenoms, tranche_age, telephone, whatsapp, adresse, 
    longitude, latitude, situationMatrimoniale, SituationProfessionnelle, SiEtudiantFiliere, SiEmployeFonction, EstAgentIntegration, EstStar
) 
VALUES (
    :identifiant, :password, :civilite, :noms, :prenoms, :tranche_age, :telephone, :whatsapp, :adresse, 
    :longitude, :latitude, :situationMatrimoniale, :SituationProfessionnelle, :SiEtudiantFiliere, :SiEmployeFonction, :EstAgentIntegration, :EstStar
)";

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
        "EstStar" => $data->EstStar
    ]);

    $bool 
    ? $controller->response('success', ['status' => true, 'id_membre' => $db->lastInsertId()]) :
    $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
