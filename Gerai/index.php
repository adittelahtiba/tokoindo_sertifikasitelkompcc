<?php

include '../konfigurasi/config.php';
include '../konfigurasi/function.php';
include '../fragment/header.php';
include '../fragment/menu.php';

?>

<main>
	<h3>List Gerai</h3>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Gerai</th>
			</tr>
		</thead>
		<tbody>
				<?php
					$con = connect_db();
					$query = "SELECT * FROM gerai";
					$result = execute_query($con,$query);
					while ($data = mysqli_fetch_array($result)) {
				?>

			<tr>
				<td><?=$data['nama_gerai'];?></td>
			</tr>
				<?php 
					}
				?>
		</tbody>
	</table>

	<h3>Jumlah Stok Barang</h3>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nama Barang</th>
				<th>Stok</th>
			</tr>
		</thead>
		<tbody>
				<?php
					$con = connect_db();
					$query = "SELECT * FROM barang";
					$result = execute_query($con,$query);
					while ($data = mysqli_fetch_array($result)) {
				?>

			<tr>
				<td><?=$data['nama_barang'];?></td>
				<td><?=$data['stok'];?></td>
			</tr>
				<?php 
					}
				?>
		</tbody>
	</table>
</main>

<?php

include '../fragment/footer.php';

?>