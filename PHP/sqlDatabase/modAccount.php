<?php
    require_once('../common.php');
    $db = new DBUsers();
    $userEmail = $_GET['user'];

    if($db->lookup($userEmail) != false){
        $db->modify($userEmail);
        echo "success";
    }
    else{
        echo "failure";
    }

?>