<?php
// QUERY
$query  = "INSERT INTO wishlist ( id_client , id_article )  VALUES ( :id_client , :id_article )";

$check = $db->prepare("SELECT * FROM wishlist WHERE id_client = ? AND id_article = ?");

$check->execute([ $data->id_client, $data->id_article ]);

if( $check->rowCount() > 0 ){
    $controller->response('error', 'Ce produit existe déja dans votre wishlist');
}

die();

try {

    $request = $db->prepare($query);

    $bool = $request->execute([
        'id_article' => $data->id_article,
        'id_client' => $data->id_client
    ]);

    $bool 
    ? $controller->response('success',  'Succes, Article a été Ajouté à votre liste des souhaits') 
    : $controller->response('error', 'Echec, Article n\'a pas été Ajouté à votre liste des souhaits');

} catch(PDOException $e){

    $controller->response('error', $e->getMessage());

}


?>