<html>
<head>
  <title>Results</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body class = "data" style="background:#607d8b">
<div class="container ">
  <h2 class="card-header text-center" > Result</h2>
   </div>
   <div class="card-body" style="color:white">
   <table border='1px' width="100%">
   <th>Attempt Questions</th>
   <th>Your Score is :</th>
  <tr>
<?php
session_start();
error_reporting(0);
?>
<?php
include('mainconnect.php');
if(isset($_POST['sub'])){
        if(!empty($_POST['check'])){
            $i=1;
            $res=0;
            $match=count($_POST['check']);
            echo "<td>Out of 6 you attempted ".$match." questions </td>";
            $select=$_POST['check'];
            $sql1="select * from questions";
            $data2=mysqli_query($cont,$sql1);
            while($row=mysqli_fetch_assoc($data2)){
                $check=$row ['aid']==$select[$i];
                If($check){
                    $res++;
                }
                $i++;
            }
            echo '<td>'.$res.'</td>';
        }
        if(empty($_POST['check'])){
            echo "Attempt the questions for your scores to be displayed!!!";
        }
    }
?> 
</h2>
   </tr>
   </table>
   </div>
   <div class="card-footer text-center">
	  <a href = 'logout.php'>
	  <button class="btn btn-primary">Log out</button></a>
    <a href = 'response.php'>
	  <button class="btn btn-primary">Response</button></a></div>
  </div>
  </div>
</div>
</body>
</html>
