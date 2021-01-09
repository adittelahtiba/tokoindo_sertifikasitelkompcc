<?php

include '../konfigurasi/config.php';
include '../konfigurasi/function.php';
include '../fragment/header.php';

?>

<header>
<h1>Tambah Barang</h1>	
</header>

<?php

include '../fragment/menu.php';

if (isset($_POST['submit'])) {
	$id= $_POST['id'];
	$kategori= $_POST['kategori'];
	$nama_barang= $_POST['nama_barang'];
	$harga= $_POST['harga'];
	$stok= $_POST['stok'];
	$suplier= $_POST['suplier'];


	$con = connect_db();
	$query = "INSERT INTO `barang`(`id`, `kategori`, `nama_barang`, `harga`, `stok`, `suplier`) VALUES 
	('".$id."','".$kategori."','".$nama_barang."',".$harga.",".$stok.",'".$suplier."')";
	$result = execute_query($con,$query);
	
	if (mysqli_affected_rows($con)!=0) {
		header('location:index.php');
	}else{
		echo "gagal input data";
	}
}

?>

<main>
	<form action="" method="post">
		<div  class="form-group">
			<label>ID : <input  class="form-control"  type="text" name="id" id="id" required="required"></label>	
		</div>		
		<div  class="form-group">
			<label>kategori : <input  class="form-control"  type="text" name="kategori" id="kategori" required="required"></label>	
		</div>	
		<div  class="form-group">
			<label>nama_barang : <input  class="form-control"  type="text" name="nama_barang" id="nama_barang" required="required"></label>	
		</div>	
		<div  class="form-group">
			<label>harga : <input  class="form-control"  type="text" name="harga" id="harga" required="required"></label>	
		</div>	
		<div  class="form-group">
			<label>stok : <input  class="form-control"  type="text" name="stok" id="stok" required="required"></label>	
		</div>	
		<div  class="form-group">
		<label>suplier : <select name="suplier" required="required">
				<?php
					$con = connect_db();
					$query = "SELECT * FROM suplier";
					$result = execute_query($con,$query);
					while ($suplier = mysqli_fetch_array($result)) {
				?>
					<option value="<?=$suplier['alamat'];?>"><?=$suplier['nama'];?></option>
				<?php } ?>
				</select>
			</label>	
			</div>
		<button class="btn btn-primary" type="submit" value="simpan" name="submit" id="submit">Simpan</button>
	</form>
</main>

<?php

include '../fragment/footer.php';

?>