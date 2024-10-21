<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="superstyle.css">
    <title>Notes Details</title>
    <style>
        .book-details{
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Notes Details</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details p-5 my-4">
            <?php
            include("mainconnect.php");
            $id = $_GET['id'];
            if ($id) {
                $sql = "SELECT * FROM notes WHERE id = $id";
                $result = mysqli_query($cont, $sql);
                while ($row = mysqli_fetch_array($result)) {
                 ?>
                 <h3>Notes Title:</h3>
                 <p><?php echo $row["title"]; ?></p>
                 <h3>Notes Description:</h3>
                 <p><?php echo $row["description"]; ?></p>
                 <h3>Teacher Name:</h3>
                 <p><?php echo $row["author"]; ?></p>
                 <h3>Subject Code:</h3>
                 <p><?php echo $row["type"]; ?></p>
                
                 <?php
                }
            }
            else{
                echo "<h3>No Notes found</h3>";
            }
            ?>
            
        </div>
    </div>
</body>
</html>