<?php

if (isset($_GET['Regjistrohu'])) {
	$_SESSION['id_grupi_zgjedhur']=$_GET['id_grupi_zgjedhur'];
	header("Location: regjistrohu.php");	
}

?>