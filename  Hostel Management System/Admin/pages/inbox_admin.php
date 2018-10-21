
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
	
	<br>
		<div id="list1">
		<ul>
		<li><a href="profile_admin.php">Profile</a></li>
		<li><a href="../create_admin.php">Create account</a></li>
		<li><a href="edit_admin.php">Edit account</a></li>
		<li><a href="delete_admin.php">Delete account</a></li>
		<li><a href="inbox_admin.php" class="active">Details</a></li>
		</ul>	
	</div>
</body>
</html>