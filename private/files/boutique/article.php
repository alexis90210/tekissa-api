<?php

$article  = "SELECT article.* , boutique.nom AS boutique  , categories.nom AS categorie FROM article
INNER JOIN boutique ON boutique.id_boutique = article.id_boutique
INNER JOIN categories ON categories.id_categorie = article.id_categorie
WHERE article.id_boutique = :id_boutique ";


if (isset($data->id_categorie) && !empty($data->id_categorie)) {
    $article .= " AND  article.id_categorie = :id_categorie ";
}

$article .= " ORDER BY article.createdAt DESC";


try {

    if (isset($data->id_categorie) && !empty($data->id_categorie)) {
        $request = $db->prepare($article);
        $bool = $request->execute([
            'id_boutique' => $data->id_boutique,
            'id_categorie' => $data->id_categorie
        ]);
    } else {
        $request = $db->prepare($article);
        $bool = $request->execute([
            'id_boutique' => $data->id_boutique
        ]);
    }

    $bool
        ? $controller->response('success', $request->fetchAll(PDO::FETCH_ASSOC))
        : $controller->response('error', 'Echec de la requete');
} catch (PDOException $e) {

    $controller->response('error', $e->getMessage());
}
