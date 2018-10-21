<!--?php
    include '../main.php';
    $db = new PDO('mysql:host=localhost;dbname=Hostel','root','');

	$password = base64_encode($_POST['password']);
	$name = $_POST['name'];
	$phone = $_POST['phonenumber'];
	$mail = $_POST['mail'];
	$class = $_POST['class'];
	$room = $_POST['room'];

    $query = $db->query("UPDATE users set(`password`, `name`, `phone`, `mail`, `class`, `room`)VALUES('$password', '$name', '$phone', '$mail', '$class', '$room')");
    $data = $query->fetch(PDO::FETCH_ASSOC);
    $_SESSSION['message'] = "Profile update successful!";
    header('Location: profile_student.php');
?-->
