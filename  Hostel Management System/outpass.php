<?php
    include '../../database.php';
    $date = $_POST['date'];
    $time1 = $_POST['t1'];
    $time2 = $_POST['t2'];
    $reason = $_POST['reason'];
    $query = $db->query("INSERT INTO outpass (`id`, `date`, `time_from`, `time_to`, `status`, `reason`) VALUES(NULL, $date, $time1, $time2, 0, $reason)");
?>