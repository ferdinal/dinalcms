<?php
	include "config/koneksi.php";
	$page = $_POST['page'];
	$content = $_POST['content'];

	// nah disini juga harus dijagain supaya kalo page/content kosong ga bisa masuk ke database

	// jadi kalo page kaga ada isinya atau content kaga ada isinya
	// redirect balik ke form_tambah
	if($page == null OR $content == null){
		header("location:http://localhost/proyekcms/index.php?modul=halaman&action=create_form");
	}

	$input = "INSERT INTO halaman(page, content) VALUES('$page', '$content')";

	mysqli_query($konek, $input);
		header("location:http://localhost/proyekcms/index.php?modul=halaman");
	

?>