<?php 
	include "config/koneksi.php";

	$hapus = "DELETE FROM kategori WHERE id = '$_GET[id]'";
	$query = mysqli_query($konek, $hapus);

	header("location:".BASE_URL."index.php?modul=kategori");

 ?>