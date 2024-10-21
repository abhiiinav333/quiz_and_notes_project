<?php
session_start();
if(!isset($_SESSION["open"])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Home</title>
    <link rel="stylesheet" href="mainhome.css">
</head>
<body>
    <div class="banner">
        <div class="content">
            <div>
                <button type="button"><a href="beginquiz.php"><span></span>Take Quiz</a></button>
                <button type="button"><a href="index.php" class="btn btn-warning"><span></span>Take Notes</a></button>
            </div>            
        </div>
    </div>
</body>
</html>
