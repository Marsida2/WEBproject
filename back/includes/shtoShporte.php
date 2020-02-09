<?php 
if(isset($_GET['shtoShporte'])){
	extract($_GET);
	array_push($_SESSION['shporta'],$id_gr); // Items added to cart 
}
?>