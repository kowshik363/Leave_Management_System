
<!DOCTYPE html>
<head>
<title>Leave Management System</title>
<link href = "style.css" type = "text/css" rel = "stylesheet" />
<link href = "Login style.css" type = "text/css" rel = "stylesheet" />
<link href = "index.css" type = "text/css" rel = "stylesheet" />
<style type="text/css">
body {
  background-color: #666;
  background-image: url(image/login.jpg);
}
</style>
</head>
<body>
<div id = "nav" >
   <div id = "nav_wrapper"></div>
    <ul>
      <li>
          Leave Management System
      </li>
   </ul>
  </div>
  </div>
  <div class="box"  id="box"> Login<br>
    <input id ="Roll" type = "text" placeholder = "Enter your ID" autofocus required />
    <input id = "Password"  type = "password" placeholder = "Enter your password" autofocus required /><br>
    <input id = "login" type = "submit" value="LogIn"/> <br>  
    <span id = "forgot"> <a href="profile.php">Forgot Password?</a></span> <br> 
    <Button id="register" class="pull-right"><a href="signup.php">Register</a></button>
  </div>
</body>
</html>
