<?php

$sql = "SELECT * FROM membre WHERE 1";

if (isset($data->agent) && !empty($data->agent) ){
    $sql .= " AND EstAgentIntegration = 1 ORDER BY noms ASC";
}

if (isset($data->star) && !empty($data->star) ){
    $sql  .= " AND EstStar = 1 ORDER BY noms ASC";
}

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$controller->response('success',$fetch);
