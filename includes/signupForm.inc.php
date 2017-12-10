<?php
//  https://youtu.be/xb8aad4MRx8 : most (99%+) of the code pulled from here 
if (isset($_POST['submit'])) {
    
    include_once 'dbh.inc.php';
    
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    
    //error handlers
    //check for empty fields
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
        header("Location: ../signup.php?signup=empty");
    exit();
    } else {
        
        //check if input carachters are valid and not some mad shite
        
        if (!preg_match("/^[a-zA-z]*$/", $first) || !preg_match("/^[a-zA-z]*$/", $last)){
            header("Location: ../signup.php?signup=invalidCarachters");
            exit();
        } else {
            
            ///checking if the email address is valid
            
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../signup.php?signup=emailNotValid");
                exit();
        } else {
                
                //making sure th chosen username is not already taken
                $sql ="SELECT * FROM users WHERE user_uid='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                
                if ($resultCheck > 0) {
                   header("Location: ../signup.php?signup=userTaken");
                   exit();
        } else {
                //Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
					mysqli_query($conn, $sql);
                header("Location: ../signup.php?signup=success");
                exit();
               }
            }
        }
    }
    
} else {
    header("Location: ../signup.php");
    exit();
}