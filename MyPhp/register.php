<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PHP and MySQL
    </title>
    <link rel="stylesheet" type="text/css" href="../CASCADE/style.css">
    <link rel="stylesheet" type="text/css" href="../CASCADE/animate.css">

</head>
<body>
<img src="../IMG/Bot.png" alt="robot">
<div class="night-sky ">
<!-- Generate stars using JavaScript -->
</div>
    <div class="header2">
    <h3>REGISTER<span class="spinner"><-></span></h3> 
    </div>
    <form method="post" action="register.php">
        <?php include('errors.php'); ?>

        <div class="input-group">
            <label>Enter Username</label>
            <input type="text" name="username"
            value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="text" name="username"
            value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>Enter Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="reg_user">Register
            </button>
        </div>
        <p>
            Already having an account?
            <a href="login.php">
                Login Here!
            </a>
        </p>
    <script src="../CASCADE/animate.js"></script>

</body>
</html>