<?php

$categorie  = "SELECT *, (SELECT COUNT(*) FROM bestseller as b 
WHERE b.id_bestseller = bestseller.id_bestseller ) AS cote
FROM bestseller
LEFT JOIN article ON article.id_article = bestseller.id_article
ORDER BY cote DESC";

$request = $db->query($categorie);

$controller->response('success',$request->fetchAll(PDO::FETCH_ASSOC));
