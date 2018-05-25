<?php
	session_start();

	$conn=mysql_connect("localhost","root","");
    $db=mysql_select_db("cuet_library",$conn);
	
	$user=$_POST['adminid'];
	$pass=$_POST['adminpass'];

	$_SESSION['error'] = 0;
	if($user=="admin"&&$pass=="lms")
	{
		session_start();
		$_SESSION['pass']='poul';
		header('Location: adminpanel.php');
	}

?>