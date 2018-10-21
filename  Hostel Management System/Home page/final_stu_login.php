<?php
    include '../main.php';
?>
<!DOCTYPE html>
<html >
  <head>
    <title>Student Login</title>
    
    
        <link rel="stylesheet" href="cs/style.css">
     
     <img id="image" src="images/1.png" width="100%">
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
<div id="list1">
   <ul>
      <li><a href="finalhme.php">Home</a></li>
      <li><a href="finallogin.php"  class="active" >Login</a></li>
      <li><a href="finalcontact.php">Contact</a></li>
     <li><a href="finalabout.php">About Us</a></li>
   </ul>
</div>

<form action="login_student.php" method="post">
    
    <center><h1>STUDENT LOGIN HERE</h1></center>
    <nav>
   
  </nav>
  <input placeholder="Username" name="username" type="text" required="">
  <input placeholder="Password" name="password" type="password" required="">
  <button>Submit</button>
</form> 
      
</body>
</html>