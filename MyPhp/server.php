<?php

session_start();

$username = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";

$db = mysqli_connect('localhost','root','','registration');

if (isset($_POST['reg_users'])) { // reg users or users //
    $username = mysqli_real_escape_string($db, $_POST['username'] );
    $email = mysqli_real_escape_string($db, $_POST['email'] );
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1'] );
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2'] );

    if (empty($username)) { array_push($errors,"Username is required"); }
    if (empty($email)) { array_push($errors,"Email is required"); }
    if (empty($password_1)) { array_push($errors,"Password is required"); }
    
    if($password_1 != $password_2) { 
        array_push($errors,"the two passwords do not match");
    }

    if (count($errors) == 0) {
        $password = md5($password_1);
        $query = "INSERT INTO users (username, email, password)
        VALUES('$username', '$email', '$password')";

        mysqli_query($db, $query);

        $_SESSION["username"] = $username;
        $_SESSION["success"] = "You have logged in";
        header('location: index.php');
    }
}

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string( $db, $_POST['username'] );
    $password = mysqli_real_escape_string( $db, $_POST['password'] );
    if (empty($username)) { array_push($errors,"Username is required");
    }
    if (empty($password)) { array_push($errors,"Password is required");
    }
    if(count($errors) == 0) {

        $password = md5($password_1);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if(mysqli_num_rows($results) == 1) {
            $_SESSION["username"] = $username;
            $_SESSION["success"] = "You have logged in!";
            header("location: index.php");
        } else {
            array_push($errors,"Username or password incorrect");
        }
    }
}
?>