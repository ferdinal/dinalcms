
<?php 
	include "modul/layout/header.php";
	include "modul/layout/navbar.php";
 ?>
 <h2>Edit Halaman</h2>
 <form method='POST' action='?modul=halaman&action=edit_process'>
 <?php
	include "config/koneksi.php";

	$edit ="SELECT * FROM halaman WHERE id='$_GET[id]'";
	$hasil = mysqli_query($konek, $edit);
	$r = mysqli_fetch_array($hasil);
?>
		<input type='hidden' name='id' value='<?php echo $r['id']; ?>'>
		Page Name: <input type='text' name='page' value='<?php echo $r['page']; ?>'><br>
		Content : <br /><textarea name='content'><?php echo $r['content']; ?></textarea> <br />
		<p>Wajib diisi</p>
		<input type='submit' value='update'>
	</form>
<script>
            CKEDITOR.replace( 'content' );
        </script>
<?php 
	include "modul/layout/footer.php";
 ?>