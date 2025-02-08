<?php

$sql = "UPDATE invites SET 
                civilite=:civilite, noms=:noms, prenoms=:prenoms, tranche_age=:tranche_age, 
                telephone=:telephone, whatsapp=:whatsapp, adresse=:adresse, longitude=:longitude, 
                latitude=:latitude, situationMatrimoniale=:situationMatrimoniale, 
                CommentAvezVousConnuICCNiamey=:CommentAvezVousConnuICCNiamey, 
                SituationProfessionnelle=:SituationProfessionnelle, SiEtudiantFiliere=:SiEtudiantFiliere, 
                SiEmployéFonction=:SiEmployéFonction, EtesVousDejaMembreDuneEglise=:EtesVousDejaMembreDuneEglise, 
                SouhaitezVousRejoindreICCNiamey=:SouhaitezVousRejoindreICCNiamey, 
                AvezVousDejaAccepteJesusChristDansVotreVie=:AvezVousDejaAccepteJesusChristDansVotreVie, 
                AimerezVousEtreAccompagne=:AimerezVousEtreAccompagne, 
                SouhaitezVousRecevoirLesInfoConcernantLaFamilleICCLaPlusProche=:SouhaitezVousRecevoirLesInfoConcernantLaFamilleICCLaPlusProche,
                AvezVousDesCommentairesOuSuggestionsParticulieresSurLeCulte=:AvezVousDesCommentairesOuSuggestionsParticulieresSurLeCulte
    WHERE id_invite=:id_invite";

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
        "SiEmployéFonction" => $data->SiEmployéFonction, 
        "EtesVousDejaMembreDuneEglise" => $data->EtesVousDejaMembreDuneEglise, 
        "SouhaitezVousRejoindreICCNiamey" => $data->SouhaitezVousRejoindreICCNiamey,         
        "AvezVousDejaAccepteJesusChristDansVotreVie" => $data->AvezVousDejaAccepteJesusChristDansVotreVie, 
        "AimerezVousEtreAccompagne" => $data->AimerezVousEtreAccompagne,         
        "SouhaitezVousRecevoirLesInfoConcernantLaFamilleICCLaPlusProche" => $data->SouhaitezVousRecevoirLesInfoConcernantLaFamilleICCLaPlusProche, 
        "AvezVousDesCommentairesOuSuggestionsParticulieresSurLeCulte" => $data->AvezVousDesCommentairesOuSuggestionsParticulieresSurLeCulte,
        "id_invite" => $data->id_invite
    ]);

    $bool 
    ? $controller->response('success', true) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
