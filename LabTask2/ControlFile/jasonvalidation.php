<?php
 	   	 	 
			  if($_SERVER["REQUEST_METHOD"]=="POST")
			  { $Language="";
				if(isset($_POST["JAVA"]))
				  { $Language= $_POST["JAVA"];   }
				if(isset($_POST["PHP"]))
				  { $Language= $_POST["PHP"];  }
				if(isset($_POST["CPP"]))
				  { $Language= $_POST["CPP"];  }

		
		  $formdata = array(
	      'firstname'=> $_POST["firstname"],
	      'lastname'=> $_POST["lastname"],
		  'age'=>$_POST["age"],
		  'designation'=>$_POST["designation"],
		  'language'=>$Language,
		  'email'=>$_POST["email"],
		  'password'=>$_POST["password"],
		  'image'=>$_FILES["filetoupload"]["tmp_name"],

	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
      
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Mr./Ms.".$_REQUEST["lastname"]."  Your "."Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

}

?>