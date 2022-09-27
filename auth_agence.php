<?php

try {
$query = "SELECT * FROM agence_voyage WHERE login = ? AND pasword = ?";

$request = $db->prepare($query);

$bool = $request->execute([$data->id, $data->pwd]);

if($bool){
	if($request->fetch(PDO::FETCH_ASSOC)){
		
		$payload = [
		'code' => 'success',
		'message' => $request->fetch(PDO::FETCH_ASSOC)
	];

	echo json_encode($payload);
	} else {
		$payload = [
		'code' => 'error',
		'message' => 'Ce compte n\'existe pas'
	];

	echo json_encode($payload);
	}
} else {
	$payload = [
		'code' => 'error',
		'message' => 'Veuillez verifier votre identifiant ou password'
	];

	echo json_encode($payload);
}

} catch(PDOException $e){
$payload = [
		'code' => 'error',
		'message' => $e->getMessage()
	];

	echo json_encode($payload);
}
