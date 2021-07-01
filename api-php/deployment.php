<?php 
    $id_lead = $_POST['valuedepl'];
    echo shell_exec('kubectl apply -f deployments/'.$id_lead.'.yaml');
?>