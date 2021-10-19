<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$fname=$_REQUEST["firstname"];

$lname= $_REQUEST["lastname"];

$email=$_REQUEST["email"];

$gender=$_REQUEST["gender"];

$mob= $_REQUEST["mobileno"];

$dob=$_REQUEST["dob"];

$hsc=$_REQUEST["hsc"];

$ssc=$_REQUEST["ssc"];

$pcourse=$_REQUEST["pcourse"];

$years=$_REQUEST["year"];

$year2=$_REQUEST["year2"];



$servername = "localhost";

$username = "root";

$password = "";




// Creating database

$conn = new mysqli($servername, $username, $password);

// Check connection

if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}



$dbname = "AIUB";// close MySQLi connection object



$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);

}



$sql = "INSERT INTO New_Students (firstname,lastname,email,gender,mob,dob,hsc,ss,course,years,semester)

VALUES ('$fname','$lname','$email','$gender','$mob','$dob','$hsc','$ssc','$pcourse','$years','$year2')";

$rec = $conn->query($sql);

if($rec)

{ echo "Data successfully inserted!\n";

    echo "<br>";  }

else

{ echo "Error occurred!";

    echo "<br>"; }

$conn->close();
}
?>