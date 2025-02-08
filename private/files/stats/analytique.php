<?php


$stats = [];

//  GET TOTAL STARs

$sql  = "SELECT COUNT(*) AS totalStar FROM membre WHERE EstStar = 1";

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$totalStar = $fetch['totalStar'] ?? 0;

$stats['totalStar'] = $totalStar;


//  GET TOTAL AGENT

$sql  = "SELECT COUNT(*) AS totalAgent FROM membre WHERE EstAgentIntegration = 1";

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$totalAgent = $fetch['totalAgent'] ?? 0;

$stats['totalAgent'] = $totalAgent;


// GET TOTAL DEPARTEMENT

$sql  = "SELECT COUNT(*) AS totalDepartement FROM departement";

$request = $db->query($sql);

$fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

$totalDepartement = $fetch['totalDepartement'] ?? 0;

$stats['totalDepartement']= $totalDepartement;

// SI UN MEMBRE SE CONNECTE

if (isset($data->id_membre) && !empty($data->id_membre)) {
    
    // TOTAL INVITE

    $sql  = "SELECT COUNT(*) AS totalInvite FROM invites WHERE InvitePar = '".$data->id_membre."'";

    $request = $db->query($sql);

    $fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

    $totalInvite = $fetch['totalInvite'] ?? 0;

    $stats['totalInvite'] = $totalInvite;

    // INVITE A CHARGE

    $sql  = "SELECT COUNT(*) AS totalAcharge FROM dispatching WHERE id_agent_integration = '".$data->id_membre."'";

    $request = $db->query($sql);

    $fetch  = $request->fetchAll(PDO::FETCH_ASSOC);

    $totalAcharge = $fetch['totalAcharge'] ?? 0;

    $stats['totalAcharge'] = $totalAcharge;
}

$controller->response('success',$stats);
