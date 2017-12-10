<?php

session_start();
$thisUser = $_SESSION['u_id'];


    
    include_once 'dbh.inc.php';
    
    $sql = "DELETE from users where user_id=".($_SESSION['u_id']+0).";";
    
    mysqli_query($conn, $sql);
    header("Location: logout.inc.php");
    header("Location: ../index.php");
    exit();
