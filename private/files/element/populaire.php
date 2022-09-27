<?php

if (isset($data->boutique)) {
    $populaire  = "SELECT *, (SELECT COUNT(*) FROM populaire AS p WHERE p.id_element = boutique.id_boutique) as cote FROM populaire
    INNER JOIN boutique ON boutique.id_boutique = populaire.id_element
    WHERE populaire.id_element = 1
    ORDER BY cote DESC";
} else if (isset($data->article)) {
    $populaire  = "SELECT *, (SELECT COUNT(*) FROM populaire AS p WHERE p.id_element = article.id_article) as cote FROM populaire
    INNER JOIN article ON article.id_article = populaire.id_element
    WHERE populaire.id_element = 2
    ORDER BY  cote DESC";
}
$request = $db->query($populaire);

$controller->response('success', $request->fetchAll(PDO::FETCH_ASSOC));
