<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="superstyle.css">
    <title>Add New Notes</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Add New Notes</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        
        <form action="process.php" method="post">
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Selected Topic:">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="author" placeholder="Teacher Name:">
            </div>
            <div class="form-elemnt my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select Subject Code</option>
                    <option value="21CS51">21CS51</option>
                    <option value="21CS52">21CS52</option>
                    <option value="21CS53">21CS53</option>
                    <option value="21AI54">21AI54</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Notes Description:"></textarea>
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Notes" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>