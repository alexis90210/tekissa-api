<?php
// QUERY
$query  = "INSERT INTO populaire ( statut , id_element )  VALUES ( :statut , :id_element )";

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_element' => $data->id_element,
        'statut' => $data->statut
    ]);

    $bool 
    ? $controller->response('success',  'Succes') 
    : $controller->response('error', 'Echec');

} catch(PDOException $e){
    $controller->response('error', $e->getMessage());
}


?>