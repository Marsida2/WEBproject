 <?php
require 'includes/connection.php';
require 'includes/registerHandler.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Logini</title>
	<link rel="stylesheet" type="text/css" href="css/regjistrimi.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/font-faces.css">
	<script type="text/javascript" src="js/validimInputi.js"></script>


</head>
<body>

<img id="gif" src="foto/kamp2.jpg">
<div class="centerDiv">
		<div class="titullDiv">
			<h1 class="titull"><a href="index.php">TALENTI<em>im</em></a></h1>
		</div>
		
	<form action="#" method="post">

			<div id="second" style="display: block;">
				<div class="labelat">
					<p><label for="emri">Emri </label></p>
					<p><label for="mbiemri">Mbiemri </label></p>
					<p><label for="datelindja">Datëlindja </label></p>
					<p><label>Gjinia</br></label></p>
					<p><label for="email">Email </label></p>
					<p><label for="fjalekalimi">Fjalëkalimi </label></p>
					<p><label for="fjalekalimi2">Konfirmo fjalëkalimin</br></br> </label></p>
				</div>

				<div class="inputet">
					<p><input type="text" name="emri" size="20" ></p>
					<p><input type="text" name="mbiemri" size="20" ></p>
					<p><input type="date" name="datelindja" min="1950-01-01" style="width:12em"></p>
					<p>
						<input class="gjinia" type="radio" name="gjinia" value="m" checked>m
						<input type="radio" name="gjinia" value="f">f
					</p>	
					
					<p><input type="email" name="email" size="20" ></p>
					<p><input type="password" name="fjalekalimi" size="20" ></p>
					<p><input type="password" name="fjalekalimi2" size="20" ></p>
				</div>


				<div class="fundDiv">
					<p>Dëshironi të regjistroheni si: <select name="roli">
														<option value="1" selected>nxënës</option>
														<option value="3">mësues</option>
													</select></p>
					<p>Kursi i dëshiruar: <select name="grupi">
						<?php
							$query_lexo="select * from grupet order by id_grupi";
							$result=mysqli_query($connection, $query_lexo);
							while($row=mysqli_fetch_array($result)){
							echo "<option value='".$row['id_grupi']."' ";
							if(isset($_SESSION['id_grupi_zgjedhur']) && $_SESSION['id_grupi_zgjedhur']== $row['id_grupi']) echo "selected";
							echo ">".$row['emer_grupi']."</option>";}
						?></select></p>
					<input type="button" id="vazhdo" name="vazhdo" value="Vazhdo"><br>
				</div>	
		</div>





		<div id="third">
			<div class="labelat">
				<p><label for="username">Username</label></p>
				<p>Card Number</p>
				<p>Security Code</p>
			</div>

			<div class="inputet">
				<p></p>
				<p><input type="text" name="username" size="20" disabled value="
					<?php 
						if(isset($_POST['emri'])) echo "vendosur"; else echo "gabim";
					?>"></p>
				<p><input type="text" placeholder="1111-2222-3333-4444" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" required></p>
				<p><input type="password" size="5"></p> 
			</div>
			<p><input type="submit" style="margin-left: 130px;" name="submit" value="Regjistrohu"></p>
		</div>
	</form>
</div>


</body>
</html>
