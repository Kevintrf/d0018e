<?php
include '../connect.php';

//DB Login https://d0018e-232709.phpmyadmin.mysql.binero.se/

?>

<html>
<head>
<title>WebShop</title>
</head>
<body>

<form action="submitRegistration.php" method="post">
	<h1>User registration</h1>
	Username: <input type="text" name="username"><br>
	Password: <input type="text" name="password"><br>
	National Identification Number: <input type="text" name="nin"><br>
	Phone number: <input type="text" name="phone"><br>
	<input type="submit">
</form>

</body>
</html>
