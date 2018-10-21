<?php
    include '../../database.php';
    include '../../main.php';
    $id = $_GET['id'];
    $query = $db->query("UPDATE complaint SET status = 1 where id = '$id'");
    header('Location: complaint_warden.php');
?>