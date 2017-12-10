<?php
    include_once 'header.php';
?>
        <div class="signUp">
            <div>
				<h3>Welcome to the Dublin Bikes Station Locator</h3>
				<h5>Create an account below or Sign In.</h5>
                <form class ="signup-form" action="includes/signupForm.inc.php" method="POST">
                    <input type="text" name="first" placeholder="Firstname"/>
                    <input type="text" name="last" placeholder="Lastname"/>
                    <input type="text" name="email" placeholder="E-mail"/>
                    <input type="text" name="uid" placeholder="Username"/>
                    <input type="password" name="pwd" placeholder="Password"/>
                    <button type="submit" name="submit">Sign up</button>
                </form>

            </div>
        </div>

<?php
    include_once 'footer.php';
?>