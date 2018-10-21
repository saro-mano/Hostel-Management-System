<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<link rel="stylesheet" type="text/css" href="../../Admin/pro.css">
</head>
<body>
	<div id="welcome">
		<img id="img" src="0.jpg" alt="profile picture" width="100px" height="100px">
		Welcome Warden
		<input type="submit" value="Log Out" style="float:right; width: 100px; height:35px; font-size:20px; margin-top:70px; "></input>
	</div>
	<br>
	<div id="options">
		<ul>
		<li><a href="../profile_warden.php">Profile</a></li>
		<div class="dropdown">
			<li><a class="dropbtn">Notifications</a></li>
			<div class="dropdown-content">
			<a href="outpass_warden.php">Outpass</a>
			<a href="complaint_warden.php">Complaints</a>
			</div>
		</div>
		<li><a href="inbox_warden.html" class="active">Inbox</a></li>
		</ul>	
	</div>
</body>
</html>