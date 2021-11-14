
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>


<div class="header">
  <h1>ABC Management System</h1>
  <h4> We Create Future</h4>
</div>
<div class="sticky">
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About US</a>
  <a href="#">Shop</a>

</div>
</div>


<div class="middlecolumn ">
    
<h1 class="register">Registration form </h1>
<hr>



<form action="" method="post" enctype="multipart/form-data">
<div class="registrationBox">
    <p class="firstname">
First name: <input type="text" name="fname"> </p>
<br>
<p class="firstname">
Last name: <input type="text" name="fname"> </p>
<br>
<p class="firstname">
Age: <input type="text" name="fname"> </p>
<br>

<p class="firstname"> Designation:
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Junior Programmer</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Senior programmer</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Project Lead</label>
  <br>
</p>



<br>
<p class="firstname">
Preferred Language
<br>

<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
 JAVA<br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
PHP<br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
  C++<br>
<br>
</p>

<br>
<p class="firstname">
Email: <input type="text" name="email"> 
</p>
<br>

<br>
<p class="firstname">
Password: <input type="password" name="email"> 
</p>
<br>



<br>



<br>
<p class="firstname">
Please Choose a file
<input type="file" name="filetoupload">
</p>
<br>
<br>
</div>
<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">

</form>

 </div>
  



</body>
</html>
