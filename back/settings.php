<?php 
require 'includes/headerIn.php'; 
require 'includes/ndryshoFjalekalim.php';
?>

<script type="text/javascript"> document.getElementsByClassName("fa-cog")[0].setAttribute("style", "color: black;");</script>


<!-- kolona e dyte me vendin e postimeve -->
	<div class="postimet column">
		
		
		<form action="#" method="post">
			<p><input type="text" name="newFjalekalim" placeholder="Fjalëkalimi i ri" <?php if (isset($_COOKIE[$id_perdorues]) && ($_COOKIE[$id_perdorues]==1 || $_COOKIE[$id_perdorues]==2))
						echo "disabled"; ?>></p>
			<p><input type="text" name="newFjalekalim2" placeholder="Konfirmo fjalëkalimin" <?php if (isset($_COOKIE[$id_perdorues]) && ($_COOKIE[$id_perdorues]==1 || $_COOKIE[$id_perdorues]==2))
						echo "disabled"; ?>></p>
			<p><input type="text" name="oldFjalekalim" placeholder="Fjalëkalimi i vjeter" <?php if (isset($_COOKIE[$id_perdorues]) && ($_COOKIE[$id_perdorues]==1 || $_COOKIE[$id_perdorues]==2))
						echo "disabled"; ?>></p>
			<p><input type="submit" name="ndrysho" value="Ndrysho" <?php if (isset($_COOKIE[$id_perdorues]) && ($_COOKIE[$id_perdorues]==1 || $_COOKIE[$id_perdorues]==2))
						echo "disabled"; ?>></p>

		</form>

			<p>
				
				<?php
					if(isset($_COOKIE[$id_perdorues])){
						if ($_COOKIE[$id_perdorues]==1) {
							echo "Fjalëkalimi u ndryshua me sukses!";
							setcookie($id_perdorues, 2, time()+3600);
						}
						else if ($_COOKIE[$id_perdorues]==2) 
							echo "Fjalëkalimi s'mund të ndryshohet përsëri brenda një orë!";

						else echo $_COOKIE[$id_perdorues];
					}
				?>
			</p>
		

			<?php 
		if($perdorues['id_roli']==4){
	?>
			<p><a href="adminInfoKamp.php">Shiko të dhënat mbi regjistrimet në kamp</a><br></p>
			<p><a href="adminResetGrup.php">Reseto grupe</a><br></p>
			<p><a href="adminFshiGrup.php">Fshi grupe</a><br></p>
			<p><a href="adminKonfirmoMesues.php">Kërkesat për mësues</a>

			<?php
				$query="select id_perdorues from perdorues where id_roli=3 ";
				$result=mysqli_query($connection, $query);
				$num=mysqli_num_rows($result);
				echo "<span style='color: red;'><strong> +$num </strong></span>";
			?>

			<br></p>
	<?php 
		} 
	?>
		
	</div><!-- mbyllja e kolones gjigande te posteve -->

</div><!--wrapperi-->


</body>
</html> 