<?php 
	include "config/koneksi.php";


	$hapus = "DELETE FROM halaman WHERE id = '$_GET[id]'";
	mysqli_query($konek, $hapus);

	header("location:".BASE_URL."index.php?modul=halaman");
 ?>