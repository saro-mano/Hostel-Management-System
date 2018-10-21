<?php
    include '../main.php';
    $db = new PDO('mysql:host=localhost;dbname=skcethostel','root','');
    if(!isset($_SESSION['id'])){
        header('Location: ../Home page/final_stu_login.php');
    }
    if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $query = $db->query("SELECT * FROM students WHERE id = $id");
    $data = $query->fetch(PDO::FETCH_ASSOC);
    }
?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Edit profile</title>
        <link rel="stylesheet" type="text/css" href="../css/form.css">
        <img id="image" src="../Home%20page/images/1.png" width="100%">
        
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
                <li><a style="margin-left:-30px;" href="profile_student.html" class="active">Profile</a></li>
                <li><a href="pages/outpass_student.php">Out-Pass</a></li>
                <li><a href="pages/complaint_student.php">Complaints</a></li>
                <li><a href="pages/inbox_student.php">Inbox</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div id="create">
                        
<div class="container">
            <form name="form" action = "change.php" method = "post" onsubmit="validate()">
                                    <div class="formElement">
                <h3 style="color:grey;text-align:center;">Account Details</h3>
                </div>
                <div id="account_detail">

                      <label class="label" for="appName">Username </label>  
                    <input name="username" type="text" value='<?php echo $data['username'];?>' readonly style="background : #CCCCCC; cursor:not-allowed"><br><br>
                    <label class="label" for="appName">Password </label>
                    <input type="password">
                    </div>
    
                <br>
                <div class="formElement">
                <h3 style="color:grey;text-align:center;">Personal Details</h3>
                </div>
                <div id="personal_detail">
                    
                        <label class="label" for="appName">Name</label>
                        <input name="name" type="text" value='<?php echo $data['name'];?>'><br><br>
                
                            <label class="label" for="appName"> Phone number</label>
                           <input name="phone" type="text" value='<?php echo $data['phone'];?>'><br><br>
                        
                                <label class="label" for="appName">Mail-Id</label>
                                 <input name="mail" type="text" value='<?php echo $data['mail'];?>'><br><br>
                            
                                    <label class="label" for="appName">Class </label>
                                    <input name="class" type="text" value='<?php echo $data['class'];?>'><br><br>
                                    
                                        <label class="label" for="appName"> Room number</label>
                                       <input name="room" type="text" value='<?php echo $data['room'];?>'><br><br>
                    
     <input onclick="validate()" type="submit" id="button1" value="Save" style="height:40px; font-size:20px; margin-left:100px">
                
	<input type="submit" id="button2" value="Discard" style="height:40px; font-size:20px; margin-left:200px;">
                    

                </div>
        

            </form>
                   
        </div>
        <script type="text/javascript">
            function validate() {
                alert('Hey!');
                var username = document.form.username.value;
                var password = document.form.password.value;
                var name = document.form.name.value;
                var phone = document.form.phonenumber.value;
                var mail = document.form.mail.value;
                var classs = document.form.class.value;
                var room = document.form.room.value;
                var pattern = new RegExp("@");
                var test = pattern.test(mail);
                if (username == "") {
                    alert('Enter a username');
                    return false;
                } else if (password == "") {
                    alert('Enter a valid password');
                    return false;
                } else if (name == "") {
                    alert('Name cannot be empty');
                    return false;
                } else if (phone == "" || phone.length != 10) {
                    alert("Enter a ten digit phone number");
                    return false;
                } else if (mail == "" || test == false) {
                    alert('Enter a proper mail ID');
                    return false;
                } else if (classs == "") {
                    alert('Enter a proper class');
                    return false;
                } else if (room == "") {
                    alert('Please enter a room number');
                    return false;
                }
            }

        </script>
    </body>
    </html>
