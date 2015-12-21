<!DOCTYPE html>
<html>
<head>
	<title>admin_manage</title>
	<link rel="stylesheet" type="text/css" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/bower_components/jquery/dist/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Hapus Data</h2>

		<strong>apakah anda akan menghapus salah satu data dibawah ini...? <br>pilih kembali data..!</strong>
		<table class="table table-bordered">
			<tr>
				<th>id</th>
				<th>page</th>
				<th>content</th>
				<th>action</th>
			</tr>
			<?php 


				include"../config/koneksi.php";
				$query = "SELECT * FROM halaman where id ='$_GET[id]' limit 1";
				$data = mysqli_query($konek, $query);
				
				echo "<a class='btn btn-primary' href='tampil.php' role='button'>batal</a>";
				while ( $r=mysqli_fetch_array($data)) {
					
				
				echo 
				"<tr><td>$r[id]</td><td>$r[page]</td><td>$r[content]</td>
				<td><a class='btn btn-primary' href='delete.php?id=".$r["id"]."' role='button'>delete</a></td>
				</tr>";
				}
			 ?>
		</table>
	</div>
</body>
</html>