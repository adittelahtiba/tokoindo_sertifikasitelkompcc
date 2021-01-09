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
	$nama= $_POST['nama'];
	$alamat= $_POST['alamat'];
	$kota= $_POST['kota'];
	$telepon= $_POST['telepon'];


	$con = connect_db();
	$query = "INSERT INTO `suplier`(`id_suplier`, `nama`, `alamat`, `kota`, `telepon`) VALUES ('".$id."','".$nama."','".$alamat."','".$kota."','".$telepon."')";
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
			<label>ID Suplier: <input  class="form-control"  type="text" name="id" id="id" required="required"></label>	
		</div>		
		<div  class="form-group">
			<label>nama : <input  class="form-control"  type="text" name="nama" id="nama" required="required"></label>	
		</div>	
		<div  class="form-group">
			<label>alamat : <input  class="form-control"  type="text" name="alamat" id="alamat" required="required"></label>	
		</div>	
		<div  class="form-group">
			<label>kota : <input  class="form-control"  type="text" name="kota" id="kota" required="required"></label>	
		</div>	
		<div  class="form-group">
			<label>telepon : <input  class="form-control"  type="text" name="telepon" id="telepon" required="required"></label>	
		</div>
		<button class="btn btn-primary" type="submit" value="simpan" name="submit" id="submit">Simpan</button>
	</form>
</main>

<?php

include '../fragment/footer.php';

?>