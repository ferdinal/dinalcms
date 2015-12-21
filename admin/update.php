<?php 
	include "../config/koneksi.php";

	$id = $_POST['id'];
	$page = $_POST['page'];
	$content = $_POST['content'];

	$update = "UPDATE halaman SET page = '$page', content = '$content' WHERE page = '$id'";
	mysqli_query($konek, $update);

	header("location:tampil.php");

 ?>