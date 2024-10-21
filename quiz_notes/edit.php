<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="superstyle.css">
    <title>Edit Notes</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Notes</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("mainconnect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM notes WHERE id=$id";
                $result = mysqli_query($cont,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="New Topic:" value="<?php echo $row["title"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="author" placeholder="Teacher Name:" value="<?php echo $row["author"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select Notes Type:</option>
                    <option value="21CS51" <?php if($row["type"]=="21CS51"){echo "selected";} ?>>21CS51</option>
                    <option value="21CS52" <?php if($row["type"]=="21CS52"){echo "selected";} ?>>21CS52</option>
                    <option value="21CS53" <?php if($row["type"]=="21CS53"){echo "selected";} ?>>21CS53</option>
                    <option value="21AI54" <?php if($row["type"]=="21AI54"){echo "selected";} ?>>21AI54</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Notes Description:"><?php echo $row["description"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Notes" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Notes Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>