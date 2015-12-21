<?php 
	include "config/koneksi.php";

	$hapus = "DELETE FROM kategori WHERE id = '$_GET[id]'";
	$query = mysqli_query($konek, $hapus);

	header("location:http://localhost/proyekcms/index.php?modul=kategori");

 ?>