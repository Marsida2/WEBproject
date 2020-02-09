<?php

if(isset($_POST['shtoKoment'])){

//mbledh te dhenat qe do te ruhen ne tabelen e komeeve
	$id_posti=$_POST['id_posti'];//inputi i tipit hidden

	$komenti=strip_tags($_POST['komenti']);//heq taget
	$komenti=mysqli_real_escape_string($connection, $komenti);//rregullon thonjezat
	if($komenti!=""){
	
	$id_komentuesi=$perdorues[0];//ruajtur qe ne fillim te programit
	
	$data_komenti=date("Y-m-d H:i:s");//ora e hedhjes se komentit

    $query = "insert into komente values('', '$id_posti', '$komenti', '$id_komentuesi', '$data_komenti')";
    $result=mysqli_query($connection,$query);
    if(!$result) echo "Deshtoi query i hedhjes se komentit ne databaze!: ". mysqli_error($connection);
	}
} 

?>
