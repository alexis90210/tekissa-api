<?php

// ROUTE

$router->map('POST', '/api/v1/client/ip', 'private/files/client/ip.php');


//  ROUTE CATEGORIE

$router->map('POST', '/api/v1/categorie/add', 'private/files/categorie/add.php');

$router->map('POST', '/api/v1/categorie/edit', 'private/files/categorie/edit.php');

$router->map('POST', '/api/v1/categorie/del', 'private/files/categorie/del.php');

$router->map('POST', '/api/v1/categorie/all', 'private/files/categorie/all.php');

$router->map('POST', '/api/v1/categorie/par-boutique', 'private/files/categorie/all-par-boutique.php');

$router->map('POST', '/api/v1/categorie/par-boutique/add', 'private/files/categorie/add-categorie-par-boutique.php');

//  ROUTE AUTH

$router->map('POST', '/api/v1/client/auth', 'private/files/auth/auth.php');


//  ROUTE CLIENT  

$router->map('POST', '/api/v1/client/wishlist', 'private/files/client/wishlist.php');

$router->map('POST', '/api/v1/client/new', 'private/files/client/new.php');

$router->map('POST', '/api/v1/client/update', 'private/files/client/update.php');

$router->map('POST', '/api/v1/client/one', 'private/files/client/one.php');

$router->map('POST', '/api/v1/client/reservation/one', 'private/files/client/reservation.php');

$router->map('POST', '/api/v1/client/contact/all', 'private/files/messagerie/contact.php');



//  ROUTE BOUTIQUE

$router->map('POST', '/api/v1/boutique/one', 'private/files/boutique/one.php');

$router->map('POST', '/api/v1/boutique/new', 'private/files/boutique/new.php');

$router->map('POST', '/api/v1/all/vendeur', 'private/files/boutique/all_vendeur.php');

$router->map('POST', '/api/v1/boutique/all', 'private/files/boutique/all.php');

$router->map('POST', '/api/v1/boutique/update', 'private/files/boutique/update.php');

$router->map('POST', '/api/v1/boutique/article/all', 'private/files/boutique/article.php');

$router->map('POST', '/api/v1/boutique/client', 'private/files/boutique/client.php');

$router->map('POST', '/api/v1/boutique/reservation', 'private/files/boutique/reservation.php'); 

$router->map('POST', '/api/v1/boutique/by-categorie', 'private/files/boutique/where_categorie_id.php'); 


//  ROUTE ARTICLE

$router->map('POST', '/api/v1/article/new', 'private/files/article/new.php');

$router->map('POST', '/api/v1/article/del', 'private/files/article/del.php');

$router->map('POST', '/api/v1/article/update', 'private/files/article/update.php');

$router->map('POST', '/api/v1/article/like', 'private/files/article/like.php');

$router->map('POST', '/api/v1/article/all', 'private/files/article/all.php');

$router->map('POST', '/api/v1/add/populaire', 'private/files/article/populaire.php');


//  ROUTE FOLLOWERS

$router->map('POST', '/api/v1/followers/new', 'private/files/followers/add.php');

$router->map('POST', '/api/v1/followers/cancel', 'private/files/followers/cancel.php');



//  ROUTE MESSAGERIE

$router->map('POST', '/api/v1/messagerie/emit', 'private/files/messagerie/emit.php');



//  ROUTE PARRAINAGE

$router->map('POST', '/api/v1/parrainage/new', 'private/files/parrainage/new.php');

$router->map('POST', '/api/v1/parrainage/one/client', 'private/files/parrainage/one_client.php');



//  ROUTE RESERVATION

$router->map('POST', '/api/v1/reservation/new', 'private/files/reservation/new.php');

$router->map('POST', '/api/v1/reservation/all-par-boutique', 'private/files/reservation/all-par-boutique.php');



// ROUTE PHOTO / IMAGE

$router->map('POST', '/api/v1/photo/client', 'private/files/photo/client.php');

$router->map('POST', '/api/v1/photo/article', 'private/files/photo/article.php');

$router->map('POST', '/api/v1/photo/article/truncated', 'private/files/photo/article_truncated.php');

$router->map('POST', '/api/v1/photo/boutique', 'private/files/photo/boutique.php');

$router->map('POST', '/api/v1/photo/categorie', 'private/files/photo/categorie.php');



// ROUTE BEST / POPULAIRE

$router->map('POST', '/api/v1/produit/bestseller', 'private/files/produit/bestseller.php');

$router->map('POST', '/api/v1/element/populaire', 'private/files/element/populaire.php');





