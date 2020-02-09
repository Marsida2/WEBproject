<?php 
require 'includes/headerIn.php'; 
?>
<script type="text/javascript"> document.getElementsByClassName("fa-users")[0].setAttribute("style", "color: black;");</script>


<!-- kolona e dyte me vendin e postimeve -->
	<div class="postimet column ">
		<h4><em><strong>Anetaret e grupit:</strong></em></h4>
		<br>

		<?php 
		
		$query_kerkimi="select id_perdorues, fotoProfili, username, email, emer_grupi from perdorues inner join grupet on perdorues.id_grupi=grupet.id_grupi where perdorues.id_grupi='".$perdorues['id_grupi']."' order by username";
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


	</div>

	</div><!--wrapperi-->


</body>
</html> 