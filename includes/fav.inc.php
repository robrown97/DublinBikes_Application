<?php
session_start();

$thisUser = $_SESSION['u_id'];

if (isset($_POST['save'])){
    
    include_once 'dbh.inc.php';
    
    $fav = mysqli_real_escape_string($conn, $_POST['fav']);
    
    $sql = "UPDATE users SET user_fav='$fav' WHERE user_id=".($_SESSION['u_id']+0).";";
    //php can lick my gee
    mysqli_query($conn, $sql);
    header("Location: ../account.php?favourite=success");
    exit();
    
} else {
    
    header("Location: ../account.php");
    exit();
}