<?php
    session_start();

  $conn=mysql_connect("localhost","root","");
    $db=mysql_select_db("leave_management",$conn);
  
  
if(isset($_POST['submit'])){


  $userid=$_POST['empid'];
  $password=$_POST['emppass'];


    $sql="SELECT username FROM user_profile where userid='".$userid."' and password='".$password."'";

    $result=mysql_query($sql);
    $success = mysql_num_rows($result);
    //echo "1";
    if($success==1){
      session_start();
      $_SESSION['sourov']='sourov';
      $_SESSION['id'] = $userid;
      header('Location: home.php');
    }
    else
    {
      echo "invalid userid or password";
    }



}

  //echo $id;
  
  mysql_close($conn);

?>


<!DOCTYPE html>

<?php
  include "header.php";
?>

<body>
  <div class="box"  id="box"> Login<br>
  <form method="POST" action="">
    <input id ="Roll" type = "text" name="empid" placeholder = "Enter your ID" autofocus required /><br>
    <input id = "Password" name="emppass" type = "password" placeholder = "Enter your password" autofocus required /><br>
    <input id = "login" type = "submit" name="submit"value="Login"/> <br>  
    <span id = "forgot"> <a href="profile.php">Forgot Password?</a></span> <br> 
    <Button id="register" class="pull-right"><a href="signup.php">Register</a></button>
   </form>
  </div>
</body>
</html>
