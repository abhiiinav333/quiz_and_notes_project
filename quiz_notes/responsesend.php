 <?php  
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['usn']) && isset($_POST['marks'])  && isset($_POST['feedback'])) {
	include 'mainconnect.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $usn = validate($_POST['usn']);
    $marks = validate($_POST['marks']);
	$feedback = validate($_POST['feedback']);

	if (empty($name) || empty($usn) || empty($email) || empty($feedback) || empty($marks) || empty($feedback)) {
		header("Location: quizhome.php");
	}else {

		$sql = "INSERT INTO response(name, email, usn, marks, feedback) VALUES('$name', '$email', '$usn', '$marks', '$feedback')";
		$res123 = mysqli_query($cont, $sql);

		if ($res123) {
			header("location: quizhome.php");
			
		}else {
			header("location: response.php");
		}
	}

}else {
	header("Location: quizhome.php");
} 