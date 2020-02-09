<?php


	$gabimLogin=false;//do sherbeje per te treguar true nese ka gabim ne te dhenat e loginit

	if (isset($_POST['hyr'])) {

		$username=$_POST['hyr_username'];
		$_SESSION['hyr_username']=$username;//ruaj perdoruesin ne session qe t rishkruaj ne tagun e inputit ne value

		$fjalekalimi=md5($_POST['hyr_fjalekalimi']);

		$query_kerkimi="select * from perdorues where username='$username' and fjalekalimi='$fjalekalimi'";
		$result=mysqli_query($connection, $query_kerkimi);
		if(mysqli_num_rows($result)==1){
			//ekziston ky perdorues ne databaze...
			//updato statusin e perdoruesit ne aktiv
			$query_updatimi="update perdorues set user_aktiv='po' where username='$username'";
			mysqli_query($connection, $query_updatimi);
			$gabimLogin=false;
			header("Location: indexLogged.php");//te con ne faqen main te loguar
		}else $gabimLogin=true;//kontrollohet brenda tagut te inputit
	}
?>
