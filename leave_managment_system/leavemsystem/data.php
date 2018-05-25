
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("leave_management", $connection); // Selecting Database from Server
if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }









 // Fetching variables of the form which travels in URL
$bivag = $_POST['bivag'];
$applicant_name = $_POST['applicant_name'];
$applicant_occu=$_POST['applicant_occu'];
$Start_day=$_POST['Start_day'];
$end_day=$_POST['end_day'];
$no_of_day=$_POST['no_of_day'];
$addition_day=$_POST['addition_day'];
$leave_reason = $_POST['leave_reason'];
$address=$_POST['address'];

$first=$_POST['first'];
$second=$_POST['second'];
$third=$_POST['third'];
$fourth=$_POST['fourth'];
$fifth=$_POST['fifth'];
$sixth=$_POST['sixth'];

$date=$_POST['date'];
$signature=$_POST['signature'];



//Insert Query of SQL
$query = mysql_query("insert into application(dept,Applicant_name,Applicant_occupation,Starting_day,Ending_day,No_of_day,Additional_day,Reason,Address,First,Second,Third,Fourth,Fifth,Sixth,Date,Signature) values ('$bivag', '$applicant_name', '$applicant_occu', '$Start_day','$end_day','$no_of_day', '$addition_day', '$leave_reason', '$address', '$first', '$second', '$third', '$fourth', '$fifth', '$sixth', '$date', '$signature')");
if($query){

	echo "<br/><br/><span>Data Inserted successfully...!!</span>";
	header('location:home.php');
}
else{ 
	echo "<br/><br/><span>Data not Inserted ...!!</span>";
	header('location:home.php');
}



mysql_close($connection); // Closing Connection with Server
?>




