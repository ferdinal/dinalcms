<?php 
	include "modul/layout/header.php";
	include "modul/layout/navbar.php";
 ?>
<div class="container">
	<h2> Manajemen Page </h2>
<a href="?modul=halaman&action=create_form" class="btn btn-primary">Create data</a>
<!-- biar ga bingung tablenya dikasih border -->
	<table class="table table-bordered">
		<tr>
			<th>no</th>
			<th>page</th>
			<th>content</th>
			<th>action</th>
		</tr>
		<?php
			include "config/koneksi.php";
			$query = "SELECT * FROM halaman ORDER BY id";
			$tampil = mysqli_query($konek, $query);
			$no=1;
			 while ($r=mysqli_fetch_array($tampil)) {
			 	// yang ini biasain variable jangan langung di echo
			 	// pake titik, begitu (supaya di editor kaya sublime, notepad++ keliatan warnanya beda)
			 	// kalo echo pake kutip dua " didalem echo pake kutip satu aja '
			 	// begitu juga sebaliknya

			 	echo "<tr>
			 		<td>$no</td><td>$r[page]</td><td>$r[content]</td>
			 		<td><a class='btn btn-primary' href='?modul=halaman&action=edit_form&id=".$r["id"]."' role='button'> edit </a>
			 		<a class='btn btn-primary delete' href='?modul=halaman&action=delete_process&id=".$r["id"]."' role='button'>delete</a></td>
			 	</tr>";
			 	
			 	$no++;

			 }
		?>
	</table> 
</div>

<?php 
	include "modul/layout/footer.php";
 ?>

	<!-- sip lanjutkan  didi lo msih remote-->
