<?php
require 'config.php';
if(!empty($_SESSION["id"])){ 
	header("Location: index.html");
}
if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	$duplicate = mysqli_query($conn,"SELECT * FROM user WHERE email = '$email'");
	if (mysqli_num_rows($duplicate) > 0 ) {
	echo
	"<script> alert('email has already taken') </script>";
	}
	else{
		if($password == $confirmpassword){
			$query = "INSERT INTO user VALUES ('','$name', '$email', '$phone' , '$password', '$confirmpassword')";
			mysqli_query($conn, $query);
			echo
			"<script> alert ('Registration successful'); </script>";

		}else{
			echo "<script> alert ('Password do not match'); </script>";
		}

	}
}
