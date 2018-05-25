<?php 
  session_start();
  if($_SESSION['pass']!='poul'){
    header('location:adminlogin.php');

  }
?>
<!DOCTYPE html>
<head>
<title>Leave Management System</title>
<link href = "style.css" type = "text/css" rel = "stylesheet" />
<link href = "adminpanel.css" type = "text/css" rel = "stylesheet" />
<link href = "Login style.css" type = "text/css" rel = "stylesheet" />
<style type="text/css">
body {
  background-color: #95a5a6;
  font-color: #0000;
}
</style>
</head>
<body>
<div id = "nav" >
   <div id = "nav_wrapper"></div>
    <ul>
      <li><a href = "adminpanel.php"> <img src="image/Title.png" width="139" height="55"> </a>
      <ul>
               <li><a href = "adminpanel.php" title="Working Panel of the administrator">Admin Panel</a></li>
               <li><a href = "notbord.php" title="Published notice of administration">Notice Board</a></li> 
               <li><a href="index.php" title="Logout">LOG-OUT</a></li>          
      </ul>
      </li> 
   </ul>
  </div>
  </div>

  <div>

    <h2 align="center"> Search for a user below:</h2>
      <form action="profileprocess.php" method="post">

        <table id="searchid">
         <tr>
            <td>UseID:</td><td><input type="text" id="searchid" name="id" /></td>
         </tr>
          <tr>
            <td><input type="submit" id="viewprof" value="View Profile" /></td>
          </tr>
        </table>

      </form>

  </div>

  <div>
    <?php
        include "request.php";
    ?>
  </div>

</body>
</html>
