<?php
    session_start();
    
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Station Locator</title>
        <script src="stations.js"></script> 
        <link rel="stylesheet" href="style/Application.css">
        <link rel="stylesheet" href="style/header.css">
        <link rel="icon" type="image/png"  href="images/dubLogo.png">
    </head>    
    
    <body id="navbar" onload="addressList()">
        <header>
            <nav>
               <!--- <img src="images/logo.jpg" style="max-width:100px; margin-top: -15px; margin-right: 8px;"> --->
                <div class="main-wrapper">
                    <ul>
                        <li id="headLinks">
                            <a href="Application.php">Locator</a>
                            |
                            <?php
                                if (isset($_SESSION['u_id'])) {
                                    
                                    echo '<a href="account.php">My Account</a>';
                                }
                            ?>
                            
                            <?php
                            if (isset($_SESSION['u_id'])) {
                                
                                echo '<form action="includes/logout.inc.php" method="POST">
                                
                            <button id="logOut" type="submit" name="submit">Logout</button>
                        </form>';
                            }else{
                                
                            echo '<form action="includes/login.inc.php" method="POST">
                            <input type="text" name="uid" placeholder="Username/email"/>
                            <input type="password" name="pwd" placeholder="Password"/>
                            <button type="submit" name="submit">Login</button>
                        </form>
                        <a href="signup.php">Sign up</a>';
                        
                        }
                        ?>
                        
                        </li>
                    </ul>
                    
                    
                   
                </div>
            </nav>
        </header>