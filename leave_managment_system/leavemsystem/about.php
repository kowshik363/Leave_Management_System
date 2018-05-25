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
<link href = "about.css" type = "text/css" rel = "stylesheet" />
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

  <div>
    <p id="leavesys">Leave Management System</p>
    <p id="about">

      CUET Leave Management System, a web based software to manage the leave system of the employees in CUET. <br><br>
      CUET is using some automated system but its leave management system is totally manual and it takes a long time to process a leave request. In the current system a leave application has to go through a long chain of officials. As a result, several times the competent authorities may get manipulated information. We have introduced some new concepts to developing current manual system. This system will minimize the paperwork. Moreover, it will help management in decision making as they will get up-to-date reports. We believe, this system will make the leave associated activities easier and also save time and energy.
      <br><br>
      CUET is digitalized day by day. But the leave management system is still in manual process. There are several handover, long term process to get the leave for the employees. But this system is totally helpful to get leave in an online request with proper decision of the authority in a short time. In this system user will be able to access the software in the online process and get notified by the authority.
      <br><br>

    </p>  
  </div>  

  <div class="implemetation" id="implemetation">
    <p id="features">
        Implemented features:
    </p>

    <table id="tableabout" border="3">

      <tr>
      <th>A new generated system to take the online leave request.</th>
      </tr>

      <tr>
      <th>A user panel to view the profile of the user of this system</th>
      </tr>

      <tr>
      <th>An admin panel to supervise the system and determine approval of the leave request that is handled by the authority</th>
      </tr>

      <tr>
      <th>utomatically generate the taking leave days are fetched from the database.</th>
      </tr>

      <tr>
      <th>User can verify their current leaves and make sure to apply the request.</th>
      </tr>

  </table>

  </div>



</body>
<?php
  include "footer.php"; 
 ?>
</html>
