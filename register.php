<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>User registration system using php and MySQL</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="header">
            <h2>Register</h2>
        </div>

        <form method="post" action="register.php">
            <!-- display validation errors here -->
            <?php include('errors.php');?>
            <div class="input-group">
                <label >Username</label>
                <input type="text" name="username" >
            </div>
            <div class="input-group">
                <label >Email</label>
                <input type="text" name="email">
            </div>
            <div class="input-group">
                <label >Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label >Confirm Password</label>
                <input type="password" name="password_2">
            </div>

            <div class="input-group">
                <button type ="submit" name="register" class="btn">Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">Log in</a>
            </p>
        </form>
    </body>
</html>
