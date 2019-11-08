<?php
    require_once('../common.php');
    $db = new DBUsers();

    $loginName = $_GET['user'];
    $password = $_GET['password'];
    $privilegeLevel = $db->checkLogin($loginName, $password);
    $_SESSION['privilege'] = $privilegeLevel;
    $_SESSION['userName'] = $loginName;
    if($privilegeLevel != NULL){
        if($_SESSION['privilege'] == "admin"){ //
            session_start();
            echo "success";
        }
        else if($_SESSION['privilege'] == "user"){
            session_start();
            echo "success";
        }
    }
    else{
        echo "failed";
    }
?>