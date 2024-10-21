<?php
session_start();
if(isset($_SESSION["open"])){
    header("Location: quizhome.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST["login"])){
            $email=$_POST["email"];
            $password=$_POST["password"];

            require_once "mainconnect.php";

            $sql="SELECT * FROM register WHERE email='$email'";

            $result=mysqli_query($cont, $sql);
            $open=mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($open){
                if(password_verify($password, $open["password"])){
                    session_start();
                    $_SESSION["open"]="yes";
                    header("Location:quizhome.php"); 
                    die(); 
                }else{
                    echo"<div class='alert alert-warning'>Password is wrong!!!</div>";
                }
            }else{
                echo"<div class='alert alert-warning'>Email is not registered.Kindly Register First!!!</div>";

            }
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <i class="bi bi-envelope"></i>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <i class="bi bi-lock"></i>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="form-btn">
               <i class="bi bi-box-arrow-in-right"></i>
                <input type="submit" class="btn btn-primary btn-sm" name="login" value="Login">
            </div>
        </form>
        <div>
            <p>if you still haven't registered : <a href="registration.php">Register here</a></p>
        </div>
    </div>
</body>
</html>