<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "AIUB";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function CheckUser($conn,$table,$id)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE ID='". $id."'");
 return $result;
 }


 function CheckIDN($conn,$table,$id,$Ename)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE ID='". $id."'Name='".$Ename."'");
 return $result;
 }


 function CheckINS($conn,$table,$id,$Ename,$minimum,$maximum)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE Salary >'". $minimum."' AND Salary <'".$maximum."'");
 return $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}


?>