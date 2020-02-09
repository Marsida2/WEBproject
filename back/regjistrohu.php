<?php
require 'includes/connection.php';
require 'includes/registerHandler.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Logini</title>
	<script type="text/javascript" src="js/validimInputi.js"></script>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>


<form method="post" action="#">

<p><input type="text" name="emri" size="20" required></p>
<p><input type="text" name="mbiemri" size="20" required></p>
<p><input type="date" name="datelindja" min="1900-01-01" required></p>
<p>
	<input class="gjinia" type="radio" name="gjinia" value="m" checked>m
	<input type="radio" name="gjinia" value="f">f
</p>	
<p>Deshironi te regjistroheni si: <select name="roli">
									<option value="1">nxenes</option>
									<option value="3">mesues</option>
								</select></p>
<p><input type="email" name="email" size="20" required></p>
<p><input type="text" name="username" size="20" disabled></p>
<p><input type="password" name="fjalekalimi" size="20" required></p>
<p><input type="password" name="fjalekalimi2" size="20" required></p>

<p><input type="submit" name="submit" value="Regjistrohu"></p>

</form>

</body>
</html>