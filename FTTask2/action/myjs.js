function validateForm() {
    var fname = document.getElementById("firstname").value;
    var lname = document.getElementById("lasttname").value;
    var lag = document.getElementById("age").value;
    var desig = document.getElementById("designation").value;
    var v1 = document.getElementById("JAVA").value;
    var v2 = document.getElementById("PHP").value;
    var v3 = document.getElementById("CPP").value;
    var em = document.getElementById("email").value;
    var pas = document.getElementById("password").value;


    if (fname == "" || lname == "" || lag== "" ||desig=="" || em == "" || pas=="") 
    {
    document.getElementById("message").innerHTML="Please Enter the Missing Value";
    return false;
    }

    if(v1==""&& v2=="" && v3=="")
    {
    document.getElementById("message2").innerHTML="Please Select the Language Preference";
    return false;
    }

    return true;

    }