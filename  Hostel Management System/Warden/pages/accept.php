<?php
    include '../../database.php';
    $id = $_GET['id'];
    $query = $db->query("UPDATE outpass SET status = 1 WHERE id = '$id'");
    header('Location: outpass_warden.php');
?>