<?php

include '../konfigurasi/config.php';
include '../konfigurasi/function.php';
include '../fragment/header.php';

?>

<header>
<h1>Edit Suplier</h1>	
</header>

<?php
include '../fragment/menu.php';
if (isset($_POST['submit'])) {
	$id= $_POST['id'];
	$id_suplier= $_POST['id_suplier'];
	$nama= $_POST['nama'];
	$alamat= $_POST['alamat'];
	$kota= $_POST['kota'];
	$telepon= $_POST['telepon'];

	// var_dump($_POST);die;

	$con = connect_db();
	$query = "UPDATE `suplier` SET `id_suplier` = '".$id_suplier."', `nama` = '".$nama."', `alamat` = '".$alamat."', `kota` = '".$kota."', `telepon` = '".$telepon."' WHERE `suplier`.`id_suplier` = '".$id."'";
	$result = execute_query($con,$query);
	
	if (mysqli_affected_rows($con)!=0) {
		header('location:index.php');
	}else{
		header('location:index.php');
	}
	die;

}else if (isset($_GET['id'])) {
	
	$con = connect_db();
	$query = "SELECT * FROM suplier WHERE id_suplier='".$_GET['id']."'";
	$result = execute_query($con,$query);
	
	$data = mysqli_fetch_array($result);

?>

<main>
	<form action="" method="post">
		<input type="hidden" name="id" id="id" value="<?=$data['id_suplier'];?>">
		<div>
			<label>id : <input type="text" name="id_suplier" id="id" value="<?=$data['id_suplier'];?>" required="required"></label>	
		</div>	
		<div>
			<label>nama : <input type="text" name="nama" id="nama" value="<?=$data['nama'];?>" required="required"></label>	
		</div>		
		<div>
			<label>alamat : <input type="text" name="alamat" id="alamat" value="<?=$data['alamat'];?>" required="required"></label>	
		</div>		
		<div>
			<label>kota : <input type="text" name="kota" id="kota" value="<?=$data['kota'];?>" required="required"></label>	
		</div>	
		<div>
			<label>telepon : <input type="text" name="telepon" id="telepon" value="<?=$data['telepon'];?>" required="required"></label>	
		</div>	
		<button type="submit" value="simpan" name="submit" id="submit">Simpan</button>
	</form>
</main>

<?php
}else{
	header('location:index.php');
}

include '../fragment/footer.php';

?>