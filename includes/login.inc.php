<?php

session_start();

if (isset($_POST['submit'])) {
    
    include_once 'dbh.inc.php';
    
    $uid = mysqli_real_escape_string($conn, $_POST{'uid'});
    $pwd = mysqli_real_escape_string($conn, $_POST{'pwd'});
    
    
    //Handlers of errors
    //
    if (empty($uid) || empty($pwd)) {
        
        header("Location: ../index.php?login=empty");
        exit();
        
    }else{
        
        $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'"; //email wont work dont even try bud
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1){
            
            header("Location: ../index.php?login=error");
            exit();
            
        } else{
            
            if ($row = mysqli_fetch_assoc($result)) {
                
                //de-hash the password
                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']); //a typo in this line held me up for 4 hours. I hate line 35
                
                if ($hashedPwdCheck == false) {
                
                    header("Location: ../index.php?login=error");
                    exit();
                    
                }elseif ($hashedPwdCheck == true){
                    //login that sucka
                    $_SESSION['u_id'] =$row['user_id'];
                    $_SESSION['u_first'] =$row['user_first'];
                    $_SESSION['u_last'] =$row['user_last'];
                    $_SESSION['u_email'] =$row['user_email'];
                    $_SESSION['u_uid'] =$row['user_uid'];
                    $_SESSION['u_fav'] =$row['user_fav'];
                    header("Location: ../Application.php?login=success");
                    exit();
                    
                }
                
            }
        }
    }
}else{
    header("Location: index.php?login=error");
    exit();
}