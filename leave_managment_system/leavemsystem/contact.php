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
<link href = "contact.css" type = "text/css" rel = "stylesheet" />
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

<p id="tablename"><br>  About the developers: </p>
<table id="table" border="2">


<tr>
<th>ID No</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
</tr>

<tr>
<th>1104082</th>
<th>Sourav Paul</th>
<th>01749797777</th>
<th>souravpaulcse@gmail.com</th>
</tr>

<tr>
<th>1104085</th>
<th>Amit Kumar Roy</th>
<th> 01932252164 </th>
<th> amitcsecuet11@gmail.com </th>
</tr>

<tr>
<th>ID No</th>
<th>Name</th>
<th>Mobile</th>
<th>Email</th>
</tr>

</table>

  </div>

  <div id="gmap">

    <p id="gtext">Locate Us at Google Map</p>
    
    <embed width="420" height="315"
  src="https://www.google.com.bd/maps/@22.4598498,91.9762258,15z?hl=en">
    
    </div>

</body>
</html>
