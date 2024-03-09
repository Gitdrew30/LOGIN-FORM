<?php

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
}

if (!isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="animate.css">

    <div class="header">
        <h2>Home Page</h2>
        <div class="content">

        <?php if (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                <?php echo $_SESSION['success']; 
                unset($_SESSION['success']);
                ?>
                </h3>
            </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['username'])): ?>

                <p>
                    Welcome
                    <strong>
                        <?php echo $_SESSION['username']; ?>
                    </strong>
                </p>
                
                <p>
                <a href="index.php?logout='1'" style="color: red;">
            Click here to Logout
              </a>
            </p>

            <?php endif; ?>
        </div>
    </div>
</head>
<body>
<img src="Bot.png" alt="robot">
<script src="animate.js"></script>
</body>
</html>