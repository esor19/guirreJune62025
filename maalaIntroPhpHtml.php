<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Introduction with Form</title>

<style>
    body
    {
        background-color:#FFEB3B;
        font-family: Arial, sans-serif;
        padding: 40px;
    }

    h2
    {
        color: #4A148C;
    }

    label
    {
        font-weight: bold;
        color: #333;
    }

    input[type="text"]
    {
        padding: 5px;
        width: 250px;
        font-size: 16px;
    }

    input[type="submit"]
    {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 8px 16px;
        font-size: 16px;
        cursor: pointer;
    }

    h3
    {
        color: #1A237E;
        margin-top: 20px;
    }
</style>

</head>
<body>
    <h2> Welcome to my PHP Introduction </h2>
    <form method="post" action="">
        <label for="name"> Enter your Name: </label><br>
        <input type="text" name="name" id="name" required><br><br>
        <input type="submit" value="submit">
    </form>

<?php
    //check of the form has been submitted

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        //get the value from the input field
        $name = htmlspecialchars($_POST["name"]);

        //display a personalized text
        echo "<h3> Hello, <span style='color:blue;'> $name </span>! Welcome to PHP Programming</h3>";
    }
?>
</body>
</html>