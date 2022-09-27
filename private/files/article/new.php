<?php

$query  = "INSERT INTO article ( nom , id_boutique, categorie, prix, couleurs, quantite, etat, 
est_promotion, description, date_promotion , images ) 
VALUES ( :nom , :id_boutique, :categorie, :prix, :couleurs, :quantite, :etat, 
:est_promotion, :description, :date , :images)";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'nom' => $data->nom,
        'id_boutique' => $data->id_boutique,
        'categorie' => json_encode($data->categorie),
        'prix' => $data->prix,
        'couleurs' => json_encode($data->couleurs),
        'quantite' => $data->quantite,
        'etat' => $data->etat,
        'est_promotion' => $data->promotion,
        'description' => $data->description,
        'date' => $data->date,
        'images' => json_encode($data->images)
    ]);

    $bool 
    ? $controller->response('success', ['status' => true, 'id_article' => $db->lastInsertId()]) 
    : $controller->response('error', false);

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}
