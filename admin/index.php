<?php

include '../konfigurasi/config.php';
include '../konfigurasi/function.php';
include '../fragment/header.php';
include '../fragment/menu.php';

?>

<main>
	<h3>Daftar Barang</h3> <small><i><font color="red">Tabel Suplier dibawah</font></i></small><hr>
	<a class="btn btn-success pull-right" style="margin-bottom: 20px" href="tambahbrg.php" title="">Tambah Barang</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Kategori</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Suplier</th>
				<th>Aksi</th>
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
				<td><?=$data['id'];?></td>
				<td><?=$data['kategori'];?></td>
				<td><?=$data['nama_barang'];?></td>
				<td><?=$data['harga'];?></td>
				<td><?=$data['stok'];?></td>
				<td><?=$data['suplier'];?></td>
				<td>
					<a class="btn btn-sm btn-warning" href="editbrg.php?id=<?=$data['id'];?>" title="">edit</a>
					<a class="btn btn-sm btn-danger" onclick="return confirm('akan menghapus data?')" href="hapusbrg.php?id=<?=$data['id'];?>" title="">hapus</a>
				</td>
			</tr>
				<?php 
					}
				?>
		</tbody>
	</table>

	<br><hr><br>

	<h3>Daftar Suplier</h3>
	<a class="btn btn-success pull-right" style="margin-bottom: 20px" href="tambahsp.php" title="">Tambah Suplier</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID Suplier</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>KOTA</th>
				<th>TELEPON</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
				<?php
					$con = connect_db();
					$query = "SELECT * FROM suplier";
					$result = execute_query($con,$query);
					while ($data2 = mysqli_fetch_array($result)) {
				?>

			<tr>
				<td><?=$data2['id_suplier'];?></td>
				<td><?=$data2['nama'];?></td>
				<td><?=$data2['alamat'];?></td>
				<td><?=$data2['kota'];?></td>
				<td><?=$data2['telepon'];?></td>
				<td>
					<a class="btn btn-sm btn-warning" href="editsp.php?id=<?=$data2['id_suplier'];?>" title="">edit</a>
					<a class="btn btn-sm btn-danger" onclick="return confirm('akan menghapus data?')" href="hapussp.php?id=<?=$data2['id_suplier'];?>" title="">hapus</a>
				</td>
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