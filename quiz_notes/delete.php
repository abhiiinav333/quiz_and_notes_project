<?php
if (isset($_GET['id'])) {
include("mainconnect.php");
$id = $_GET['id'];
$sql = "DELETE FROM notes WHERE id='$id'";
if(mysqli_query($cont,$sql)){
    session_start();
    $_SESSION["delete"] = "Notes Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Notes does not exist";
}
?>