<?php
session_start();
if(isset($_SESSION["open"])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST["submit"])){
            $fullname=$_POST["fullname"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $repeatpassword=$_POST["rpt_password"];

            $password_protect=password_hash($password, PASSWORD_DEFAULT);

            $errors=array();

            if (empty($fullname) OR empty($email) OR empty($password) OR empty($repeatpassword)){
            array_push($errors,"Please Filll all the Feilds");
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($errors,"Not a valid E-Mail");
            }
            if(strlen($password)<6){
            array_push($errors,"password must be more than 6 characters");
            }
            if($password!==$repeatpassword){
                array_push($errors,"Mismatched password!!!");
            }
            
            require_once "mainconnect.php";
            $sql="SELECT * FROM register WHERE email='$email'";
            $result=mysqli_query($cont, $sql);
            $rowcount=mysqli_num_rows($result);
            if($rowcount>0){
                array_push($errors,"Email already exists!!!Please login");
            }
            if(count($errors)>0){
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }else{
                $sql="INSERT INTO register (fullname, email, password) VALUES (?, ?, ?)";
                $stmt=mysqli_stmt_init($cont);
                $preparestmt=mysqli_stmt_prepare($stmt,$sql);
                if($preparestmt){
                    mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$password_protect);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>Registered Successful..!!</div>";
                }else{
                    die("Something went wrong");
                }
            }
        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <i class="bi bi-person"></i>
                <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name">
             </div>
            <div class="form-group">
                <i class="bi bi-envelope"></i>
                <input type="email" class="form-control" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <i class="bi bi-lock"></i>
                <input type="password" class="form-control" name="password" placeholder="Enter password">
            </div>
            <div class="form-group">
                 <i class="bi bi-lock"></i>
                <input type="password" class="form-control" name="rpt_password" placeholder="Enter same Password">
            </div>
            <div class="form-btn">
                 <i class="bi bi-check2-circle"></i>
                <input type="submit" class="btn btn-primary btn-sm" name="submit" value="Submit">
            </div>
        </form>
        <div>
            <p>If you have already Registered : <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>