<?php 
use GuzzleHttp\Client;

$ip = $_SERVER['REMOTE_ADDR'];

$client = new Client([
    'base_uri' => 'https://ipinfo.io/'.$ip.'?token=606e19867cf87d'
]);

$response = $client->request('GET', '', []);

$body = $response->getBody();

$location = json_decode($body);

echo json_encode([
    'code' => 'success', 
    'message' => $location
]);