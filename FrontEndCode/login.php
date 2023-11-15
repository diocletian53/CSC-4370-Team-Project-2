<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Jeopardy!</title>
<link href="style2.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1> Login now </h1>
 <div id="home-login"> 
   <form action="loginhome.php" method="get">       
        <input type="text" name="username" maxlength="40" size="25" placeholder="Username" required>
        <br>
        
        <input type="password" name="password" maxlength="15" size="25" placeholder="Password"  required>
        <br>
   
        <button id="back-button">Back</button>
        <input type="submit" value="Login">
      </form>
  </div>
  
  
<div class="register-form">
  <span id="user-icon"></span>
      <form action="register-submit.php" method="get">
        
        <input type="text" name="username" maxlength="30" size="25" placeholder="Your Username" title="start with a lowercase character, end with a number"required>
        <br>
        
        <input type="password" name="password" maxlength="15" size="25" placeholder="Your Password (Range: 6-15)" title="make it unique" required>
        <br>
  
        <button id="back-button">Back</button>
        <input type="submit" value="Register">
      </form>
</div>


  </body>
</html>