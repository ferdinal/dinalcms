<?php 
	include "config/koneksi.php";

	$id = $_POST['id'];
	$nama = $_POST['nama_kategori'];
	$content = $_POST['content'];

	$update = "UPDATE kategori SET nama_kategori = '$nama', content = '$content' WHERE id = '$id'";
	$query = mysqli_query($konek, $update);

	header("location:".BASE_URL."index.php?modul=kategori");
 ?>