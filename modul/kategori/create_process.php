<?php 
	include "config/koneksi.php";

	$nama = $_POST['nama_kategori'];
	$desc = $_POST['content'];

	if ($nama==null OR $desc==null) {
		header("location:".BASE_URL."index.php?modul=kategori&action=create_form");
	}

	$input = "INSERT INTO kategori(nama_kategori, content) VALUES('$nama', '$desc')";

	mysqli_query($konek, $input);

	header("location:".BASE_URL."index.php?modul=kategori");
 ?>