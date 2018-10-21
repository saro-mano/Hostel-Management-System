<?php
    include '../../main.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<link rel="stylesheet" type="text/css" href="../../css/form.css">
    <img id="image" src="../../Home%20page/images/1.png" width="100%">
            <style>
    
        #list1 ul { list-style:none; text-align:center; background:  #18aa8d;box-shadow: 0px 0px 25px rgba(0,0,0,20); border-top:3px solid lightgrey; border-bottom:3px solid lightgrey; padding:10px 0;}
        #list1 ul li { display:inline; text-transform:uppercase; padding:0 10px; letter-spacing:10px; }
        #list1 ul li a { transition: all 0.3s;text-decoration:none; color: black; }
        #list1 ul li a:hover { color: #0F4780;padding: 10px;}
        li a:hover:not(.active) {background-color: #eee;color: black;}
        .active {background-color: #eee;padding: 10px; }
            
      </style>
</head>
<body>
	
	
	<br>
	<div id="list1">
		<ul>
		<li><a style="margin-left:-30px;" href="../profile_student.php" >Profile</a></li>
		<li><a href="outpass_student.php">Out-Pass</a></li>
		<li><a href="complaint_student.php">Complaints</a></li>
		<li><a href="inbox_student.php" class="active">Inbox</a></li>
        
		</ul>	
	</div>
    <div class="container" style="text-align:center;">
        <?php
            include '../../database.php';
            $id = $_SESSION['id'];
            $query = $db->query("SELECT * FROM students where id = '$id'");
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $name = $data['name'];
            $query = $db->query("SELECT * FROM outpass where name ='$name'");
            $data = $query->fetch(PDO::FETCH_ASSOC);
            if($data['status'] == 1){
                print_r("Your outpass has been <span style = 'color:blue;'>granted</span> for ". $data['date']);
                echo "<br><br><hr>";
            }
            else if($data['status'] == 2){
                print_r("Your outpass has been <span style = 'color:red;'>rejected</span> ");
                echo "<br><br><hr>";
            }
        ?>
        <?php
            $id = $_SESSION['id'];
            $query = $db->query("SELECT * FROM students where id = '$id'");
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $name = $data['name'];
            $query = $db->query("SELECT * FROM complaint where name ='$name'");
            $data = $query->fetch(PDO::FETCH_ASSOC);
            if($data['status'] == 1){
                echo "<br>";
                print_r("Your complaint has been <span style = 'color:#18AA8D;'>processed</span>");
                echo "<br><br><hr>";
            }
            else if($data['status'] == 2){
                echo "<br>";
                print_r("Your outpass has been <span style = 'color:red;'>rejected</span> ");
                echo "<br><br><hr>";
            }
        ?>
    </div>  