<?php 
  session_start();
     
  if( $_SESSION['pasta']!='pasta'){

    header('location:login.php');
  }
?>
<!DOCTYPE html>
<head>
<title>Leave Management System</title>
<link href = "style.css" type = "text/css" rel = "stylesheet" />
<link href = "Login style.css" type = "text/css" rel = "stylesheet" />
<style type="text/css">
body {
  background-color: #bdc3c7;
}
</style>
</head>
<body>
<div id = "nav" >
   <div id = "nav_wrapper"></div>
    <ul>
      <li><a href = "home.php"> <img src="image/arrow.png" width="55" height="55"> </a>
      <ul>
               <li><a href = "home.php" title="home page of Leave Management System">Home</a></li>
               <li><a href = "profile.php" title="Profile page of the user">Profile</a></li>
               <li><a href = "notice.php"  title="Notice from the administrator">Notice</a></li>
               <li><a href = "about.php" title="Details of Leave Management System">About</a></li>
               <li><a href = "contact.php" title="Contact information of the developer">Contact</a></li> 
               <li><a href="index.php" title="Logout">LOG-OUT</a></li>           
          </ul>
         </li> 
   </ul>
  </div>
  </div>
</body>
</html