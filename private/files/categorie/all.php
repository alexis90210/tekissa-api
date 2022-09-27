<?php

$categorie  = "SELECT *, nom as categorie, id_categorie as id FROM categories";

$request = $db->query($categorie);

$controller->response('success',$request->fetchAll(PDO::FETCH_ASSOC));
