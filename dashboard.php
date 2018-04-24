<?php
session_start();
if(!$_SESSION['uname'])  
{  
  
    header("Location: Login_Page.php");//redirect to login page to secure the Dashboard page without login access.  
} 
?>
<?php
/*
include 'db_connection.php';
$check = "SELECT Pdf_Path from books where Book_no = '123454' limit 1";
$run=mysqli_query($dbcon,$check);
$value = mysqli_fetch_($run);
echo $value;
echo "string";
 */
?>
<html>
<head>
<title> DashBoard </title>
<link rel="stylesheet" href="issue.css">
<link rel="stylesheet" href="dashboard.css">
</head>
<body>
	<form method="post" action="dashboard.php">
	<div class="logout">	
<button name = "logout" type="submit">Logout</button>
</div>
</form>

<h1 align="center">Welcome to the online book store</h1>
<hr>
<div class="we">
	<?php echo "Welcome:",$_SESSION['uname']; ?>
</div>
<div class="entry">
	<button class = " entry" onclick="document.getElementById('id02').style.display='block'"<?php if($_SESSION['uname']!='Admin@bml.edu.in'){ echo "style='display:none'"; } ?>>Enter New Book</button>
	<button class = "entry" onclick="document.getElementById('id03').style.display='block'"<?php if($_SESSION['uname']!='Admin@bml.edu.in'){ echo "style='display:none'"; } ?>> Issue a book</button>
</div>
</div>


<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn " onclick="filterSelection('computer')"> Computer Science</button>
  <button class="btn" onclick="filterSelection('civil')"> Civil Engineering</button>
  <button class="btn" onclick="filterSelection('Mechanical')"> Mechanical Engineering</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column computer">
    <div class="content">
      <img src="database.jpg" alt="Database book" style="width:100%" height="150%">
      <h4>Database book</h4>
      <a href = "http://iips.icci.edu.iq/images/exam/databases-ramaz.pdf">Downlaod the book</a>
    </div>
  </div>
  <div class="column computer">
    <div class="content">
      <img src="aada.jpg" alt="Advanced Analysis and Design of Algorithms" style="width:100%" height="150%">
      <h4>Design and Analysis of Algorithms</h4>
      <a href = "https://www2.cs.duke.edu/courses/fall08/cps230/Book.pdf">Downlaod the book</a>
    </div>
  </div>
  <div class="column computer">
    <div class="content">
      <img src="cc.jpg" alt="Cloud Computing" style="width:100%" height="150%">
      <h4>Cloud Computing</h4>
      <a href = "https://www.tutorialspoint.com/cloud_computing/cloud_computing_tutorial.pdf">Downlaod the book</a>
    </div>
  </div>

  <div class="column civil">
    <div class="content">
      <img src="structure.jpg" alt="Structure and Analysis" style="width:100%" height="150%">
      <h4>Structure and Analysis</h4>
      <a href = "https://web.stanford.edu/class/cee214/Lectures/Flager.pdf">Downlaod the book</a>
    </div>
  </div>
  <div class="column civil">
    <div class="content">
      <img src="ce.jpg" alt="Civil Engineering" style="width:100%" height="150%">
      <h4>Civil Engineering</h4>
      <a href = "https://www.asce.org/uploadedFiles/About_Civil_Engineering/Content_Pieces/vision2025.pdf">Downlaod the book</a>
    </div>
  </div>
  <div class="column civil">
    <div class="content">
      <img src="nfa.jpg" alt="Network flow Analysis" style="width:100%" height="150%">
      <h4>Network Flow Analysis</h4>
      <a href = "https://www.ca.com/content/dam/ca/us/files/data-sheet/ca-network-flow-analysis-ds.pdf">Downlaod the book</a>
    </div>
  </div>

  <div class="column Mechanical">
    <div class="content">
      <img src="eg.jpg" alt="Engineering Graphics" style="width:100%" height="150%">
      <h4>Engineering Graphics</h4>
      <a href = "http://www.me.umn.edu/courses/me2011/handouts/engg%20graphics.pdf">Downlaod the book</a>
    </div>
  </div>
  <div class="column Mechanical">
    <div class="content">
      <img src="mv.jpg" alt="Mechanical Vibration" style="width:100%" height="150%">
      <h4>Mechanical Vibration</h4>
      <a href = "http://www.iitg.ac.in/rkbc/me101/Presentation/L01-03.pdf">Downlaod the book</a>
    </div>
  </div>
  <div class="column Mechanical">
    <div class="content">
      <img src="em.jpg" alt="Engineering Mechanics" style="width:100%" height="150%">
      <h4>Engineering Mechanics</h4>
      <a href = "http://www.iitg.ac.in/rkbc/me101/Presentation/L01-03.pdf">Downlaod the book</a>
    </div>
  </div>
<!-- END GRID -->
</div>
<script type="text/javascript">
	filterSelection("all") // Execute the function and show all columns
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1); 
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


   <div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content" action="dashboard.php" method="post">
    <div class="container1">
      <h1>Book Entry form</h1>
      <p>Please fill this form to enter the book in the database</p>
      <hr>
      <div class = "bnmae">
      <label for="bname"><b>Book Name </b></label>
      <input type="text" placeholder="Enter Book Name" name="bname" required>
</div>

<div class="bno">
	<label for="bno"><b>Book number</b></label>
      <input type="text" placeholder="Enter Book number" name="bno" required>
</div>
      
<div class = "bauthor">
	<label for="bauthor"><b>Book author </b></label>
      <input type="text" placeholder="Enter the name of the author" name="bauthor" required>
</div>

<div class = "bedition">
	<label for="bedition"><b>Book edition </b></label>
      <input type="text" placeholder="Enter the edition" name="bedition" required>
</div>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
</div>
<div class = "con">
        <button type="submit" class="signup" name="Confirm">Confirm </button>
      </div>
</div>
</form>
</div>

<div id="id03" class="modal1">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal"></span>
  <form class="modal-content1" action="dashboard.php" method="post">
    <div class="container2">
      <h1>Book Issue Form</h1>
      <p>Please fill this form to enter the person's details </p>
      <hr>
      <div class = "sname">
      <label for="snname"><b>Student Name </b></label>
      <input type="text" placeholder="Enter Student Name" name="sname" required>
</div>

<div class="sid">
	<label for="sid"><b>ID Number </b></label>
      <input type="text" placeholder="Enter Book number" name="sid" required>
</div>
      
<div class = "sbname">
	<label for="sbname"><b>Book Name </b></label>
      <input type="text" placeholder="Enter the name of the Book" name="sbname" required>
</div>

<div class = "sbno">
	<label for="sbno"><b>Book edition </b></label>
      <input type="text" placeholder="Enter Book No" name="sbno" required>
</div>

      <div class="clearfix1">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn1">Cancel</button>
</div>
<div class = "icon">
        <button type="submit" class="issueicon" name="Confirmation">Confirm </button>
      </div>

<?php
if(isset($_POST['logout']))
{

	header("Location: Login_Page.php");	
	session_destroy();


}
include 'db_connection.php';

if(isset($_POST['Confirm']))  
{  
    $book_name=$_POST['bname'];//here getting result from the post array after submitting the form.  
    $book_no=$_POST['bno'];//same  
    $book_author = $_POST['bauthor'];
    $book_edition = $_POST['bedition'];

    $check_email_query="select * from Books WHERE Book_no='$book_no'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('This book number is alloted to another book please try some other number!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into books (Name,Book_no,Author,edition) VALUES ('$book_name','$book_no','$book_author','$book_edition')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('dashboard.php','_self')</script>";

    }  
  
}
?>
<?php

include 'db_connection.php';
// Issue of the book
if(isset($_POST['Confirmation']))  
{  
    $student_name=$_POST['sname'];//here getting result from the post array after submitting the form.  
    $s_no=$_POST['sid'];//same  
    $book_n = $_POST['sbname'];
    $book_number = $_POST['sbno'];

    $check_email_query="select * from issue WHERE Book_no='$book_number'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('This book number is alloted to another please try another!')</script>";  
exit();  
    }  
//insert the user into the database.  
    $insert_user="insert into issue (Sname,ID,Book_name,Book_no) VALUES ('$student_name','$s_no','$book_n','$book_number')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('dashboard.php','_self')</script>";

    }  
  
}

?>
</body>
</html>
