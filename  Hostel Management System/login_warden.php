<?php
    //include '../database.php';
    include '../main.php';
    $db = new PDO('mysql:host=localhost;dbname=skcethostel','root','');
    $username = $_POST['username'];
    $password = base64_encode($_POST['password']);

    $query = $db->query("SELECT * FROM warden WHERE username = '$username'");
    $data = $query->fetch(PDO::FETCH_ASSOC);
    if($data['password'] == $password){
        $_SESSION['id'] = $data['id'];
        header('Location: ../Student/profile_warden.php');
    }
    else{
        echo "<script language='javascript'>;
        alert('Incorrect username or password');
        window.location.href='final_war_login.php';
        </script>";
    }  
?>