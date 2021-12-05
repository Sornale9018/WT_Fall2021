<?php
include('../view/db.php');
?>

<!DOCTYPE html>

<head>
<link rel="stylesheet" href="control/mycss.css">
<script src="control/myjs.js"></script> 
</head>

<body>

<div class="search">
<form name="myForm" action="details.php" method="post">
    <h3>Search By ID: </h3>
    <input type="text" id="id" name="id" placeholder="Enter ID" >
    <br><h3>Search By Name: </h3>
    <input type="text" id="pname" name="pname" placeholder="Enter Name" >
    <br><h3>Search By Salary: </h3>
    Minimum: <input type="text" id="pname" name="minimum" placeholder="Minimum" ><br>
    Maximum: <input type="text" id="pname" name="maximum" placeholder="Maximum" >
    <br> <input name="submit" type="submit" value="Search" onclick="MyAjaxF()">
</form>
<p id="demo"></p>


</div>

<br>
<br>

</body>

</html>