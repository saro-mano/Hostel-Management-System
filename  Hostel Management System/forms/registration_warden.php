<?php
    include '../main.php';
    $db = new PDO('mysql:host=localhost;dbname=skcethostel','root','');
    //PDO('mysql:host=localhost','root','')
    $username = $_POST['username'];
    $password = base64_encode($_POST['password']);
    $name = $_POST['name'];
    $phone = $_POST['phonenumber'];
    $mail = $_POST['mail'];
    $block = $_POST['block'];

    
    $query = $db->query("SELECT * FROM warden WHERE username = '$username'");
    $data = $query->fetch(PDO::FETCH_ASSOC);
    if(!empty($data)){
		$_SESSION['message'] = "Username already taken";
		header('Location: ../Admin/create_admin_warden.php');
    }
    else{
        $query = $db->query("INSERT INTO `skcethostel`.`warden` (`id`, `username`, `password`, `name`, `number`, `mail`, `block`) VALUES (NULL, '$username', '$password', '$name', '$phone', '$mail', '$block')");
        $_SESSION['message'] = "User created successfully";
		header('Location: ../Admin/create_admin_warden.php');
    }
?>