<?php 
require 'config.php';
if(!empty($_SESSION["id"])){
	header("Location: index.php");
}
if (isset($_POST["submit"])) {
	$email = $_POST["email"];
	$password = $_POST["password"];
	$result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' ");
	$row = mysqli_fetch_assoc($result);
	if (mysqli_num_rows($result) > 0) {
		if($password == $row["password"]){
			$_SESSION["login"] = true;
			$_SESSION["id"] = $row["id"];
			header("Location: index.html");
		}else{

			echo "<script> alert('Wrong password') </script>";
		}
	}else{
		echo
	"<script> alert('User not registered') </script>";
	}

	}

