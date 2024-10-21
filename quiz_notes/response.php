
<!DOCTYPE html>
<html>
<head>
	<title>Response</title>
    <link rel="stylesheet" href="response.css">
</head>
<body>
    <form method="post" action="responsesend.php">
		<h1> Feedback Form</h1>
    	<label>Name:</label>
    	<input type="text" 
    	       name="name" required>
        
        <label>Email:</label>
    	<input type="text" 
    	       name="email"required>

        <label>USN:</label>
    	<input type="text" 
    	       name="usn" required>

        <label>Marks:</label>
    	<input type="text" 
    	       name="marks" required>
    
    	<label>Feedback:</label>
    	<textarea name="feedback" required></textarea>

    	<input type="submit" 
    	       name="btn">
    </form>
</body>
</html> 