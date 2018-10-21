<?php
    include '../../database.php';
    include '../../main.php';
    $id = $_SESSION['id'];
    $query = $db->query("SELECT * FROM students where id = '$id'");
    $data = $query->fetch(PDO::FETCH_ASSOC);
    $name = $data['name'];
    $type = $_POST['option'];
    $reason = $_POST['reason'];
    $query = $db->query("SELECT * FROM complaint WHERE name = '$name'");
    $data = $query->fetch(PDO::FETCH_ASSOC);    
    if(empty($data)){
        $query2 = $db->query("INSERT INTO `skcethostel`.`complaint` (`id`, `name`, `type`, `reason`, `status`) VALUES (NULL, '$name', '$type', '$reason', '0')");
        echo "<script language='javascript'>;
        alert('Complaint sent');
        window.location.href='complaint_student.php';
        </script>";
    }
    else{
        $query = $db->query("UPDATE complaint SET status = 0,type = '$type',reason = '$reason' WHERE name = '$name'");
        $query = $db->query("SELECT * FROM outpass where name = '$name'");
        $data = $query->fetch(PDO::FETCH_ASSOC);
        echo "<script language='javascript'>;
        alert('Request sent');
        window.location.href='outpass_student.php';
        </script>";
    }
?>