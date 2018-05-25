
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("leave_management", $connection); // Selecting Database from Server
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }

 // Fetching variables of the form which travels in URL
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$id=$_POST['empid'];
$uname=$_POST['uname'];
$pass = $_POST['emppassword'];
$empmail=$_POST['empmail'];



//Insert Query of SQL
$query = mysql_query("insert into user_profile(firstname,lastname,userid, username,email, password) values ('$fname', '$lname', '$id', '$uname','$empmail','$pass')");

echo "<br/><br/><span>Data Inserted successfully...!!</span>";


mysql_close($connection); // Closing Connection with Server
?>




