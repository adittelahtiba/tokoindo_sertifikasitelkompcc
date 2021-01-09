<html>
<head>
	<meta charset="utf-8">
	<title>Gudang</title>
</head>
<body>
	<h1>Gudang</h1>
	<?php
		include 'konfigurasi/config.php';
		include 'konfigurasi/function.php';
		include 'fragment/header.php';
		include 'fragment/menu.php';
		
	?>
	<h3>Gudang :</h3>
	<form action="" method="post">
		<div>
			<label>Nama Barang : <input type="text" name="namabrg" id="namabrg" placeholder="Nama Barang" required="required"></label>	
			<button class="btn btn-success" type="submit" value="simpan" name="submit" id="submit">Cari</button>
		</div>
		
	</form>
<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Kategori</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Stok</th>
				<th>Suplier</th>
			</tr>
		</thead>
		<tbody>
				<?php
					if (isset($_POST['submit'])) {
						$nama = $_POST['namabrg'];
						$con = connect_db();
						$query = "SELECT * FROM barang where nama_barang like '%".$nama."%'";
						$result = execute_query($con,$query);
					}else{
						$con = connect_db();
						$query = "SELECT * FROM barang";
						$result = execute_query($con,$query);
					}
					while ($data = mysqli_fetch_array($result)) {
				?>

			<tr>
				<td><?=$data['id'];?></td>
				<td><?=$data['kategori'];?></td>
				<td><?=$data['nama_barang'];?></td>
				<td><?=$data['harga'];?></td>
				<td><?=$data['stok'];?></td>
				<td><?=$data['suplier'];?></td>
			</tr>
				<?php 
					}
				?>
		</tbody>
	</table>

<?php

include 'fragment/footer.php';
	?>
</body>
</html>