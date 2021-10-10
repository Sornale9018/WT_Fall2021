<?php include "ControlFile/validationcode.php"; ?>

<html>

<body>

<h1><b>Registration Form</b></h1>
<form action="ControlFile/jasonvalidation.php" method="POST" enctype="multipart/form-data">
First Name: <input type="text" name="firstname"><?php  echo $fname;?><br>
Last Name: <input type="text" name="lastname"><?php  echo $lname;?><br>
Age: <input type="number" name="age"><?php  echo $age;?><br>

Designation: <input type="radio" id="junior" name="designation" value="Junior Programmer">
  <label for="junior">Junior Programmer</label>
  <input type="radio" id="senior" name="designation" value="Senior Programmer">
  <label for="senior">Senior Programmer</label>
  <input type="radio" id="projectlead" name="designation" value="Project Lead">
  <label for="projectlead">Project Lead</label>
  <br>
 
Preferred Language
<input type="checkbox" id="JAVA" name="JAVA" value="JAVA">JAVA
<input type="checkbox" id="PHP" name="PHP" value="PHP">PHP
<input type="checkbox" id="CPP" name="CPP" value="C++">C++
<?php echo $language; ?>

<?php echo $c1;?>

<?php echo $c2;?>

<?php echo $c3;?>
<br>


E-mail:<input type="text" name="email"><?php  echo $email;?><br>
Password:<input type="password" name="password" minlength="6"><br><br>

<!-- akhane ai input ta sudhu file upload r box r jonno-->
<input type="file" name="filetoupload">

<br><br><br>
<input type="submit" value="Submit">

</body>


</html>



