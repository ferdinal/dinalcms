<?php 
	include "modul/layout/navbar.php";
	include "modul/layout/header.php";
 ?>
 <div class="container">
	 <h2>Edit Data</h2>
	 <form method='POST' action='?modul=kategori&action=edit_process'>
	 <?php 
	 	include "config/koneksi.php";
	 	$edit = "SELECT * FROM kategori WHERE id='$_GET[id]'";
	 	$query = mysqli_query($konek, $edit);
	 	$r = mysqli_fetch_array($query);
	  ?>
	 	<div class="form-group">
	 				<input type='hidden' name='id' value='<?php echo $r['id']; ?>'>
				    <b>Nama Kategori :</b></br>
				    <input type='text' class='form-control' name='nama_kategori' value='<?php echo $r['nama_kategori']; ?>' required></br>
				    <b>Description :</b></br><textarea name='content'><?php echo $r['content']; ?></textarea></br>
				    </br>
				    <input class="btn btn-primary" type='submit' value='Update'>	
		</div>
	 </form>


 </div>
 <script>
            CKEDITOR.replace( 'content' );
        </script>
 <?php 
 	include "modul/layout/footer.php";
  ?>