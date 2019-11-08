<?php
    require_once('../common.php');
    $db = new DBUsers();
    $firstName = $_GET['first'];
    $lastName = $_GET['last'];
    $email = $_GET['email'];
    $password = $_GET['pass'];

    if($firstName !="" && $lastName !="" && $email !="" && $password !=""){ //all fields are proper
        if($db->lookup($userEmail) == false){ 
            $db->insert($email, $firstName, $lastName, password_hash($password,PASSWORD_DEFAULT), "user");
            echo "success";
        }
        else{
            echo "failed";
        }
    }
    else{
        echo 'invalidInfo';
	}
?>
