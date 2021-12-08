<?php

	session_start();
	$db = new mysqli("localhost","root","","singin");

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		$query = "INSERT INTO information(username, password, email) VALUES ('$username' , '$password', '$email')";
		$run = mysqli_query($db, $query);

		if($run){
			$message1 = "Registation Unsuccessful.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
			header('location: index2.php');
		}else{
			$message1 = "Registation Unsuccessful.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}
	}

	if(isset($_POST['login'])){
		$username = $_POST['lusername'];
		$password = $_POST['lpassword'];

		$mysqli = new mysqli("localhost","root","","singin");
		$result = $mysqli->query("SELECT * FROM information WHERE username = '$username' AND password ='$password' ");
		$row = $result->fetch_assoc();

		if($row['username'] == $username && $row['password'] == $password){
			$message = "Login successful.!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('location: index2.php');
		}else{
			$message1 = "Login Unsuccessful.!";
			echo "<script type='text/javascript'>alert('$message1');</script>";
		}
	}

?>