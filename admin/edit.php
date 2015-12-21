<?php
	include "../config/koneksi.php";

	$edit ="SELECT * FROM halaman WHERE page='$_GET[id]'";
	$hasil = mysqli_query($konek, $edit);
	$r = mysqli_fetch_array($hasil);

	echo"

<html>
<head>
	<title>edit halaman</title>
	<script src='//cdn.ckeditor.com/4.5.6/standard/ckeditor.js'></script>
</head>
<body>
	<h2>Edit Halaman</h2>
	
	<form method='POST' action='update.php'>
	<input type='hidden' name='id' value='$r[page]'>
		
		Page Name: <input type='text' name='page' value='$r[page]'><br>
		
		Content : <br /><textarea name='content' value='$r[content]'>$r[content]</textarea> <br />
		
		<p>Wajib diisi</p>
		<input type='submit' value='update'>


	

	</form>
	    <script>
            CKEDITOR.replace( 'content' );
        </script>

</body>
</html>




	";

	
?>