<?php
    session_start();

	$conn=mysql_connect("localhost","root","");
    $db=mysql_select_db("leave_management",$conn);
	
	

	$userid=$_POST['empid'];
	$password=$_POST['emppass'];


		$sql="SELECT username FROM user_profile where userid='".$userid."' and password='".$password."'";

		$result=mysql_query($sql);
		$success = mysql_num_rows($result);
		//echo "1";
		if($success==1){
			$_SESSION['id']	= $userid;
			header('Location: home.php');
		}
		else
		{
			echo "invalid userid or password";
		}

	//echo $id;
	
	mysql_close($conn);

?>