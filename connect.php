<?php
	$firstName = $_POST['firstName'];
	$email = $_POST['email'];
	$massage = $_POST['massage'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, email, massage) values(?, ?, ?)");
		$stmt->bind_param("sss",$firstName, $email, $massage);
		$execval = $stmt->execute();
		echo $execval;
		
		header('location:contact-us.php');
		$message1 = "Registation Unsuccessful.!";
		echo "<script type='text/javascript'>alert('$message1');</script>";
		$stmt->close();
		$conn->close();
	}
?>