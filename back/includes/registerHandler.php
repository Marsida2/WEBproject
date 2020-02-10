<?php 
		$emri;
		$mbiemri;
		$username;

	if(isset($_POST['submit'])){
		$emri=strip_tags($_POST['emri']);//heq taget html
		$emri=ucfirst(strtolower($emri));//e shkruaj ne formatin Upper(lower)
		$mbiemri=strip_tags($_POST['mbiemri']);
		$mbiemri=ucfirst(strtolower($mbiemri));	

	//gjeneroj nje username automatik
		
		$username=strtolower($emri."_".$mbiemri);
		$user=$username;
		$query_kerkimi="select username from perdorues where username='$username'";
		$result=mysqli_query($connection, $query_kerkimi);
		$i=0;
		while(mysqli_num_rows($result)!=0){
			$i++;
			$username=$user."_".$i;
			$query_kerkimi="select username from perdorues where username='$username'";
			$result=mysqli_query($connection, $query_kerkimi);
		}


		$datelindja=$_POST['datelindja'];
		$gjinia=$_POST['gjinia'];

		$roli=$_POST['roli'];
		$email=$_POST['email'];

		$fjalekalimi=md5($_POST['fjalekalimi']);
		$fotoProfili=$username[0].".jpg";
		$grupi=$_POST['grupi'];

		//shtimi ne databaze
		$query_shtimi="insert into perdorues values ('', '$emri', '$mbiemri', '$datelindja', '$gjinia', '$email', '$username', '$fjalekalimi', '$roli', '$fotoProfili', '$grupi')";
		$result=mysqli_query($connection, $query_shtimi);

		$query_leximi="select id_perdorues from perdorues where email='$email'";
		$result=mysqli_query($connection, $query_leximi);
		$row=mysqli_fetch_row($result);
		$_SESSION['id_perdorues']=$row[0];
		header("Location: indexIn.php");
	}


?>