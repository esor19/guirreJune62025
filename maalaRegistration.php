<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>

    <style>
        body {background: goldenrod;}
        h1 {color:blue; font-family:tahoma;}
        label {color:green; font-family:verdana; font-size: 25px;}
        #btn1 {padding:10px; border-radius: 5px; color:white; background: skyblue; font-size: 15px; width:130px;}
        #maalabtn2 {padding:10px; border-radius: 5px; color:white; background: Green; font-size: 15px; width:130px;}
    </style>

    <script>
     function clrfrm()
    {
    document.querySelector('form').reset();
    }
    </script>

</head>
<body>
<h1> REGISTRATION FORM </h1>
<form action="maalaInsert.php" method="post">
    <table>
        <h2>
        <tr>
            <td><label for="maalaFullName"> Full Name</label></td>
            <td><input type="text" name="maalaFirstName" id="maalaFirstName" require value=""> <br>
                <label>First Name</label> 
            </td>

            <td><input type="text" name="maalaLastName" id="maalaLastName" require value=""><br>
                <label>Last Name</label>
            </td>
        </tr>

        <tr>
            <td><label for="maalaEmail"> Email</label></td>
            <td><input type="mail" name="maalaMail" id="maalaMail" require value=""></td>
        </tr>

        <tr>
            <td><label for="maalaUsername">Username</label></td>
            <td><input type="text" name="maalaUsername" id="maalaUsername" require value=""></td>
        </tr>

        <tr>
            <td><label for="maalaPassword">Password</label></td>
            <td><input type="password" name="maalaPassword" id="maalaPassword" require value=""></td>
        </tr>

        <tr>
            <td><label for="maalaConfirmedPassword">Confirmed Password</label></td>
            <td><input type="password" name="maalaConfirmedPassword" id="maalaConfirmedPassword" require value=""></td>
        </tr>

        <tr>
            <td><label for="maalaPhoneNumber"> Phone Number</label></td>
            <td><input type="number" name="maalaNumber" id="maalaNumber" require value=""></td>
        </tr>

        <tr>
            <td><label for="maalaAddress">Address</label></td>
            <td><input type="text" name="maalaStreetAddress" id="maalaStreetAddress" require value=""><br>
            <label>Street Address</label>
            </td>
           <td><input type="text" name="maalaBarangay" id="maalaBarangay" require value=""><br>
            <label>Barangay</label>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" name="maalaCity" id="maalaCity" require value=""><br>
            <label>City</label>
            </td>
            <td><input type="text" name="maalaStateProvince" id="maalaStateProvince" require value=""><br>
            <label>State/Province</label>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="text" name="maalaZipCode" id="maalaZipCode" require value=""><br>
            <label>Zip Code</label>
            </td>
            <td><input type="text" name="maalaCountry" id="maalaCountry" require value=""><br>
            <label>Country</label>
            </td>
        </tr>
        </tr>

        <tr>
		    <td> 
                <<button type="submit" name="maalaSubmit" class="maalaSubmit" id="btn1">Register</button>
                <button type="button" id="maalabtn2" onclick="clrfrm()">Clear</button>
            </td>
	    </tr>
</h2>
    </table>
</form>
</body>
</html>