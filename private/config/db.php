<?php

class DB {

  public static function connection( $controller ){

    // $host = "185.98.131.91";
    // $dbname = "tekis1873244";
    // $user = "tekis1873244";
    // $pass = "ndj8e77ghs";

    $host = "localhost";
    $dbname = "mboka";
    $user = "root";
    $pass = "Black1234@";

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
