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
            <li><a href='profile_admin.php' >Profile</a></li>
            <li><a href='../create_admin.php' >Create acc</a></li>
            <li><a href='edit_admin.php' >Edit acc</a></li>
            <li><a href='delete_admin.php' class="active">Delete acc</a></li>
            <li><a href='inbox_admin.php'>Details</a></li>
            <li><a href='../../logout.php'>Logout</a></li>
            </ul>
        </div>

	<div class="container">
        
        <label class="label" for="appName">Select the type of account you want to delete</label>
		<select class="select_option">
			<option>Student</option>
			<option>Warden</option>
			<option>Chief Warden</option>
			<option>Work Head</option>
	</select><br><br>
		
            <label class="label" for="appName">Username </label>
		 	<input id="user" type="text" class="textbox" style="margin-left:20px;">
		<br><br>
		<input onclick="check()" id="button1" type="submit" value="Proceed">
	</div>
    <script type="text/javascript">
    function check(){
        var username = document.getElementById('user').value;
        if(username == "")
            alert('No username. Please enter a username');
    }
    </script>
</body>
</html>