<?php
    include '../main.php'; 
?>
<html>
    <head>
	   <title>Admin Profile</title>
	   <link rel="stylesheet" type="text/css" href="../css/form.css">
          <link rel="stylesheet" href="../css/wipe.css">

        <img id="image" src="../Warden/1.png" width="100%">
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
        <div id = "list1">
            <ul>
            <li><a href='pages/profile_admin.php' >Profile</a></li>
            <li><a href='create_admin.php' class="active">Create acc</a></li>
            <li><a href='pages/edit_admin.php'>Edit acc</a></li>
            <li><a href='pages/delete_admin.php'>Delete acc</a></li>
            <li><a href='pages/inbox_admin.php'>Details</a></li>
            <li><a href='../logout.php'>Logout</a></li>
            </ul>
        </div>
        <div class="container">
            <?php
                        if(isset($_SESSION['message'])){
                            echo "<p style = 'color:red;'>" . $_SESSION['message'] . "</p>";
                            unset($_SESSION['message']);
                        }   
                    ?>
            Select the account you want to create
            <br>
            <br>
                 <a href="create_admin.php" class="btn" data-wipe="CREATE>>">Student</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <a href="create_admin_warden.php" class="btn" data-wipe="<<CREATE">Warden</a>
            <br><br>
            <form name="form" action="../forms/registration.php" method = "post" onsubmit="return validate()">
                <div class="formElement">
                <h3 style="color:grey;text-align:center;">Account Details</h3>
                </div>
                    
                    <div id="account_detail">
                                  <label class="label" for="appName">Username </label>  
                    <input name="username" type="text"><br><br>
                                  <label class="label" for="appName"> Password </label>  
                   <input type="password" name="password">
                </div>
                <br>
                <div class="formElement">
                <h3 style="color:grey;text-align:center;">Personal Details</h3>
                </div>
                <div id="personal_detail">
                              <label class="label" for="appName">Name</label>  
                    <input name="name" type="text"><br><br>
                              <label class="label" for="appName">Phone number</label>  
                    <input name="phonenumber" type="text"><br><br>
                          <label class="label" for="appName">Mail-Id </label>  
                    <input name="mail" type="text"><br><br>
                              <label class="label" for="appName">Class</label>  
                    <input name="class" type="text"><br><br>	
                              <label class="label" for="appName">Room number</label>  
                    <input name="room" type="text">
                <br><br>
                <input type="submit" id="button1" value="Create">
                <input id="button2" type="submit" value="Discard">
                </div>
            </form>
        </div>
        <script type="text/javascript">
            function validate(){
                var username = form.username.value;
                var password = form.password.value;
                var name = form.name.value;
                var phone = form.phonenumber.value;
                var mail = form.mail.value;
                var classs = form.class.value;
                var room = form.room.value;
                var pattern = new RegExp("@");
                var test = pattern.test(mail);
                if(username == "")
                    {
                        alert('Enter a username');
                        return false;
                    }
                else if(password == "")
                    {
                        alert('Enter a valid password');
                        return false;
                    }
                else if(name == "")
                    {
                        alert('Name cannot be empty');
                        return false;
                    }
                else if(phone == "" || phone.length != 10)
                    {
                        alert("Enter a ten digit phone number");
                        return false;
                    }
                else if(mail == "" || test == false)
                    {
                        alert('Enter a proper mail ID');
                        return false;
                    }
                else if(classs == "")
                    {
                        alert('Enter a proper class');
                        return false;
                    }
                else if(room == "")
                    {
                        alert('Please enter a room number');
                        return false;
                    }
            }
            
        </script>
    </body>
</html>
