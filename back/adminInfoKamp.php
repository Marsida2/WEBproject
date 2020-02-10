<?php
require 'includes/headerIn.php';
?>

	<div class="postimet column">
		<h2>Te dhëna nga përdoruesit</h2>
		<!--printimi i numrit te grupeve-->
	<p>
		Numri i të regjistrurve sipas grupeve: 
		
			<?php
				$query_num="select grupet.id_grupi, emer_grupi, count(perdorues.id_grupi) from grupet left join perdorues on perdorues.id_grupi=grupet.id_grupi group by grupet.id_grupi ";
				$result=mysqli_query($connection, $query_num);
				$num=mysqli_num_rows($result);


				echo "<table class='tbl'><tr><thead><th>Grupi</th><th>Anëtarët aktuale</th></thead><tbody>";
				while($row=mysqli_fetch_array($result))
					echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
				echo "</tbody></table>";
			?>
				</p>

				<br>

				<p>Numri i regjistrimeve sipas gjinisë:</p>

				<p>
					<?php
						$query_num="select gjinia, count(id_perdorues) from perdorues group by gjinia ";
						$result=mysqli_query($connection, $query_num);
						while($row=mysqli_fetch_array($result))
							echo "Gjinia ".$row[0].": ".$row[1]." persona<br>";
					?>
				</p>


	</div>

</div><!--wrapperi-->

</body>
</html> 