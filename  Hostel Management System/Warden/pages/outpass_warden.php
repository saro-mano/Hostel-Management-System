<?php
    include '../../main.php';
    include '../../database.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Outpass</title>
	<link rel="stylesheet" type="text/css" href="../../css/form.css">
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
            <li><a href="pages/outpass_warden.php" class="active">Outpass</a></li>
           <li><a href="complaint_warden.php">Complaints</a></li>
		</ul>	
	</div>
	<div class="container">
		<?php
            $query = $db->query("SELECT * FROM outpass");
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($data as $d){
                if($d['status'] == 0){
                    $name = $d['name'];
                    $query = $db->query("SELECT * FROM students where name = '$name'");
                    $details = $query->fetch(PDO::FETCH_ASSOC);
                    print_r($d['name'] . " needs outpass on <span style ='color:red;'> " . $d['date'] . "</span> timing  from <span style ='color:blue;'> " .$d['time_from']. "</span> to <span style ='color:blue;'> " . $d['time_to']. "</span>");
                    echo " from room no. <span style = 'color:pink;'>" .$details['room'] . "</span>";
                    echo " requesting for <span style ='color:red;'>".$d['count']."rd</span> time ";
                    echo "<br><br>"."<a class='btn' data-wipe = 'Accept' href = 'accept.php?id=".$d['id']."'>Accept</a>";
                    echo "<br><br><br>"."<a class='btn' data-wipe = 'Accept' href = 'reject.php?id=". $d['id']. "'>Reject</a>";
                }
            }
        ?>
	</div>
</body>
</html>