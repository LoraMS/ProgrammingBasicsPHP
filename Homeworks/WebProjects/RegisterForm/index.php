<?php
$password = null;
$confirmPassword = null;

if (isset($_GET['password'])) {
    $password = $_GET['password'];
}

if (isset($_GET['confirmPassword'])) {
    $confirmPassword = $_GET['confirmPassword'];
}
if ($password !== '' && $confirmPassword !== '' && $password === $confirmPassword) {
    $registerMessage = "<div class=\"green\">Register successful!</div>";
} elseif ($password !== $confirmPassword) {
    $registerMessage = "<div class=\"red\">Password do not match!</div>";
}

echo $registerMessage;
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register Form</title>
    </head>
    <style>
        span{
            display: block;
        }
        .green{
            background-color: green;
        }
        .red{
            background-color: red;
        }
    </style>
    <body>
        <form>
            <div>
                <span>Age: </span>
                <input required="true" name="age" type="number" value="" />
            </div>
            <div>
                <span>Gender: </span>
                <input required="true" name="gender" type="text" value="" />
            </div>
            <div>
                <span>Name: </span>
                <input required="true" name="name" type="text" value="" />
            </div>
            <div>
                <span>Password: </span>
                <input required="true" name="password" type="password" value="" />
            </div>
            <div>
                <span>Confirm Password: </span>
                <input required="true" name="confirmPassword" type="password" value="" />
            </div>
            <div>
                <input type="submit" name="submit" value="Submit" />
            </div>
        </form>
    </body>
</html>
