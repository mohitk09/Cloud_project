<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login Page 
	</title>

<link rel="stylesheet" href="front.css">
</head>
<body>
<form action="Login_Page.php" method="post">
  <div class="imgcontainer">
    <img src="download.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname" ><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
</div>
<div class="pass">
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
</div>
<div class = "sub">
    <button type="submit" name = "Login">Login</button>
    </div>

<?php

include 'db_connection.php';
if(isset($_POST['Login'])&&!empty($_POST['uname']))       
{  

    $user_email=$_POST['uname'];  
    $user_pass=$_POST['psw'];  
  
    $check_user="select * from login WHERE Username='$user_email'AND Password='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user); 

    
    if(mysqli_num_rows($run))  
    {  
        $_SESSION['uname']=$user_email;//here session is used and value of $user_email store in $_SESSION.    
        echo "<script>window.open('dashboard.php','_self')</script>";   
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}

?>
<?php
require 'registration.php';
?>

    <div class = "sign">
    
      <button onclick="document.getElementById('id01').style.display='block'" > Sign Up</button>
    </div>

</body>
</html>
