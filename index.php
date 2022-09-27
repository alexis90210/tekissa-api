<?php
// HEADER 

// Allow from any origin
if(isset($_SERVER["HTTP_ORIGIN"]))
{
    // You can decide if the origin in $_SERVER['HTTP_ORIGIN'] is something you want to allow, or as we do here, just allow all
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
}
else
{
    //No HTTP_ORIGIN set, so we allow any. You can disallow if needed here
    header("Access-Control-Allow-Origin: *");
}

header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 600");    // cache for 10 minutes

if($_SERVER["REQUEST_METHOD"] == "OPTIONS")
{
    if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_METHOD"]))
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS, DELETE, PUT"); //Make sure you remove those you do not want to support

    if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_HEADERS"]))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    //Just exit with 200 OK with the above headers for OPTIONS method
    exit(0);
}

// ERROR

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);

// HANDLE AUTOLOAD

require('vendor/autoload.php');

// PARAMETERS


define('BASE','/api/v1');
define('TARGET','private/files/');


// HANDLE ROUTE REQUESTS

$router = new AltoRouter();

require("private/config/routes.php");

// HANDLE CONTROLLER

require("private/config/feature.php");

$controller = new controller();
// $controller->header();
$data = $controller->jsonData();

// HANDLE USERS

$who = [
	'IP' => $_SERVER['REMOTE_ADDR'],
	'BROWSER' => $_SERVER['HTTP_USER_AGENT']
];

// HANDLE DB CONNECTION

require("private/config/db.php");

$connection = new DB();
$db = $connection->connection ( $controller ) ;

// MATCH ROUTES

$match = $router->match();


if( $match ) {

	require( $match['target'] );

} else {

	// WRONG ROUTE
	header("Location: http://".$_SERVER['SERVER_NAME'].":".$_SERVER['SERVER_PORT']."/home.php");
	exit;
}

?>
