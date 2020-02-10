<?php
require 'includes/headerIn.php';
?>


	<div class="postimet column">
		<h2>Reset Grupi</h2>
		
		<p>
			<form action="#" method="get">
				Zgjidh grupin që do të reset-osh: <select name="resetGrup">
					<?php
						$query_lexo="select * from grupet order by emer_grupi";
						$result=mysqli_query($connection, $query_lexo);
						while($row=mysqli_fetch_array($result)){
							echo "<option value='".$row['id_grupi']."'>".$row['emer_grupi']."</option>";}
					?>
					
					</select>

					<input type="submit" name="reset" value="Reseto">
			</form>

					<?php 
						if(isset($_GET['reset'])) {
							extract($_GET);
							$query_reset="delete from perdorues where id_grupi=$resetGrup";
							$result=mysqli_query($connection, $query_reset);
							if($result) 
								echo "Resetimi u krye me sukses!";
							else 
								echo "Resetimi dështoi! ".mysqli_error($connection);
						}
					?>


		</p>

	</div>

</div><!--wrapperi-->

</body>
</html> 