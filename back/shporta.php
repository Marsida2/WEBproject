<?php require 'includes/headerIndex.php'; ?>
<script type="text/javascript" src="js/llogaritTotal.js"></script>
<style type="text/css">
	a#shporta {    color: black; }
</style>>


	<div class="wrapper">
		<h1>SHPORTA E KRAHASIMIT</h1>
		<p>Ju keni <?php echo count($_SESSION['shporta']); echo count($_SESSION['shporta'])==1? " grup ": " grupe ";?>ne shporte.</p>


	<?php 
		if(count($_SESSION['shporta'])!=0){
	?>
	<form action="#" method="get">
		<table id="tblShporta">
			<thead>
				<th>Grupet</th>
				<th>Cmimi (L)</th>
				<th>Zgjidh grupin</th>
			</thead>
			<tbody>
					<?php
						for($i=0; $i<count($_SESSION['shporta']); $i++){
							$query_shporte="select id_grupi, emer_grupi, cmimi from grupet where id_grupi='".$_SESSION['shporta'][$i]."'";
							$result=mysqli_query($connection, $query_shporte);
							$row=mysqli_fetch_row($result);
					?>
							<tr>
								<td><?php echo $row[1]?></td>
								<td><?php echo $row[2]?> L</td>
								<td><input type="radio" name="id_grupi_zgjedhur" onchange="merrCmimin('<?php echo $row[2]?>')" value="<?php echo $row[0]?>"></td>
							</tr>
					<?php
						}
					?>		<tr>
								<td colspan="3"><br></td>
							</tr>
			</tbody>	
			<tfoot>
				<th></th>
				<th>Totali:</th>
				<th id="total"></th>
			</tfoot>		
		</table>
		<input type="submit" name="Regjistrohu" value="Regjistrohu">
	</form>
	<?php 
		}
	?>

	</div><!--wrapperi-->


</body>
</html> 