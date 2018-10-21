<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="../Admin/pro.css">
</head>
<body>
	<div id="welcome">
		<img id="img" src="0.jpg" alt="profile picture" width="100px" height="100px">
		Welcome Chief Warden
		<input type="submit" value="Log Out" style="float:right; width: 100px; height:35px; font-size:20px; margin-top:70px; "></input>
	</div>
	<br>
	<div id="options">
		<ul>
		<li><a href="profile_chief.html">Profile</a></li>
		<li><a href="announce_chief.html" class="active">Make Announcement</a></li>
		<li><a href="inbox_chief.html">Inbox</a></li>
		</ul>	
	</div>
	<div id="create">
		<textarea style="padding:30px; margin-left:30px;" rows="8" cols="80">The mess won't work on Aug 8th to Aug 10th due to .... So, please be aware</textarea><br>
		<button id="button1" onclick="alert('Posted Successfully');" type="click" style="margin-left:300px;">Post</button>
	</div>
</body>
</html>