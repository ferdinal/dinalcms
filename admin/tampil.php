<?php 
	include "../modul/layout/header.php";
	include "../modul/layout/navbar.php";
 ?>
<div class="container">
	<h2> Manajemen Page </h2>
<form method="post" action="form_tambah.php">
	<input class="btn btn-primary" type="submit" value="data insert">
</form>
<!-- biar ga bingung tablenya dikasih border -->
	<table class="table table-bordered">
		<tr>
			<th>no</th>
			<th>page</th>
			<th>content</th>
			<th>action</th>
		</tr>
		<?php
			include "../config/koneksi.php";
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
			 		<td><a class='btn btn-primary' href = 'edit.php?id=".$r["page"]."' role='button'> edit </a>
			 		<a class='btn btn-primary' href = 'confirm_del.php?id=".$r["id"]."' role='button'>delete</a></td>
			 	</tr>";
			 	
			 	$no++;

			 }
		?>
	</table> 
</div>

<?php 
	include "../modul/layout/footer.php";
 ?>

	<!-- sip lanjutkan  didi lo msih remote-->
