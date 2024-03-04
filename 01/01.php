<html>
<head>
<title>Student Registration Form</title>
<script type = "text/javascript">
    function validate()
    {
        if(document.myForm.Name.value == "")
        {
            alert("Please Provide Your Name");
            document.myForm.Name.focus();
            return false;
        }
	 if((document.myForm.Mobileno.value == "")||(document.myForm.Mobileno.value.length != 10))
        {
            alert("Please Provide Valid Mobile Number");
            document.myForm.Mobileno.focus();
            return false;
        }
        if(document.myForm.Email.value == "")
        {
            alert("Please Provide Your Email ID");
            document.myForm.Email.focus();
            return false;
        }
        if ((document.myForm.Zip.value == "")||(document.myForm.Zip.value.length != 6))
        {
            alert("Please Provide a valid zip code");
            document.myForm.Zip.focus();
            return false;
        }
        
    }
    function validateEmail()
    {
        var emailID = document.myForm.Email.value;
        atpos = emailID.indexOf("@");
        dotpos = emailID.lastIndexOf(".");
        if(atpos < 1 || (dotpos - atpos < 4))
        {
            alert("Please Enter Correct Email ID");
            document.myForm.Email.focus();
            return false;
        }
        return true;
    }
</script>
</head>
<body bgcolor="blue" text="white">
<h1 style="background-color:Yellow";>Student Registration Form</h1>
    <form  name = "myForm" onsubmit = "return(validate());" >
        <table cellspacing = "2" cellpadding = "2" border = "1">
            <tr>
                <td>Name</td>
                <td><input type = "text" name = "Name" maxlength="15" /></td>
            </tr>
	    <tr>
                <td>Mobile No.</td>
                <td><input type = "number" name = "Mobileno" maxlength="10"  /></td>
            </tr>
            <tr>
                <td>Email ID</td> 
                <td><input type = "text" name = "Email" onchange = "validateEmail();"/></td>
            </tr>
            <tr>
                <td>Zip Code</td>
                <td><input type = "number" name = "Zip" /></td>
            </tr>
             <tr>
                <td>Enter Password</td>
                <td><input type = "password" value = "password" /></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type = "radio" name = "gender"/>Male</td>
                <td><input type = "radio" name = "gender"/>Female</td>
            </tr>
	    <tr><td>Select your Location</tr></td>
	    <tr><td>
	    <select>
        	<option selected disabled>--Select City--</option>
        	<option>BENGALURU</option>
        	<option>MYSORE</option>
        	<option>BELLARY</option>
        	<option>HOSPET</option>
	   </select>
	   <tr><td>Which Vehicle you Own </tr></td>
		<tr><td><label> <input type="checkbox"> Bike</label> </tr></td>
 		<tr><td><label> <input type="checkbox"> Car</label> </tr></td>
	    <tr><td><label for="resume">Resume:</label> </tr></td>
   	    <tr><td><input type="file" id="resume"> </tr></td>
            <tr>
                <td colspan = "2" align = "center"><input type = "submit" value = "Submit" /></td>
            </tr>
        </table>
    </form>
</body>
</html>

