<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    session_unset(); 
    print("Log out successful! Redirecting in 3 seconds...");
    sleep(3);
    header('Location: http://lambley.myweb.cs.uwindsor.ca/NAAC/HomePage.php');
?>
