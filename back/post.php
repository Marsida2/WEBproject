<?php
require 'includes/headerIn.php';
require 'includes/shtoKoment.php';
?>


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