
<?php
	session_start();

	$conn=mysql_connect("localhost","root","");
    $db=mysql_select_db("cuet_library",$conn);
	
if(isset($_POST['login']))
{
	$user=$_POST['adminid'];
	$pass=$_POST['adminpass'];

	$_SESSION['error'] = 0;
	if($user=="admin"&&$pass=="lms")
	{
		session_start();
		$_SESSION['pass']='poul';
		header('Location: adminpanel.php');
	}
}

?>


<!DOCTYPE html>
 <?php
  include "header.php"; 
 ?>
<body>
  <div class="box"  id="box"> Login<br>
  <form method="POST" action="">
    <input id ="Roll" type = "text" placeholder="Enter your ID" name="adminid" autofocus required />
    <input id = "Password"  type = "password" placeholder = "Enter your password" name="adminpass" autofocus required /><br>
    <input id = "login" type = "submit" name="login" value="Login"/> <br>  
    <button id = "forgot"> <a href="profile.php">Forgot Password?</a></button> <br>
   </form> 
  </div>
</body>
</html>
