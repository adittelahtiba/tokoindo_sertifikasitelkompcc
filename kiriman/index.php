<html>
<head>
	<meta charset="utf-8">
	<title>Gudang</title>
</head>
<body>
	<h1>Gudang</h1>
	<?php
		include '../konfigurasi/config.php';
		include '../konfigurasi/function.php';
		include '../fragment/header.php';
		include '../fragment/menu.php';
		
		if (isset($_POST['submit'])) {
			$id = $_POST['id'];
			$jumlah= $_POST['jumlah'];

			$con = connect_db();
			$query = "UPDATE barang SET stok=(stok-".$jumlah.") WHERE id='".$id."'";
			$result = execute_query($con,$query);

		}

	?>
	<h3>Gudang :</h3>
	<form action="" method="post">
		<div>
			<table><tr><td>
				Nama Barang :
				<select  name="id" required="required">
				<?php
					$con = connect_db();
					$query = "SELECT * FROM barang";
					$result = execute_query($con,$query);
					while ($barang = mysqli_fetch_array($result)) {
				?>
					<option value="<?=$barang['id'];?>"><?=$barang['nama_barang'];?></option>
				<?php } ?>
				</select>
			Jumlah :<input type="text" name="jumlah">
			Nama Gerai :<input type="text" name="gerai">
			</td></tr></table>	
			<button class="btn btn-success" type="submit" value="simpan" name="submit" id="submit">Kurangi Stok</button>
		</div>
		
	</form>
<h3>Daftar Barang</h3>
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
			</tr>
				<?php 
					}
				?>
		</tbody>
	</table>
<?php

include '../fragment/footer.php';
	?>
</body>
</html>