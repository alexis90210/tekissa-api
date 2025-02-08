<?php

/**
 * @auteur Alexis Ngoyi
 * @email alexisng90210@gmail.com
 * @whatsapp +240 222 862 009
 */

// ROUTE LOGIN

$router->map('POST', '/api/v1/login/superviseur', 'private/files/login/superviseur.php');
$router->map('POST', '/api/v1/login/star', 'private/files/login/star.php');
$router->map('POST', '/api/v1/login/membre', 'private/files/login/membre.php');

// ROUTE INVITE

$router->map('POST', '/api/v1/invite/create', 'private/files/invite/create.php');
$router->map('POST', '/api/v1/invite/delete', 'private/files/invite/delete.php');
$router->map('POST', '/api/v1/invite/modify', 'private/files/invite/modify.php');
$router->map('POST', '/api/v1/invite/all', 'private/files/invite/get_all.php');
$router->map('POST', '/api/v1/invite/one', 'private/files/invite/get_one.php');

// ROUTE AGENT INTEGRATION

$router->map('POST', '/api/v1/membre/create', 'private/files/membre/create.php');
$router->map('POST', '/api/v1/membre/delete', 'private/files/membre/delete.php');
$router->map('POST', '/api/v1/membre/modify', 'private/files/membre/modify.php');
$router->map('POST', '/api/v1/membre/all', 'private/files/membre/get_all.php');
$router->map('POST', '/api/v1/membre/one', 'private/files/membre/get_one.php');

// ROUTE DISPATCHING

$router->map('POST', '/api/v1/dispatching/create', 'private/files/dispatching/create.php');
$router->map('POST', '/api/v1/dispatching/delete', 'private/files/dispatching/delete.php');
$router->map('POST', '/api/v1/dispatching/modify', 'private/files/dispatching/modify.php');
$router->map('POST', '/api/v1/dispatching/all', 'private/files/dispatching/get_all.php');
$router->map('POST', '/api/v1/dispatching/one', 'private/files/dispatching/get_one.php');


// ROUTE STATISTIQUE

$router->map('POST', '/api/v1/stats', 'private/files/stats/analytique.php');
