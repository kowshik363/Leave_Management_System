
<!DOCTYPE html>
 
 <?php
  include "header.php"; 
 ?>

<body>
  <div class="signup"  id="signup"> Sign Up<br>
  <form method="POST" action="signup_emp.php">
    <input id ="FirstName" type = "text" name="fname" placeholder = "Enter your first name" autofocus required/><br>
    <input id = "LastName"  type = "text" name="lname" placeholder = "Enter your last name" autofocus required/><br>
    <input id = "IDno"  type = "text" name="empid" placeholder = "Enter your ID" autofocus required/><br>
    <input id = "UserName"  type = "text" name="uname" placeholder = "Enter your username" autofocus required/><br>
    <input id = "Email"  type = "email" name="empmail" placeholder = "Enter your mail" autofocus required/><br>
    <input id = "Pass"  type = "password" name="emppassword" placeholder = "Enter your password" autofocus required/><br>
    <input id = "ConfirmPassword"  type = "password" placeholder = "Confirm your password" autofocus required/><br>
    <input id="signingup" type = "submit" value="Sign Up" value="Insert"/>   
  </form> 
  </div>
</body>

</html>
