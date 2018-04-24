

<head>
  <link rel="stylesheet" href="sign_up.css">
</head>
</form>
   <!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content" action="registration.php" method="post">
    <div class="container1">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <div class = "mail">
      <label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="email" required>
</div>
<div class="sign_pass">
	<label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
</div>
      <!--
<div class = "rpass">
	<label for="psw-repeat"><b>Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
</div>
-->

      <p></p>
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
</div>
<div class = "sign_sub">
        <button type="submit" class="signup" name="register">Sign Up</button>
      </div>
      <?php

include 'db_connection.php';

if(isset($_POST['register']))  
{  
  echo "hey";
    $user_name=$_POST['email'];//here getting result from the post array after submitting the form.  
    $user_pass=$_POST['psw'];//same  
        
    $check_email_query="select * from login WHERE Username='$user_name'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into login (Username,Password) VALUES ('$user_name','$user_pass')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('dashboard.php','_self')</script>";  
    }  
  
}
  ?>
    </div>
  </form>
  

</div>