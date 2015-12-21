<?php
	include "modul/layout/navbar.php"; 
	include "modul/layout/header.php";
 ?>
<div class="container">
	<h2>Masukan Data</h2></br>

	<form method="POST" action="?modul=kategori&action=create_process">
		<div class="form-group">
				    <label for="exampleInputText1">Nama Kategori :</label>
				    <input type="text" class="form-control" id="exampleInputText1" name="nama_kategori" required></br>
				    <label for="exampleInputText1"> Description :</label>
				    </br><textarea name="content"></textarea></br>
				    <p>Wajib Diisi</p>
				    <input class="btn btn-primary" type="submit" value="save">	
		</div>


	</form>
</div>

<?php 
	include "modul/layout/footer.php";
 ?>