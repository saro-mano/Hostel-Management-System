<?php
    include '../../main.php';
    $id = $_SESSION['id'];
    $db = new PDO('mysql:host=localhost;dbname=skcethostel','root','');
    $query = $db->query("SELECT * FROM students WHERE id = $id");
    $name = $query->fetch(PDO::FETCH_ASSOC);
    $name = $name['name'];
    $date = $_POST['date'];
    $time1 = $_POST['t1'];
    $time2 = $_POST['t2'];
    $reason = $_POST['reason'];
    $query = $db->query("SELECT * FROM outpass WHERE name = '$name'");
    $data = $query->fetch(PDO::FETCH_ASSOC);    
    if(empty($data)){
        $query = $db->query("INSERT INTO outpass (`id`, `date`, `time_from`, `time_to`, `status`, `reason`, `name`,`count`)VALUES(NULL, '$date','$time1','$time2', 0, '$reason', '$name',1)");
        echo "<script language='javascript'>;
        alert('Request sent');
        window.location.href='outpass_student.php';
        </script>";
    }
    else{
        $query = $db->query("UPDATE outpass SET status = 0,date = '$date',time_from = '$time1',time_to = '$time2',reason = '$reason' WHERE name = '$name'");
        $query = $db->query("SELECT * FROM outpass where name = '$name'");
        $data = $query->fetch(PDO::FETCH_ASSOC);
        $count = $data['count'];
        $count = $count + 1;
        $query = $db->query("UPDATE outpass SET count = '$count' WHERE name = '$name'");
        echo "<script language='javascript'>;
        alert('Request sent');
        window.location.href='outpass_student.php';
        </script>";
    }
?>