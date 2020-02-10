<?php 
require 'includes/headerIndex.php'; 
?>

	<div class="wrapper">

		<?php	

			$id_grupi=$_GET['id_gr'];
			$query_grupi="select * from grupet where id_grupi=$id_grupi";
			$result=mysqli_query($connection, $query_grupi);
			$nr=mysqli_num_rows($result);
			$row=mysqli_fetch_assoc($result);
		?>
					<div id="grupiPlote">
						<img src="foto/kampet/<?php echo $row['foto_grupi']; ?>" class="foto_grupi">
						<div class="detaje"><strong>
							<h3>Grupi: <?php echo $row['emer_grupi']; ?></h3>
							<p>Cmimi: <?php echo $row['cmimi']; ?> leke</p>
							<p>Orari: <?php echo $row['orari']; ?></p></strong>
							<p><?php echo $row['pershkrimi'];?></p>
							<p><form action="#" method="get">
								<input type="hidden" name="id_gr" value="<?php echo $row['id_grupi']; ?>">
								<button type="submit" name="shtoShporte"
									<?php 
									//kodi per te bere disable butonin
									if(isset($_SESSION['shporta'])) {
										$j=0;
										for($j; $j<count($_SESSION['shporta']); $j++)
											if($_SESSION['shporta'][$j]==$row['id_grupi'])
												echo " disabled";
										}

									//kodi per shtimin ne shporte
									if(isset($_GET['shtoShporte'])){
										extract($_GET);
										array_push($_SESSION['shporta'],$id_gr);
										header("Location: grupi.php?id_gr=$id_gr");
										}

									?>
								><i class="fa fa-cart-plus fa-lg"></i> Shto ne shporte</button>
							</form></p>
						</div>

					</div>

		</div>

	</div><!--wrapperi-->


</body>
</html> 