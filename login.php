<?php
    
?>

<!DOCTYPE html>
<html>
<head>
<title>Welcome to Videoline</title>
<link rel="stylesheet" type="text/css" href="assets/style/style.css"/>
</head>
<body>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="assets/image/logo.png" title="Logo" alt="Site logo">
                <h3>Sign In</h3>
                <span>to continue to Videoline</span>
            </div>
            <form method="POST">
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="submit" name="submitButton" value="SUBMIT" />
            </form>

            <a href="register.php" class="signInMessage">Need an account? Sign up here!</a>
        </div>
    </div>
</body>
</html>