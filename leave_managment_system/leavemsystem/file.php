<?php

session_start();
$id = $_SESSION['id'];
$date = date("Y.m.d");
$filename = $id."-".$date."-";
$file = $filename.$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="uploads/";

	$conn=mysql_connect("localhost","root","");	
    $db=mysql_select_db("leave_management",$conn);
	
    $sql = "Select leavetimes from user_profile where userid = '".$id."'"; 


    
	$result=mysql_query($sql);
		//echo "1";
	while($row = mysql_fetch_array($result))
	{
		$leaves = $row['leavetimes'];
	}

    if($leaves<=20)
    {
    		$sql2="INSERT INTO application_papers( user_id, apllication_body, date_created )  values('$id', '','$date')";
    		$result = mysql_query($sql2);
    		if($result){
    			move_uploaded_file($file_loc,$folder.$file);
	   			echo "Successfully inserted into database";		
			}
			else
			{
				echo "Not Successfully inserted";
			}
			
    }
    else
    {
    	echo "Sorry. Maximum  leave time exceeded.";
    }     
    

?>