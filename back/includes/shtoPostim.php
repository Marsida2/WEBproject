<?php

if(isset($_POST['posto'])){

//upload foton e postimit
	$uploadOK=1;
	$imageName=$_FILES['fileUpload']['name'];//marrim emrin e fotos me prapashtesen(.png/.jpg...)
	if($imageName!= ""){
		$target_dir = "foto/uploaded/";//pathi i folderit ku do ruhet fotoja
		$imageName=$target_dir.uniqid().basename($imageName); 
		//uniqid() i shtonte emrit te fotos nje id prej 12 shifrash me duket qe jane unike qe mos perseriten emrat e fotove. basename mdk merr emrin pa prapashtesen e formatit
		$imageFileType=pathinfo($imageName,PATHINFO_EXTENSION);

		if($_FILES['fileUpload']['size']> 10000000){//vektori FILES mban te dhena per foton
			echo "Sorry fotoja eshte shume e madhe!";
			$uploadOK=0;
		}
		if (strtolower($imageFileType)!="jpeg" && strtolower($imageFileType)!="jpg" && strtolower($imageFileType)!="png") {
			echo "Sorry, formati i fotos eshte i pasuportueshem!";
			$uploadOK=0;
		}
		if ($uploadOK)
			if (!move_uploaded_file($_FILES['fileUpload']['tmp_name'], $imageName))
				echo "Deshtoi uplodimi i fotos!";
	} 


	$titulli=strip_tags($_POST['titulli']);//heq taget
	$titulli=mysqli_real_escape_string($connection, $titulli);//rregullon thonjezat
	$permbajtja=strip_tags($_POST['permbajtja']);
	$permbajtja=mysqli_real_escape_string($connection, $permbajtja); 

	$data=date("Y-m-d H:i:s");
	
	$idPerd=$perdorues[0];
	$idGrupi=$perdorues['id_grupi'];

    $query = "insert into poste values('', '$idGrupi', '$idPerd', '$data', '$titulli', '$permbajtja', '$imageName')";
    $result=mysqli_query($connection,$query);
    if(!$result) echo "Deshtoi query i hedhjes se postimit ne databaze!";

	header("Location: indexIn.php");
}

?>
