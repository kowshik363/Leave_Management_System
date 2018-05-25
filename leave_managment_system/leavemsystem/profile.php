
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
  <div>
      <table id="protab" border="2" align="center" >
                  <thead>
                    <tr>
                      <th>First Name</th>
                      <th>First Name</th>
                      <th>User ID</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Password</th>

                    </tr>
                  </thead>
                      <tbody>
                      <?php
                        $dbhost = "localhost";
                                $dbuser = "root";
                                $dbpass = "";
                                $dbname = "leave_management";
                                mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
                                mysql_select_db($dbname) or die('database selection problem');
                              $sql="SELECT * FROM user_profile";
                          $result_set=mysql_query($sql);
                          $user_id=$_SESSION['id'];
                      while($row=mysql_fetch_array($result_set)){
                      if($row['userid']==$user_id)
                      {

                      
                        ?>

                                        <tr >
                                            <td><?php echo $row['firstname'] ?></td>
                                            <td><?php echo $row['lastname'] ?></td>
                                            <td><?php echo $row['userid'] ?></td>
                                            <td><?php echo $row['username'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['password'] ?></td>
                       
                                        </tr>
                                       <?php
                                       }

                    }
                     ?>
                                    </tbody>
      </table>
  </div>
</body>
</html>
