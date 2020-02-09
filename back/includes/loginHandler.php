<?php

	$gabimLogin=false;//do tregoje nese ka gabim ne te dhenat e loginit ne html

	if (isset($_POST['hyr'])) {

		$username=$_POST['hyr_username'];
		$_SESSION['hyr_username']=$username;//ruaj perdoruesin ne session qe t rishkruaj ne tagun e inputit ne value

		$fjalekalimi=md5($_POST['hyr_fjalekalimi']);

		$query_kerkimi="select * from perdorues where username='$username' and fjalekalimi='$fjalekalimi'";
		$result=mysqli_query($connection, $query_kerkimi);
		$num_rows=mysqli_num_rows($result);
		if($num_rows==1){
			
			$row=mysqli_fetch_array($result);
			$_SESSION['id_perdorues']=$row['id_perdorues'];
	
			header("Location: indexIn.php");//te con ne faqen main te loguar
		}else $gabimLogin=true;
	}
?>
