<?php
	session_start();
	$userid = $_POST['userid'];

    $conn=mysql_connect("localhost","root","");
    $db=mysql_select_db("leave_management",$conn);

    $sql="UPDATE user_profile SET leavetimes=leavetimes+1 where userid='".$userid."'";

    $result=mysql_query($sql);
	

	if($result)
	{
		echo "Leave accepted";
	}


?>