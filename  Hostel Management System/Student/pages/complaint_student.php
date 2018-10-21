<!DOCTYPE html>
<html>
<head>
	<title>Complaints</title>
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
	
	<!--div id="welcome">
		<img id="img" src="0.png" alt="profile picture" width="100px" height="100px">
		Welcome Student
		<input type="submit" value="Log Out" style="float:right; width: 100px; height:35px; font-size:20px; margin-top:70px; "></input>
	</div-->
	<br>
	<div id="list1">
		<ul>
		<li><a style="margin-left:-30px;" href="../profile_student.php" >Profile</a></li>
		<li><a href="outpass_student.php">Out-Pass</a></li>
		<li><a href="complaint_student.php" class="active">Complaints</a></li>
            <li><a href="inbox_student.php">Inbox</a></li>
		</ul>	
	</div>
    <form name="form" action = "complaint.php" method="post" onsubmit = "return validate()">
	  <div class="container">
            <div class="formElement">
            <h3 style="color:grey;text-align:center;">Complaint Register</h3>
            </div>
          <br><br>

          <label class="label" for="appName">Enter the department of complaint:</label>  
		<select name="option" id="select" class="select_option">
			<option>Electrical</option>
			<option>Plumbing</option>
			<option>Food</option>
			<option>Hygiene</option>
			<option>Others..</option>
		</select>
          <br><br>
          <br><br>
          
          <label class="label" for="appName">Reasons:</label>  

		<textarea name = "reason" rows="8" cols="80" placeholder="Enter your reason."></textarea><br>
		<input id="button1" type="submit" value="Send" style="height:40px; font-size:20px; margin-left:100px; margin-top:20px;">
		<input type="submit" id="button2" value="Discard" style="height:40px; font-size:20px; margin-left=400px;">
	</div>
    </form>
    <script type="text/javascript">
        function validate(){
            var reason = form.reason.value;
            if(reason == "")
                {
                    alert("Reason cannot be empty")
                    return false;
                }
        }
    </script>
    </body>
</html>