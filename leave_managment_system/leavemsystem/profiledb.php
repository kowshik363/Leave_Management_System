<?php
	session_start();
	
	$conn=mysql_connect("localhost","root","");
    $db=mysql_select_db("leave_management",$conn);

    $sql = "Select leavetimes from user_profile where userid = '".$id."'"; 


?>