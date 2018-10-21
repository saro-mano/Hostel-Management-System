<?php
    include '../../main.php';
?>

<html>
<head>
	<title>Admin Profile</title>
	<link rel="stylesheet" type="text/css" href="../../css/form.css">
    <img id="image" src="../../Warden/1.png" width="100%">
      <style>
        #list1 ul { list-style:none; text-align:center; background:  #18aa8d;box-shadow: 0px 0px 25px rgba(0,0,0,20); border-top:3px solid lightgrey; border-bottom:3px solid lightgrey; padding:10px 0;}
        #list1 ul li { display:inline; text-transform:uppercase; padding:0 10px; letter-spacing:10px; }
        #list1 ul li a { transition: all 0.3s;text-decoration:none; color: black; }
        #list1 ul li a:hover {color: #0F4780;padding: 10px;}
        li a:hover:not(.active) {background-color: #eee;color: black;}
        .active {background-color: #eee;padding: 10px; }
      </style>
</head>
<body>
	
    <div id = "list1">
            <ul>
            <li><a href='profile_admin.php' class="active">Profile</a></li>
            <li><a href='../create_admin.php' >Create acc</a></li>
            <li><a href='edit_admin.php'>Edit acc</a></li>
            <li><a href='delete_admin.php'>Delete acc</a></li>
            <li><a href='inbox_admin.php'>Details</a></li>
            <li><a href='../../logout.php'>Logout</a></li>
            </ul>
        </div>
	
        
	<div class="container">
	<form action="registration.php" method="post">
        <div class="formElement">
	<h3 style="color:grey;text-align:center;">Account Details</h3>
        </div>
		<div id="account_detail">
            <label class="label" for="appName">Username </label>
				<input id="username" type="text" pattern="[A-Za-z]{1,}" title="Please enter a valid name"><br><br>
				
            <label class="label" for="appName">New Password </label>
				 <input id="pwd" type="password" pattern="[A-Za-z0-9]{8,}" title="Password length must be minimum 8 ">
		</div>
		<br>
		<input id="button1" type="submit" onclick="validate()" value="Save">
		<input id="button2" type="submit" onclick="reset()" value="Discard">
	</form>
	</div>
    <script type="text/javascript">
        function validate(){
        var user = document.getElementById('username').value;
        var pattern = new RegExp("@skcet.ac.in");
        var password = document.getElementById('pwd').value;
        var test = pattern.test(user);
        if(test==false)
        {
            alert("Enter a valid username");
        }
        if(password.length < 8)
        {
            alert('Password short');
        }
    }
    </script>
</body>
</html>