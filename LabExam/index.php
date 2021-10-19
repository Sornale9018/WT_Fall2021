<?php include "dbcode/db.php"; ?>

<html>

<body>

<h1><b>Registration Form</b></h1>
<form action="" method="POST" enctype="multipart/form-data">
First Name: <input type="text" name="firstname"><br>
Last Name: <input type="text" name="lastname"><br>
E-mail:<input type="text" name="email"><br>
Mobile no: <input type="INT" name="mobileno"><br>


Gender: <input type="radio" id="Male" name="gender" value="Male">
  <label for="gender">Male</label>
  <input type="radio" id="Female" name="gender" value="Female">
  <label for="Female">Female</label>
  
  <br>
 



  <label for="dob">Date of Birth:</label>
<input type="date" name="dob" required><br>
<br>
HSC Result: <input type="text" name="hsc"><br>
SSC Result: <input type="text" name="ssc"><br>

<label for="pcourse">Select a course you want to enroll:</label>
<select name="pcourse" id="pcourse">
<option value="cse" selected>CSE</option>
  <option value="english">English</option>
  <option value="bba">BBA</option>
  <option value="eee">EEE</option>
  <option value="csse">CSSE</option>
</select>
<br>



<label for="year">Choose a year enrolling year:</label>
<select name="year" id="Year">
<option value="2021" selected>2021</option>
  <option value="2022">2022</option>
  <option value="2023">2023</option>
  <option value="2024">2025</option>
  <option value="2025">2025</option>
</select>
<br>


<label for="year2">Choose a year Enrolling year:</label>
<select name="year2" id="year2">
<option value="Summar" selected>Summar</option>
  <option value="Fall">Fall</option>
  <option value="spring">Spring</option>
</select>
<br>

<br><br><br>
<input type="submit" value="Insert Data">

</body>


</html>



