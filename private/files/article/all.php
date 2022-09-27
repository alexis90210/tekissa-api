<?php

if(isset($data->populaire)){
    $article  = "SELECT article.* , 
(SELECT COUNT(*) FROM populaire AS p WHERE p.id_element = article.id_article AND p.statut = 2) as pop,
boutique.nom AS boutique,
boutique.id_boutique AS idBoutique FROM article
INNER JOIN boutique ON boutique.id_boutique = article.id_boutique
ORDER BY pop DESC";

} 
else if(isset($data->bestseller)){
    $article  = "SELECT article.* , 
    (SELECT COUNT(*) FROM populaire AS p WHERE p.id_element = article.id_article  AND p.statut = 2) as pop, 
    (SELECT COUNT(*) FROM bestseller as b WHERE b.id_article = article.id_article ) AS best,
    boutique.nom AS boutique,boutique.id_boutique AS idBoutique FROM article
    INNER JOIN boutique ON boutique.id_boutique = article.id_boutique
    ORDER BY best DESC";

}else if(isset($data->promotion)){
    $article  = "SELECT article.* , 
    (SELECT COUNT(*) FROM populaire AS p WHERE p.id_element = article.id_article AND p.statut = 2) as pop,
    boutique.nom AS boutique,boutique.id_boutique AS idBoutique
    FROM article
    INNER JOIN boutique ON boutique.id_boutique = article.id_boutique
    WHERE article.est_promotion = 'Oui'
    ORDER BY article.createdAt DESC";

}  else {
    $article  = "SELECT article.* , 
    (SELECT COUNT(*) FROM populaire AS p WHERE p.id_element = article.id_article  AND p.statut = 2) as pop,
    boutique.nom AS boutique,boutique.id_boutique AS idBoutique
    FROM article
    INNER JOIN boutique ON boutique.id_boutique = article.id_boutique
    ORDER BY article.createdAt DESC";

} 
 
$request = $db->query($article);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

foreach ($fetch as $key => $value) {
    $fetch[$key]['images'] = json_decode($fetch[$key]['images']);
    $fetch[$key]['categorie'] = json_decode($fetch[$key]['categorie']);
    $fetch[$key]['couleurs'] = json_decode($fetch[$key]['couleurs']);
}
$controller->response('success',$fetch);
