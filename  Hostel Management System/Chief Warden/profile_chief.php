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
	<div id="options">
		<ul>
		<li><a href="profile_chief.html" class="active">Profile</a></li>
		<li><a href="announce_chief.html">Make Announcement</a></li>
		<li><a href="inbox_chief.html">Inbox</a></li>
		</ul>	
	</div>
	<div id="create">
        <form name="form" onsubmit="validate()">
        	<h3 style="color:grey;text-align:center;">Account Details</h3>
        <div id="account_detail">    
            Username <input type="text" value="CHief Warden" style="cursor:not-allowed"><br><br>
            New Password <input type="text">
        </div>
            <br>
        <h3 style="color:grey;text-align:center;">Personal Details</h3>
	    <div id="personal_detail">   
				Name <input type="text" value="name"><br><br>
				Phone number<input type="text" value="9487927491"><br><br>
				Mail-Id<input type="text" value="warden@gmail.com"><br>
		<input id="button1" style="position: relative; top:40px; right:200px; " type="submit" value="Save">
		<input id="button2" onclick="reset()" style="position: relative; top:10px; left:30px;" type="button" value="Discard">
	</div>
    </form>
    <script type="text/javascript">
    
    </script>
</body>
</html>