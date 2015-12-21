<?php 
	include "modul/layout/header.php";
	include "modul/layout/navbar.php";
 ?>
 <div class="container">
	 <h2>Manajemen Kategori</h2>
	 <a class="btn btn-primary" href="?modul=kategori&action=create_form">Insert Data</a>
	 <table class="table table-bordered">
	 	<tr>
	 		<th>No</th>
	 		<th>Nama Kategori</th>
	 		<th>Description</th>
	 		<th>Action</th>
	 	</tr>

	 	<?php 
	 		include "config/koneksi.php";

	 		$tampil = "SELECT * FROM kategori ORDER BY id";
	 		$query = mysqli_query($konek, $tampil);
	 		$no = 1;
	 		while ($r=mysqli_fetch_array($query)) {
	 			echo "<tr>
	 				<td>$no</td><td>$r[nama_kategori]</td><td>$r[content]</td>
	 				<td>
	 				<a class='btn btn-primary' href='?modul=kategori&action=edit_form&id=".$r["id"]."' role='button'>Edit</a>
	 				<a  class='btn btn-primary delete' href='?modul=kategori&action=delete_process&id=".$r["id"]."' role='button'>Delete</a>
	 				</td>
	 			</tr>";

	 		
	 			$no++;
	 		}
	 		

	 	 ?>
	 </table>

 </div>
 <?php 
	include "modul/layout/footer.php";