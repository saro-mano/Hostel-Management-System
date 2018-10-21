<?php
    include '../main.php';
    include '../database.php';

    if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $query = $db->query("SELECT * FROM warden WHERE id = $id");
    $data = $query->fetch(PDO::FETCH_ASSOC);
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<link rel="stylesheet" type="text/css" href="../css/form.css">
    <img id="image" src="1.png" width="100%">
            
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
		<li><a href="profile_warden.php" class="active">Profile</a></li>
            <li><a href="pages/outpass_warden.php">Outpass</a></li>
           <li> <a href="pages/complaint_warden.php">Complaints</a></li>
		<li><a href="../logout.php">Logout</a></li>
		</ul>	
	</div>
    
	<div class="container">
	<form name = "form" onsubmit="validate()">
        <div id="formElement">
	<h3 style="color:grey;text-align:center;">Account Details</h3>
        </div>
	<div id="account_detail">
                    <label class="label" for="appName">Username</label>  
				 <input type="text" value='<?php echo $data['username'];?>' readonly style="cursor:not-allowed"><br><br>
                    <label class="label" for="appName">New Password </label>  
				<input type="text">
        </div>
        <br>
        <div id="formElement">
        <h3 style="color:grey;text-align:center;">Personal Details</h3>
        </div>
	<div id="personal_detail">
                    <label class="label" for="appName">Name</label>  
				<input type="text" value='<?php echo $data['name'];?>'><br><br>
                    <label class="label" for="appName">Phone number</label>  
				<input type="text" value='<?php echo $data['number'];?>'><br><br>
                    <label class="label" for="appName">Mail-Id</label>  
				<input type="text" value='<?php echo $data['mail'];?>'><br><br>
                    <label class="label" for="appName">Block</label>  
				<input type="text" value='<?php echo $data['block'];?>'><br><br>
	<input id="button1"  type="submit" value="Save">
		<input id="button2" onclick="reset()"  type="submit" value="Discard">
        </div>
        </form>
    </div>
    
    <script type="text/javascript">
    
    </script>
    
</body>
</html>