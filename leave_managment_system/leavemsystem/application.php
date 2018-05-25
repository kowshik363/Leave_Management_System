
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("leave_management", $connection); // Selecting Database from Server
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }

 // Fetching variables of the form which travels in URL
$apptext = $_POST['apptxt'];



//Insert Query of SQL
$query = mysql_query("insert into admin_panel(application_paper) values ('$apptext')");

echo "<br/><br/><span>Data Inserted successfully...!!</span>";


mysql_close($connection); // Closing Connection with Server
?>




