<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration
        System - LAMP Stack
    </title>
   <link rel="stylesheet" type="text/css" href="../CASCADE/style.css">
   <link rel="stylesheet" type="text/css" href="../CASCADE/animate.css">

</head>
<body>
    <img src="../IMG/Bot.png" alt="robot">
<div class="night-sky ">
<!-- Generate stars using JavaScript -->
</div>
<div class="reflex">
    <!--- Generate flex flex star -->
</div>

    <div class="header">
        <h2>LOGIN HERE!<span class="spinner"><-></span></h2> 
        
    </div>

    <form method="post" action="login.php">
        <?php include('errors.php'); ?>

        <div class="input-group">
            <label>Enter Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Enter Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login
            </button>
        </div>
    <p>
        New Here?

        <a href="register.php">Click here to register!
        </a>
    </p>
    </form>

    <div class="printname">
    <footer>
        @MOSCOSO DEV
    </footer>
    </div>
    <script src="../CASCADE/animate.js"></script>
</body>
</html>