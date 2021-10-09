<?php

    $firstname="";
    $lastname="";
    $age="";
    $designation="";
    $language="";
    $v1=$v2=$v3="";
    $email="";
      
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $fname=$_REQUEST["firstname"];
    $lastname=$_REQUEST["lasttname"];
    $ag=$_REQUEST["age"];
    $eml=$_REQUEST["email"];

    if(empty($fname))
    {
        echo"Please enter First Name";
    }
    else{$firstname=$_REQUEST["firstname"];}


    if(empty($lastname))
    {
        echo"Please enter Last Name";
    }
    else{$lastname=$_REQUEST["lasttname"];}


    if(empty($ag))
    {
        echo"Please enter Your Age";
    }
    else{$age=$_REQUEST["age"];}



    if(isset($_REQUEST["designation"]))
    {
    $designation= $_REQUEST["designation"];
    }
    else{
    $designation= "please select at least one radio";
    }






    if(!isset($_REQUEST["JAVA"])&&!isset($_REQUEST["PHP"])&&!isset($_REQUEST["CPP"]))
    {
    $language = "please select at least one checkbox";
     
     }
   else{
   if(isset($_REQUEST["JAVA"]))
     {
       $v1= $_REQUEST["JAVA"];
     }
   if(isset($_REQUEST["PHP"]))
     { 
       $v2= $_REQUEST["PHP"];
     }
   if(isset($_REQUEST["CPP"]))
     {
    $v3= $_REQUEST["CPP"];
    }
    }


  if(empty($eml))
  {
      echo"Please enter email";
  }
  else {$email=$_REQUEST["email"];}


}
?>
