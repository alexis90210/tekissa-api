<?php

class DB {

  public static function connection( $controller ){

    $host = "localhost";
    $dbname = "egliseiccniamey"; 
    $user = "root"; 
    $pass = "blackhunter"; 

    // $host = "91.234.194.113";
    // $dbname = "c2518935c_egliseiccniamey";
    // $user = "c2518935c_egliseiccniamey_user";
    // $pass = "CaX-3!=c@FvS";

    try {
      $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, array(
        PDO::ATTR_PERSISTENT => false
      ));

      return $db;

    } catch (PDOException $e) {

        $controller->response('error',$e->getMessage());

    }
  }
}

?>
