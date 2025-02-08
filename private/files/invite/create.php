<?php


// Préparer la requête SQL
$sql = "INSERT INTO invites (
    civilite, noms, prenoms, tranche_age, telephone, whatsapp, adresse, longitude, latitude, 
    situationMatrimoniale, CommentAvezVousConnuICCNiamey, SituationProfessionnelle, SiEtudiantFiliere, 
    SiEmployeFonction, EtesVousDejaMembreDuneEglise, SouhaitezVousRejoindreICCNiamey, 
    AvezVousDejaAccepteJesusChristDansVotreVie, AimerezVousEtreAccompagne, 
    SouhaitezVousRecevoirLesInfoConcernantLaFamilleICCLaPlusProche, 
    AvezVousDesCommentairesOuSuggestionsParticulieresSurLeCulte, InvitePar) 
    VALUES (:civilite, :noms, :prenoms, :tranche_age, :telephone, :whatsapp, :adresse, :longitude, :latitude, 
    :situationMatrimoniale, :CommentAvezVousConnuICCNiamey, :SituationProfessionnelle, :SiEtudiantFiliere, 
    :SiEmployeFonction, :EtesVousDejaMembreDuneEglise, :SouhaitezVousRejoindreICCNiamey, 
    :AvezVousDejaAccepteJesusChristDansVotreVie, :AimerezVousEtreAccompagne, 
    :SouhaitezVousRecevoirLesInfoConcernantLaFamilleICCLaPlusProche, 
    :AvezVousDesCommentairesOuSuggestionsParticulieresSurLeCulte, :InvitePar)";


try {

    $request = $db->prepare($sql);

    $bool = $request->execute([
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
        "CommentAvezVousConnuICCNiamey" => $data->CommentAvezVousConnuICCNiamey, 
        "SituationProfessionnelle" => $data->SituationProfessionnelle, 
        "SiEtudiantFiliere" => $data->SiEtudiantFiliere, 
        "SiEmployeFonction" => $data->SiEmployeFonction, 
        "EtesVousDejaMembreDuneEglise" => $data->EtesVousDejaMembreDuneEglise, 
        "SouhaitezVousRejoindreICCNiamey" => $data->SouhaitezVousRejoindreICCNiamey,         
        "AvezVousDejaAccepteJesusChristDansVotreVie" => $data->AvezVousDejaAccepteJesusChristDansVotreVie, 
        "AimerezVousEtreAccompagne" => $data->AimerezVousEtreAccompagne,         
        "SouhaitezVousRecevoirLesInfoConcernantLaFamilleICCLaPlusProche" => $data->SouhaitezVousRecevoirLesInfoConcernantLaFamilleICCLaPlusProche, 
        "AvezVousDesCommentairesOuSuggestionsParticulieresSurLeCulte" => $data->AvezVousDesCommentairesOuSuggestionsParticulieresSurLeCulte,
        "InvitePar" => $data->InvitePar
    ]);

    $bool 
    ? $controller->response('success', ['status' => true, 'id_invite' => $db->lastInsertId()]) :
    $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
