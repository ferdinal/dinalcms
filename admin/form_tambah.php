<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
	<link rel="stylesheet" type="text/css" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
</head>
<body>
	<div class="container">
		<h2>tambah</h2>

			<form method="POST" action="input.php">
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
					<input type="submit" value="simpan">

			</form>
	</div>
		    <script>
	            CKEDITOR.replace( 'content' );
	        </script>
</body>
</html>