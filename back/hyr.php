<?php
require 'includes/connection.php';
require 'includes/loginHandler.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hyr ne portal</title>
</head>
<body>

	<form action="#" method="post">

			<p><input type="text" name="hyr_username" size="20" value="<?php if(isset($_SESSION['hyr_username'])) echo $_SESSION['hyr_username']; ?>" required></p>
			<p><input type="password" name="hyr_fjalekalimi" size="20" required></p>
			<p><input type="submit" name="hyr" value="Hyr"></p>
			<?php if($gabimLogin==true) echo "<em>Username ose Fjalekalim i pasakte.</em>"; ?>

	</form>

</body>
</html>