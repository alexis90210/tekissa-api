<?php


$sql  = "SELECT * FROM membre WHERE 1 ";

if ( isset($data->identifiant) && !empty($data->identifiant)) {
    $sql .= " AND identifiant = '". $data->identifiant . "'";
}

if ( isset($data->id_membre) && !empty($data->id_membre)) {
    $sql .= " AND id_membre = '". $data->id_membre . "'";
}

if ( isset($data->id_agent_integration) && !empty($data->id_agent_integration)) {
    $sql .= " AND id_agent_integration = ". $data->id_agent_integration;
}

if (isset($data->agent) && !empty($data->agent) && $data->agent == 1 ){
    $sql  .= " AND EstAgentIntegration = 1 ";
}

if (isset($data->star) && !empty($data->star) && $data->star == 1 ){
    $sql  .= " AND EstStar = 1 ";
}

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$controller->response('success',$fetch);
