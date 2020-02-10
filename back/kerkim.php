<?php
require 'includes/headerIn.php';
?>


<!-- kolona e dyte me vendin e postimeve -->
	<div class="postimet column ">
		<h4><em><strong>Rezultatet e kërkimit</strong></em></h4>
		<br>

		<?php 
		$kerkim=$_GET['kerkim'];
		$kerkim=trim($kerkim);
		$kerkim=explode(" ", $kerkim);
		
		$kusht_query="";
		for ($i=0; $i<count($kerkim) ; $i++) { 
			if($i!=count($kerkim)-1)
				$kusht_query.="emri like '%".$kerkim[$i]."%' or mbiemri like '%".$kerkim[$i]."%' or emer_grupi like '%".$kerkim[$i]."%' or ";
			else $kusht_query.="emri like '%".$kerkim[$i]."%' or mbiemri like '%".$kerkim[$i]."%' or emer_grupi like '%".$kerkim[$i]."%'";
		}
		
		$query_kerkimi="select id_perdorues, fotoProfili, username, email, emer_grupi from perdorues inner join grupet on perdorues.id_grupi=grupet.id_grupi where $kusht_query order by username";
		$result=mysqli_query($connection, $query_kerkimi);
		?>

		<table class="tabeleRezultatesh">
			<thead>	
			</thead>
		
			<tbody>
				<?php
					while($row=mysqli_fetch_row($result)){
				?>
				<tr>
					<td><?php echo "<img src='foto/alfabeti/$row[1]' class='miniFoto'>"; ?></td>
					<td><?php echo "$row[2]"; ?></td>
					<td><?php echo "$row[3]"; ?></td>
					<td><?php echo "$row[4]"; ?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>

		
	<!-- divi ku do shfaqet secili nga rezutatet e gjetura -->

	</div><!-- mbyllja e kolones gjigande te posteve -->

	</div><!--wrapperi-->


</body>
</html> 