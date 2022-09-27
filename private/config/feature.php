<?php

class controller {

  /*
  * AUTORISE LES ENTETES
  */

  public function header(){

    header('Content-Type: application/json; charset=utf-8');
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");

  }

  /*
  * RETOURNE LA REPONSE EN JSON
  */
  public function response($status, $message, $code = 200){

    http_response_code($code);
		echo json_encode(['code' => $status, 'message' => $message ]);
    die();
  }

  /*
  * RECUPERE LES DONNEES EXTERNES
  */

  public function jsonData(){

    $data = file_get_contents('php://input');

  	return json_decode($data);
  }

  /*
  * GERME LA CONNEXION A LA BD
  */

  public function closeDB(){

    $db = null;
  }

}

?>
