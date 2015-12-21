<?php 
	include "config/koneksi.php";

	$id = $_POST['id'];
	$page = $_POST['page'];
	$content = $_POST['content'];

	$update = "UPDATE halaman SET page = '$page', content = '$content' WHERE id = '$id'";
	mysqli_query($konek, $update);

	header("location:http://localhost/proyekcms/index.php?modul=halaman");

 ?>