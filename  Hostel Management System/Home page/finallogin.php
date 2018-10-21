<!DOCTYPE html>
<html >
  <head>
    <title>Login Page</title>
    
        
    <link rel="stylesheet" href="cs/wipe.css">

     <img id="image" src="images/1.png" width="100%">
      <style>
        #list1 ul { list-style:none; text-align:center; background:  #18aa8d;box-shadow: 0px 0px 25px rgba(0,0,0,20); border-top:3px solid lightgrey; border-bottom:3px solid lightgrey; padding:10px 0;}
        #list1 ul li { display:inline; text-transform:uppercase; padding:0 10px; letter-spacing:10px; }
        #list1 ul li a { transition: all 0.3s;text-decoration:none; color: black; }
        #list1 ul li a:hover { color: #0F4780;padding: 10px;}
        li a:hover:not(.active) {background-color: #eee;color: black;}
        .active {background-color: #eee;padding: 10px; }
          
          .container {
  max-width: 100%;
  padding: 5em;
  text-align: center;
}

          
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
      
          <div class="container">
  <h2>
      Enter Respective Login 
  </h2>
      
      <a href="final_stu_login.php" class="btn" data-wipe="LOGIN>>">Student</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <a href="final_war_login.php" class="btn" data-wipe="<<LOGIN">Warden</a>
      </div>
</body>
</html>