<?php 
require 'includes/headerIn.php'; 
require 'includes/ndryshoFjalekalim.php';
?>

<script type="text/javascript"> document.getElementsByClassName("fa-cog")[0].setAttribute("style", "color: black;");</script>


<!-- kolona e dyte me vendin e postimeve -->
	<div class="postimet column">
		
		
		<form action="#" method="post">
			<p><input type="text" name="newFjalekalim" placeholder="Fjalekalimi i ri" <?php if (isset($_COOKIE[$id_perdorues]) && ($_COOKIE[$id_perdorues]==1 || $_COOKIE[$id_perdorues]==2))
						echo "disabled"; ?>></p>
			<p><input type="text" name="newFjalekalim2" placeholder="Konfirmo fjalekalimin" <?php if (isset($_COOKIE[$id_perdorues]) && ($_COOKIE[$id_perdorues]==1 || $_COOKIE[$id_perdorues]==2))
						echo "disabled"; ?>></p>
			<p><input type="text" name="oldFjalekalim" placeholder="Fjalekalimi i vjeter" <?php if (isset($_COOKIE[$id_perdorues]) && ($_COOKIE[$id_perdorues]==1 || $_COOKIE[$id_perdorues]==2))
						echo "disabled"; ?>></p>
			<p><input type="submit" name="ndrysho" value="Ndrysho" <?php if (isset($_COOKIE[$id_perdorues]) && ($_COOKIE[$id_perdorues]==1 || $_COOKIE[$id_perdorues]==2))
						echo "disabled"; ?>></p>

		</form>

			<p>
				
				<?php
					if(isset($_COOKIE[$id_perdorues])){
						if ($_COOKIE[$id_perdorues]==1) {
							echo "Fjalekalimi u ndryshua me sukses!";
							setcookie($id_perdorues, 2, time()+3600);
						}
						else if ($_COOKIE[$id_perdorues]==2) 
							echo "Fjalekalimi smund te ndryshohet perseri brenda nje ore!";

						else echo $_COOKIE[$id_perdorues];
					}
				?>
			</p>
		
		
	</div><!-- mbyllja e kolones gjigande te posteve -->

</div><!--wrapperi-->


</body>
</html> 