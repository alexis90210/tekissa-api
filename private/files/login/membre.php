<?php

$sql  = "SELECT * FROM membre WHERE identifiant='".$data->identifiant."' AND password='".$data->password."'";

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

if ( count($fetch) == 0) {
    $controller->response('error',[]);
} else {
    $controller->response('success',$fetch);
}


