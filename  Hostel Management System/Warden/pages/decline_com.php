<?php
    include '../../database.php';
    include '../../main.php';
    $id = $_GET['id'];
    $query = $db->query("UPDATE complaint SET status = 2 WHERE id = '$id' ");
    header('Location: complaint_warden.php');
?>