<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
</head>
<body>
<?php require 'partials/header.php'  ?>
    <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>

    <form action="signuo.php" method="post" >
        <input type="text" name="email" placeholder="Enter your email" >
        <input type="password" name="password" placeholder="Enter your password" >
        <input type="password" name="confirm-password" placeholder="Confirm your password" >
        <input type="submit" value="Send" >
    </form>
</body>
</html>