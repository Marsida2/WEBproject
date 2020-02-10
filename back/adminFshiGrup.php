<?php
require 'includes/headerIn.php';
?>


	<div class="postimet column">
		<h2>Fshi grup nga kampi</h2>
		<!--printimi i numrit te grupeve-->
	<p>
		Numri i grupeve aktuale: 
			<?php
				$query_num="select grupet.id_grupi, emer_grupi, count(perdorues.id_grupi) from grupet left join perdorues on perdorues.id_grupi=grupet.id_grupi group by grupet.id_grupi ";
				$result=mysqli_query($connection, $query_num);
				$num=mysqli_num_rows($result);
				echo $num."<br>";
			?>
	</p>


<!--printimi i grupeve-->
<?php

echo "<table class='tbl'><tr><thead><th>Grupi</th><th>Anëtaret aktualë</th><th>Fshi</th></thead><tbody>";
while($row=mysqli_fetch_array($result))
	echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td><form action='#' method='get'><input type='hidden' name='id' value='".$row[0]."'><input type='submit' name='fshi' value='fshi'></form></td></tr>";
echo "</tbody></table>";


	//FSHIRJA E GRUPIT TE CAKTUAR

	if(isset($_GET['fshi'])){
		extract($_GET);
		$query_delete="delete from grupet where id_grupi='$id'";
	$result=mysqli_query($connection, $query_delete);
	header("LOcation: adminFshiGrup.php");
	}
?>


	</div>

</div><!--wrapperi-->

</body>
</html> 