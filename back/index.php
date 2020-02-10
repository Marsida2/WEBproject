<?php require 'includes/headerIndex.php'; ?>
<script type="text/javascript" src="js/mouseMove.js"></script>
<script type="text/javascript" src="js/shikoTeGjitha.js"></script>

	<table id="tabela">
			<tbody id="telajo">
			</tbody>
		</table>
	

	<div class="wrapper">

		<div class="mesazhiPershendetes">Mirësevini në Kampin Veror TALENTI<em>im</em></div>
		

		<div class="kampetRandom">
		<?php
	//do shfaqen 3 grupe kampi random
			$query_3rand="select * from grupet order by rand()";
			$result=mysqli_query($connection, $query_3rand);
			$nr=mysqli_num_rows($result);
			$i=0;
			for($i; $i<$nr && $i<3; $i++){
				$row=mysqli_fetch_assoc($result);

		?>
					<div class="grupi">
						<img src="foto/kampet/<?php echo $row['foto_grupi']; ?>" class="foto_grupi">
						<div class="detaje">
							<h3><?php echo $row['emer_grupi']; ?></h3>
							<p><?php $pershkrimi=$row['pershkrimi'];
							$gjat=strpos(wordwrap($pershkrimi,250,"\n",false), "\n");
									$pershkrimiNdare=substr($pershkrimi, 0, $gjat);
									echo "$pershkrimiNdare<a href='grupi.php?id_gr=".$row['id_grupi']."'>...shiko me shume.</a>";
		?>					</p>
						</div>
					</div>
		<?php
			}
		?>
		</div><!--kampetRandom-->


		<div class="shikoTeGjitha">
			<span id="btnShikoTeGjitha"><i class="fa fa-arrow-circle-down fa-lg"></i></i></span>
		</div>

		<div id="kampetKomplet">
		
		<?php	
			for($i; $i<$nr ; $i++){
				$row=mysqli_fetch_assoc($result);
		?>
					<div class="grupi">
						<img src="foto/kampet/<?php echo $row['foto_grupi']; ?>" class="foto_grupi">
						<div class="detaje">
							<h3><?php echo $row['emer_grupi']; ?></h3>
								<p><?php $pershkrimi=$row['pershkrimi']; 
									$gjat=strpos(wordwrap($pershkrimi,250,"\n",false), "\n");
									$pershkrimiNdare=substr($pershkrimi, 0, $gjat);
									echo "$pershkrimiNdare<a href='grupi.php?id_gr=".$row['id_grupi']."'>...shiko me shume.</a>";
								?></p>
						</div>
					</div>
		<?php
				if($i!=$nr-1) echo "<hr>";
			}
			mysqli_close($connection); 

		?>

		</div>

	</div><!--wrapperi-->

</body>
</html> 