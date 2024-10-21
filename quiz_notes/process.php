<?php
include('mainconnect.php');
if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($cont, $_POST["title"]);
    $type = mysqli_real_escape_string($cont, $_POST["type"]);
    $author = mysqli_real_escape_string($cont, $_POST["author"]);
    $description = mysqli_real_escape_string($cont, $_POST["description"]);
    $sqlInsert = "INSERT INTO notes(title , author , type , description) VALUES ('$title','$author','$type', '$description')";
    if(mysqli_query($cont,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Notes Added Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($cont, $_POST["title"]);
    $type = mysqli_real_escape_string($cont, $_POST["type"]);
    $author = mysqli_real_escape_string($cont, $_POST["author"]);
    $description = mysqli_real_escape_string($cont, $_POST["description"]);
    $id = mysqli_real_escape_string($cont, $_POST["id"]);
    $sqlUpdate = "UPDATE notes SET title = '$title', type = '$type', author = '$author', description = '$description' WHERE id='$id'";
    if(mysqli_query($cont,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Notes Updated Successfully!";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>