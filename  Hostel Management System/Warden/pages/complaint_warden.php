<!DOCTYPE html>
<html>
<head>
	<title>Complaints</title>
	<link rel="stylesheet" type="text/css" href="../../css/form.css">
    <!--link rel="stylesheet" href="../css/style.css"-->
    <link rel="stylesheet" href="../../css/wipe.css">

        <img id="image" src="../1.png" width="100%">
            
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
		<li><a href="../profile_warden.php"> Profile</a></li>
            <li><a href="outpass_warden.php" >Outpass</a></li>
           <li><a href="pages/complaint_warden.php" class="active">Complaints</a></li>
		</ul>	
	</div>
	<div class="container">
		<?php
            include '../../database.php';
            include '../../main.php';
            $query = $db->query("SELECT * FROM complaint where status = 0");
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($data as $d){
                print_r($d['name']. " has registered a complaint on " . $d['type']. " stating " .  $d['reason']);
                echo "<br>";
                echo "<br>";
                echo "<a class='btn' data-wipe = 'Proceed' href='proceed_com.php?id=".$d['id']."'  >Proceed</a>";
                echo "<a class='btn' data-wipe = 'Decline' href='decline_com.php?id=".$d['id']."'  >Decline</a>";
                echo "<hr>";
            }
        ?>
        <br><br>
    </div>
</body>
</html>