<?php
    //include '../database.php';
    include '../main.php';
    $db = new PDO('mysql:host=localhost;dbname=skcethostel','root','');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $db->query("SELECT * FROM admin WHERE username = '$username'");
    $data = $query->fetch(PDO::FETCH_ASSOC);
    if($data['password'] == $password){
        $_SESSION['id'] = $data['id'];
        header('Location: ../Admin/create_admin.php');
    }
    else{
        echo "<script language='javascript'>;
        alert('Incorrect username or password');
        window.location.href='final_adm_login.php';
        </script>";
    }  
?>