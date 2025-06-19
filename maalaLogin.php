<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>

    <style>
        body {background: goldenrod;}
        h1 {color:blue;}
        label {color:green; font-family: verdana; font-size: 20px;}
        #maalabtn1 {padding:10px; border-radius: 5px; color:white; background: skyblue; font-size: 15px; width:100px;}
        #maalabtn2 {padding:10px; border-radius: 5px; color:white; background: Green; font-size: 15px; width:100px;}
    </style>

    <script>
    function clearForm() {
    document.getElementById("loginForm").reset();
    }
    </script>

</head>
<body>
<h1> LOGIN FORM </h1>
<form id="loginForm">  
  <table>
    <tr>
      <td><label for="maalaUserName">Username</label></td>
      <td><input type="text" name="maalaUserName" id="maalaUserName" required></td>
    </tr>
    <tr>
      <td><label for="maalaPassword">Password</label></td>
      <td><input type="password" name="maalaPassword" id="maalaPassword" required></td>
    </tr>
    <tr>
      <td>
        <button type="submit" name="maalaLogin" id="maalabtn1">Login</button>
        <button type="button" name="maalaClear" id="maalabtn2" onclick="clearForm()">Clear</button>
      </td>
    </tr>
  </table>
</form>

</body>
</html>