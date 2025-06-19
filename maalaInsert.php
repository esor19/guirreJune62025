<html>
<head>
    <title></title>
    <style>
        body {background: goldenrod;}
        h1 {color:blue; font-family:tahoma;}
        h2 {color:green; font-family:verdana; font-size: 25px;}
        #btn1 {padding:10px; border-radius: 5px; color:white; background: skyblue; font-size: 15px; width:130px;}
        #maalabtn2 {padding:10px; border-radius: 5px; color:white; background: Green; font-size: 15px; width:130px;}
    </style>
<head>
<body>
 <?php
    // create connection
    $jaymart = mysqli_connect("localhost","root","","maala_Calculator");

    // check connection
    if($jaymart==false)
        {
            die("ERROR: Could not Connect." .mysqli_connect_error());
        }


    // taking values from the from data(input)
        $maalaFirstName = $_REQUEST['maalaFirstName'];
        $maalaLastName = $_REQUEST['maalaLastName'];
        $maalaMail = $_REQUEST['maalaMail'];
        $maalaUsername = $_REQUEST['maalaUsername'];
        $maalaPassword = $_REQUEST['maalaPassword'];
        $maalaConfirmedPassword = $_REQUEST['maalaConfirmedPassword'];
        $maalaNumber = $_REQUEST['maalaNumber'];
        $maalaStreetAddress = $_REQUEST['maalaStreetAddress'];
        $maalaBarangay = $_REQUEST['maalaBarangay'];
        $maalaCity = $_REQUEST['maalaCity'];
        $maalaStateProvince = $_REQUEST['maalaStateProvince'];
        $maalaZipCode = $_REQUEST['maalaZipCode'];
        $maalaCountry = $_REQUEST['maalaCountry'];


    // insert the data into table
    // sql name = "INSERT INTO tablename VALUES" ('input id','input another id')";
    $maala = "INSERT INTO maala_Registration VALUES ('$maalaFirstName', '$maalaLastName','$maalaMail','$maalaUsername',
    '$maalaPassword', '$maalaConfirmedPassword','$maalaNumber','$maalaStreetAddress','$maalaBarangay','$maalaCity',
    '$maalaStateProvince','$maalaZipCode','$maalaCountry')";


    // check if the query is successful
        if (mysqli_query($jaymart,$maala))
        {
            echo "<h1> Registration Successfully!</h1>";
            echo nl2br ("$maalaFirstName \n $maalaLastName \n $maalaMail \n $maalaUsername \n $maalaPassword
            \n $maalaConfirmedPassword \n $maalaNumber \n $maalaStreetAddress \n $maalaBarangay \n $maalaCity
            \n $maalaStateProvince \n $maalaZipCode \n $maalaCountry");
        }
        else
        {
            echo "ERROR Sorry $maala." .mysqli_error($jaymart);
        }

    //close connection
        mysqli_close($jaymart);
    ?>
</body>
<html>