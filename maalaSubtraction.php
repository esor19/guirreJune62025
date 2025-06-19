<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Subtraction</title>
<style>
		body {background: goldenrod;}
		h1 {color: blue;}
		h1 {font-family: TAHOMA;}
		h1 {text-align: Left;}
		h1 {font-size: 40px;}
		h2 {color: green;}
		h2 {font-family: Verdana;}
		h2 {text-align: Left;}
		h2 {font-size: 25px;}
		p {color: pink;}
		p {font-family: Helvetica;}
		p {text-align: left;}
		p {font-size: 25px;}
		button {padding: 10px;}
		button {border-radius: 5px;}
		button {color: white;}
		button {background:green;}
		button {font-size:20px;}
		#maala_FirstNumber, #maala_SecondNumber, #maala_Answer {font-size:20px;}
	</style>
</head>
<body>
<h1> Subtraction</h1>
<form method="POST">
	<h2>
	<table>
	<tr>
		<td> <label for="maalaFirstNumber"> First Number </label> </td>
		<td> <input type="number" id="maala_FirstNumber" name="maala_FirstNumber" placeholder="First Number" required=""></td>
	</tr>

	<tr>
		<td> <label for="maalaSecondNumber"> Second Number </label> </td>
		<td> <input type="number" id="maala_SecondNumber" name="maala_SecondNumber" placeholder="Second Number" required=""></td>
	</tr>



	<tr>
		<td> <button type="submit" name="compute" class="maalaCompute"> Compute </button> </td>
		<td> </td>
	</tr>

	<tr>
		<td> The Difference of two number is: </td>
		<td> <input type="text" id="maala_Answer" value="<?php 
	include_once("maalaConnection.php");

	if(isset($_POST['compute'])){
			$maala_FirstNumber = $_POST ['maala_FirstNumber'];
			$maala_SecondNumber = $_POST ['maala_SecondNumber'];
			$maala_Difference = $maala_FirstNumber - $maala_SecondNumber; echo $maala_Difference;
	
			$compute = mysqli_query ($maala_Connection,"INSERT INTO maalaSubtraction(maala_FirstNumber,
			maala_SecondNumber, maala_Difference) VALUES ('$maala_FirstNumber', '$maala_SecondNumber', 
			'$maala_Difference')");
	}
	?>">
	</td>
	</tr>

	</table>
	</h2>
</form>
</body>
</html>