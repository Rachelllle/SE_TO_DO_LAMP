<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User registration system using php and MySQL</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>

    <body>
        <div class="header">
            <h2>Login</h2>
        </div>

        <form method="post" action="login.php">
        <?php include('errors.php');?>
            <div class="input-group">
                <label >Username</label>
                <input type="text" name="username">
            </div>

            <div class="input-group">
                <label >Password</label>
                <input type="password" name="password_1">
            </div>


            <div class="input-group">
                <button type ="submit" name="login" class="btn">Login</button>
            </div>
            <p>
            Don't have an account? <a href="register.php">Register</a>
            </p>
        </form>
    </body>
</html>
