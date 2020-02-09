<?php 

	if(isset($_POST['submit'])){

		$emri=strip_tags($_POST['emri']);//heq taget html
		$emri=ucfirst(strtolower($emri));//e shkruaj ne formatin Upper(lower tjerat)\
		$mbiemri=strip_tags($_POST['mbiemri']);//heq taget html
		$mbiemri=ucfirst(strtolower($mbiemri));//e shkruaj ne formatin Upper(lower tjerat)	

		$datelindja=$_POST['datelindja'];
		$gjinia=$_POST['gjinia'];

		$roli=$_POST['roli'];
		$email=$_POST['email'];


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
		

		$fjalekalimi=md5($_POST['fjalekalimi']);

		//shtimi ne databaze
		$query_shtimi="insert into perdorues values ('', '$emri', '$mbiemri', '$datelindja', '$gjinia', '$email', '$username', '$fjalekalimi', '$roli', '1')";
		$result=mysqli_query($connection, $query_shtimi);
		
	}


?>