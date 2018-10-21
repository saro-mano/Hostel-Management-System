<?php
    include '../../main.php';
    include '../../database.php';
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
		<li><a href="outpass_student.php" class="active">Out-Pass</a></li>
		<li><a href="complaint_student.php">Complaints</a></li>
		<li><a href="inbox_student.php">Inbox</a></li>
		</ul>	
	</div>
        <div class="container">
		<form name="form" class="student_outpass" action ="outpass.php" method="post" onsubmit="return validate()">
            <div class="formElement">
            <h3 style="color:grey;text-align:center;">Outpass Form</h3>
            </div>
            <label class="label" for="appName">Date </label>  
			
			<input name ="date" id="date" type = "date"><br><br>
            <label class="label" for="appName">Time-From </label>  
			
			<input name = "t1" id="t1" type="time"><br><br>
			
            <label class="label" for="appName">Time-To</label>  
            
			<input name ="t2" id="t2" type="time"><br><br>
            <label class="label" for="appName">Reasons: </label>  
			<textarea name ="reason" rows="8" cols="90" placeholder="Enter your text"></textarea><br><br>
	<input type="submit" id="button1" value="Send" style="height:40px; font-size:20px; margin-left:100px">
	<input type="submit" id="button2" value="Discard" style="height:40px; font-size:20px; margin-left:200px;">
        </form>
	</div>
    <div class="container" style="text-align:center;">
        <?php
            $id = $_SESSION['id'];
            $query = $db->query("SELECT * FROM students WHERE id = '$id'");
            $data = $query->fetch(PDO::FETCH_ASSOC);
            $name = $data['name'];
            $query = $db->query("SELECT * FROM outpass WHERE name = '$name'");
            $data = $query->fetch(PDO::FETCH_ASSOC);
            
            print_r("You have sent " . "<span style = 'color:red;'>" . $data['count'] ."</span>"." outpasses this month");
           
        ?>    
    </div>
    
    <script type="text/javascript">
    function validate(){
        var date = form.date.value;
        var time1 = form.t1.value;
        var time2 = form.t2.value;
        if(date == "")
            {
                alert("Enter a date");
                return false;
            }
        if(time == "" || time2 =="")
            {
                alert("Mention in and out time ");
                return false;
            }
    }
    </script>
</body>
</html>