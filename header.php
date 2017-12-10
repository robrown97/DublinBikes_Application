<?php
    session_start();
    
    $_SESSION['u_fav'] =$row['user_fav'];
?>    

<!DOCTYPE html>
<html>
    <head>
        <title>Dublin Bikes</title>
        <script src="stations.js"></script>
        <link rel="stylesheet" href="style/header.css" type="text/css"/>
        <link rel="stylesheet" href="style/signup.css" type="text/css"/>
        <link rel="stylesheet" href="style/noAcc.css" type="text/css"/>
        <link rel="icon" type="image/png"  href="images/dubLogo.png">
    </head>    
    <body id="navbar">
        <header>
            <nav>
                <div id="noAccountNav">
                    <?php
                            if (isset($_SESSION['u_id'])) {
                                
                                echo '<form action="includes/logout.inc.php" method="POST">
                                
                            <button id="log" type="submit" name="submit">Logout</button>
                        </form>';
                            }else{
                                
                            echo '<form id="logInForm"action="includes/login.inc.php" method="POST">
                        <input class="logIn" type="text" name="uid" placeholder="Username..."/>
                        <input class="logIn"  type="password" name="pwd" placeholder="Password..."/>
                        <button id="logInBtn" type="submit" name="submit">Login</button>
                    </form>';
                        
                        }
                        ?>
                </div>
            </nav>
        </header>