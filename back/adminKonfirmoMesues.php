<?php
require 'includes/headerIn.php';
require 'includes/konfirmoMesues.php';
?>

	<div class="postimet column">
		<h2>Konfirmo kerkesat per mesues</h2>
		<!--printimi i numrit te grupeve-->
	<p>		
			<?php
				$query_num="select id_perdorues, concat(emri, ' ', mbiemri), gjinia, datelindja from perdorues where id_roli=3 ";
				$result=mysqli_query($connection, $query_num);
				$num=mysqli_num_rows($result);


				echo "<table border='1'><tr><thead><th>Emri</th><th>Gjinia</th><th>Datelindja</th><th>Konfirmo</th><th>Anullo</th></thead><tbody>";
				while($row=mysqli_fetch_array($result))
					echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td><a href='adminKonfirmoMesues.php?idKonfirmo=".$row[0]."'>Konfirmo</a></td><td><a href='adminKonfirmoMesues.php?idAnullo=".$row[0]."'>Anullo</a></td></tr>";
				echo "</tbody></table>";
			?>
				</p>

	</div>

</div><!--wrapperi-->

</body>
</html> 