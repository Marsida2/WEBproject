
<?php
	$id_perdorues=$perdorues[0];
if (isset($_POST['ndrysho'])){
	$newFjalekalim=md5($_POST['newFjalekalim']);
	$newFjalekalim2=md5($_POST['newFjalekalim2']);
	$oldFjalekalim=md5($_POST['oldFjalekalim']);
	echo $newFjalekalim." ".$newFjalekalim2." ".$oldFjalekalim;


	if(!isset($_COOKIE['$id_perdorues']) || ($_COOKIE['$id_perdorues']!=1 && $_COOKIE['$id_perdorues']!=2)) {
		if($oldFjalekalim!=$perdorues['fjalekalimi'])
			setcookie($id_perdorues, "Fjalekalimi i vjeter eshte i pasakte!", time()+3600);
		else if ($newFjalekalim!=$newFjalekalim2)
			setcookie($id_perdorues, "Fjalekalimet e reja nuk perputhen!", time()+3600);
		else{
	$query_update="update perdorues set fjalekalimi='$newFjalekalim' where id_perdorues=$id_perdorues";
	$result=mysqli_query($connection, $query_update);
	if($result)
		setcookie($id_perdorues, 1, time()+3600);
	}
}
	header("Location: settings.php?vl=0");
}	
?>