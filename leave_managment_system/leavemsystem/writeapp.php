<?php
	session_start();
	$userid = $_SESSION['id'];
	$date = date("Y.m.d");
	$apptext = $_POST['apptxt'];

    $conn=mysql_connect("localhost","root","");
    $db=mysql_select_db("leave_management",$conn);

    $sql="INSERT INTO application_papers( user_id, apllication_body, date_created )  values('$userid', '$apptext','$date')";
    $result = mysql_query($sql);
    if($result){
	   			echo "Successfully inserted into database";		
			}
			else
			{
				echo "Not Successfully inserted";
			}


?>