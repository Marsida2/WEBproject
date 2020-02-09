<?php
require 'includes/connection.php';

if(isset($_SESSION['id_perdorues'])){
	$id=$_SESSION['id_perdorues'];
	$query_kerkim_data= mysqli_query($connection, "select * from perdorues where id_perdorues='$id'");
	$perdorues=mysqli_fetch_array($query_kerkim_data);
	$_SESSION['perdAk']=$perdorues;
}else header("Location: hyr.php");

require 'includes/shtoKoment.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>EmerKampi</title>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/fonts/font-faces.css">
	<link rel="stylesheet" type="text/css" href="css/loggedIn.css">

</head>
<body>

	<div class="top_bar">
		<div class="logo">
			<a href="indexIn.php">EmerKampi</a>
		</div>

<!-- implementimi i search-it  -->
	<div class="search">
		<form action="kerko.php" method="get" name="frmKerko">
			<input type="text" name="kerkim" onkeyup="rezultatRealTime(this.value, '<?php echo $perdorues[0]; ?>')" placeholder="Kerko..." autocomplete="off" id="kerko_inputin">
			<button type="submit" class="btnKerkimi">
				<!-- ketu do vendos nje fontawesome -->
				<i class="fa fa-search fa-lg"></i>
			</button>
		</form>


	</div>


		<nav>
			<a href="#" id="emriNav"> <?php echo $perdorues['username'] ?></a>
			<a href="#" id="grupi"><i class="fa fa-users fa-lg"></i></a>
			<a href="#" id="settings"><i class="fa fa-cog fa-lg"></i></a>
			<a href="includes/logout.php" id="dil"><i class="fa fa-share-square-o fa-lg"></i></a>
		</nav>

	</div>



	<div class="wrapper">
		


<!-- kolona e pare me te dhenat e perdoruesit -->
	<div class="teDhenaPersonale column">
		<a href="#"><img class="fotoProfili" src="foto/alfabeti/<?php echo $perdorues['fotoProfili']; ?>" alt="fotoja e profilit"></a>
		<p>
			<?php echo $perdorues['emri']." ".$perdorues['mbiemri'] ?>
		</p>	
		<p>
			<?php echo $perdorues['email']?>
		</p>	
		<p>
			<?php echo $perdorues['emri']." ".$perdorues['mbiemri'] ?>
		</p>	
 	</div>








<!-- kolona e dyte me vendin e postimeve -->
	<div class="postimet column">
		
<!-- divi ku do shfaqet posti i cili u klikua "Shiko te plote" -->
		<div class="shfaqPostim">
		
				<?php
					$qry="select * from poste where id_posti='".$_GET['nr']."'";
					$result=mysqli_query($connection, $qry);						
								$post=mysqli_fetch_array($result);
								extract($post);
								echo "<div class='posti'>";	
								echo "<p class='titullPosti'>$titulli</p>";
								echo "<p class='postues'><span class='paraPostues'>Nga: </span>";
							$qry2="select emri, mbiemri from perdorues where id_perdorues=$id_postuesi";
							$result2= mysqli_query($connection, $qry2);
							if(!$result2) echo "Nuk ekziston perdoruesi";
							else {
									$row2=mysqli_fetch_row($result2);
									echo $row2[0]." ".$row2[1];
									echo " <span class='date'>$data_posti</span></p>
										  <p class='permbajtjePosti'>$permbajtja</p>";
									if($foto!=""){
										echo "<p><img class='fotoPosti' src='".$post['foto']."' alt='Problem ne hapjen e fotos' style='    max-width: 500px; max-height: 300px; margin:5px auto;'></p>";
									}
// fundi i seksionit te postit
	//fillimi i seksionit te komenteve
								echo "<hr>
										<div class='komentet'>";
		//sektor ku do te shfaqen vetem 2 komentet e para te postit perkates
					
					$qry3="select komenti, data_komenti, emri, mbiemri from komente, perdorues WHERE id_komentuesi=id_perdorues and id_posti='".$_GET['nr']."' order by data_komenti desc";
					$result3=mysqli_query($connection, $qry3);
					$nr3=mysqli_num_rows($result3);
						for($j=0; $j<$nr3; $j++){
							$row3=mysqli_fetch_array($result3);
							echo "<p>".$row3['komenti']."</p>";
							echo "<p class='postues'>".$row3['emri']." ".$row3['mbiemri']." <span class='date'>".$row3['data_komenti']."</span></p>";
							
						}



				//pjesa e inputit te komentit te perdoruesit
										echo "<form action='#' method='post'><p>
													<input type='hidden' name='id_posti' value='$id_posti'>
													<input type='text' name='komenti' class='komenti' placeholder=' Shkruaj nje pergjigje...' autocomplete='off' style='width: 450px;'>
													<button type='submit' class='btnShto' name='shtoKoment'><i class='fa fa-plus-square fa-lg'></i> Pergjigju</button>
										</div>	
									</div>";
							}

				?>



		</div><!-- shfaqja e permbajtjes se postimit -->
		
	</div><!-- mbyllja e kolones gjigande te posteve -->

</div><!--wrapperi-->


</body>
</html> 