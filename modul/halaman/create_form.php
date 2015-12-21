<?php 
	include "modul/layout/header.php";
	include "modul/layout/navbar.php";
 ?>
	<div class="container">
		<h2>tambah</h2>

			<form method="POST" action="?modul=halaman&action=create_process">
				<div class="form-group">
				    <label for="exampleInputText1">Page Name:</label>
				    <input type="text" class="form-control" id="exampleInputText1" name="page" required>
			  	</div>
					<!-- kita validasi disini -->
					<!-- validasi itu bisa dari backend atau frontend, tapi bagusnya 2-2nya -->
					<!-- tambahin required disetiap input yang wajib diisi -->
					 
					<!-- pertama, karena Content kemungkinan isinya banyak, jangan pake input -->
					<!-- tapi pake text area, dan diusahaakan di database content itu tipenya bukan varchar tapi text -->
					Content : <br /><textarea name="content" ></textarea> <br />
					 <!-- <input type="text" name="content" required><br> -->
					<p>Wajib diisi</p>
					<input class="btn btn-primary" type="submit" value="simpan">

			</form>
	</div>

<?php 
	include "modul/layout/footer.php";
 ?>