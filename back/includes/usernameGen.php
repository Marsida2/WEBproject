<?php

		$emri=strip_tags($_POST['emri']);//heq taget html
		$emri=ucfirst(strtolower($emri));//e shkruaj ne formatin Upper(lower tjerat)\
		$mbiemri=strip_tags($_POST['mbiemri']);//heq taget html
		$mbiemri=ucfirst(strtolower($mbiemri));//e shkruaj ne formatin Upper(lower tjerat)	

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

?>