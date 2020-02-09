<?php 
require 'includes/headerIn.php'; 
require 'includes/shtoPostim.php';
require 'includes/shtoKoment.php';
?>


<script type="text/javascript" src="js/shtoPost.js"></script>

<!-- kolona e dyte me vendin e postimeve -->
	<div class="postimet column">

<!-- divi ku behet shtimi i posteve te reja vetem per mesuesin -->
	
		<div class="shtoPostim">
			<p><button class="btnShto" id="shtoPost" type="button"><i class="fa fa-plus-square fa-lg"></i> Shto postim</button></p>

			<form method="post" action="indexIn.php?vl=0" enctype="multipart/form-data" id="frmShto">
					<p><input type="text" name="titulli" id="titulli" size="50" required placeholder="Titulli"  autocomplete="off"></p>
					<p><textarea rows="4" cols="60" name="permbajtja" id="permbajtja" placeholder="Permbajtja e postit"></textarea>></p>
					<p><input type="file" name="fileUpload" id="fileUpload"></p>
					<p><input class="btnShto pink" type="submit" name="posto" value="Posto"></p>
			</form>
		</div>

<!-- divi ku do shfaqet secili prej posteve sipas kohes se postimit -->
		<div class="shfaqPostim">
				<?php
					$qry="select * from poste where id_grupi='".$perdorues['id_grupi']."' order by id_posti desc";
					$result=mysqli_query($connection, $qry);
					$nr=mysqli_num_rows($result);
						if($nr==0) echo "<p><em>Nuk ka poste per te shfaqur</em></p>";
						else{	
							for($i=0; $i<$nr; $i++){
								echo "<div class='posti'>";	
								$post=mysqli_fetch_array($result);
								extract($post);
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

			echo "<div class='komentet'>";

		//sektor ku do te shfaqen vetem 2 komentet e para te postit perkates
					
					$qry3="select komenti, data_komenti, emri, mbiemri from komente, perdorues WHERE id_komentuesi=id_perdorues and id_posti='".$id_posti."' order by data_komenti desc";
					$result3=mysqli_query($connection, $qry3);
					$nr3=mysqli_num_rows($result3);
						for($j=0; $j<$nr3 && $j<3; $j++){
							$row3=mysqli_fetch_array($result3);
							echo "<p>".$row3['komenti']."</p>";
							echo "<p class='postues'>".$row3['emri']." ".$row3['mbiemri']." <span class='date'>".$row3['data_komenti']."</span></p>";
							
						}



				//pjesa e inputit te komentit te perdoruesit
						//buttonin e pare submit e perdor per te shtuar postimin dhe per tu ridrejtuar ne te njejten faqe
						//butoni i dyte submit te con ne faqen tjeter qe shfaq portimin e plote
								echo "
									<div class='komentetReja'>
										<form action='#' method='post'><p>
											<input type='hidden' name='id_posti' value='$id_posti'>
											<input type='text' name='komenti' class='komenti' placeholder=' Shkruaj nje pergjigje...' autocomplete='off'>
											<button type='submit' class='btnShto' name='shtoKoment'><i class='fa fa-plus-square fa-lg'></i> Pergjigju</button>
										</form>";
								echo "<form action='post.php' method='get'><p>
											<button type='submit' class='btnShto' name='nr' value='$id_posti'><i class='fa fa-expand'></i> Hap postin</button></p>
										</form>
									</div>
								</div>	
							</div>";
							}

						}
					}

				?>



		</div><!-- shfaqja e permbajtjes se postimit -->
		
	</div><!-- mbyllja e kolones gjigande te posteve -->

</div><!--wrapperi-->

</body>
</html> 