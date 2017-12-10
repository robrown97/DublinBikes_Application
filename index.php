<?php
    include_once 'header.php';
?>
<!---body tag has been opened, place content here.--->

        <div class="signUp">
            <div>
                <br>
				<h2>Welcome to the Dublin Bikes Station Locator</h2>
				<h4>Create an Account below or Sign In.</h4>
                <form class ="signup-form" action="includes/signupForm.inc.php" method="POST">
                    <input type="text" name="first" placeholder="Firstname"/>
                    <input type="text" name="last" placeholder="Lastname"/>
                    <input type="text" name="email" placeholder="E-mail"/>
                    <input type="text" name="uid" placeholder="Username"/>
                    <input type="password" name="pwd" placeholder="Password"/>
                    <button type="submit" name="submit">Sign Up</button>
                </form>

            </div>
        </div>

<?php
    include_once 'footer.php';
?>
<!---body tag will now be closed, place content above.--->
