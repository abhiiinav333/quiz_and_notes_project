<?php
session_start();
?>
<html>
<head>
  <title>Let's Play</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background:#607d9b">
    <div class="container text-center">
        <h1 style="color:yellow">Quiz Time</h1>
        <div class=card >
            <form action="result.php" method="post">
            <?php
            include('mainconnect.php');
            for($i=1;$i<20;$i++){
                $sql="select * from questions where id=$i";
                $data =mysqli_query($cont,$sql);
                while($row=mysqli_fetch_assoc($data)){
                    ?>
                    <div class="card-header"><h3><?php echo$row['question'] ?></h3></div>
                    <?php
                    $sql="select * from answers where ans_id=$i";
                    $data =mysqli_query($cont,$sql);
                while($row=mysqli_fetch_assoc($data)){
                    ?>
                    <div class="card-body">
                        <span style="float:left"><input type="radio" name="check[<?php echo$row['ans_id']; ?>]" value="<?php echo $row['aid'] ?>">
                        <?php echo $row['answer']?>
                        </span>
                    </div>
                    <?php
                }
                }
            }
            ?>
            <div class="text-center"> 
                <input type="Submit" name="sub" class="btn btn-primary">
                <button class="btn btn-warning"><a href="logout.php">Logout</a></button>
            </div>
        </div>
    </div>
</body>
</html>