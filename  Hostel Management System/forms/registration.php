<?php 
	include '../database.php';
	include '../main.php';

	$username = $_POST['username'];
	$password = base64_encode($_POST['password']);
	$name = $_POST['name'];
	$phone = $_POST['phonenumber'];
	$mail = $_POST['mail']; 
	$class = $_POST['class'];
	$room = $_POST['room'];


	$query = $db->query("SELECT * FROM students WHERE username = '$username'");
	$data = $query->fetch(PDO::FETCH_ASSOC);
	if(!empty($data)){
		$_SESSION['message'] = "Username already taken";
		header('Location: ../Admin/create_admin.php');
	}
	else{
		$query = $db->query("INSERT INTO students (`id`, `username`, `password`, `name`, `phone`, `mail`, `class`, `room`) VALUES(NULL, '$username', '$password', '$name', '$phone', '$mail', '$class', '$room')");
		$_SESSION['message'] = "User created successfully";
		header('Location: ../Admin/create_admin.php');
	}
?>