<?php

include '../konfigurasi/config.php';
include '../konfigurasi/function.php';
include '../fragment/header.php';

?>

<header>
<h1>Edit Barang</h1>	
</header>

<?php

include '../fragment/menu.php';

$idlama=$_GET['id'];

if (isset($_POST['submit'])) {
	$id= $_POST['id'];
	$id2= $_POST['id2'];
	$kategori= $_POST['kategori'];
	$nama_barang= $_POST['nama_barang'];
	$harga= $_POST['harga'];
	$stok= $_POST['stok'];
	$suplier= $_POST['suplier'];



	$con = connect_db();
	$query = "UPDATE `barang` SET `id` = '".$id."', `kategori` = '".$kategori."', `nama_barang` = '".$nama_barang."', `harga` = '".$harga."', `stok` = '".$stok."', `suplier` = '".$suplier."' WHERE `barang`.`id` = '".$id2."'";
	$result = execute_query($con,$query);
	
	if (mysqli_affected_rows($con)!=0) {
		header('location:index.php');
	}else{
		header('location:index.php');
	}
}else{
	$con = connect_db();
	$query = "SELECT * FROM barang WHERE id='".$_GET['id']."'";
	$result = execute_query($con,$query);
	$data = mysqli_fetch_array($result);
}

?>

<main>
	<form action="" method="post">
		<input  class="form-control"  type="hidden" value="<?=$data['id'];?>" name="id2">
		<div  class="form-group">
			<label>ID : <input  class="form-control"  type="text" value="<?=$data['id'];?>" name="id" id="id" required="required"></label>	
		</div>		
		<div  class="form-group">
			<label>kategori : <input  class="form-control"  type="text" value="<?=$data['kategori'];?>" name="kategori" id="kategori" required="required"></label>	
		</div>	
		<div  class="form-group">
			<label>nama_barang : <input  class="form-control"  type="text" value="<?=$data['nama_barang'];?>" name="nama_barang" id="nama_barang" required="required"></label>	
		</div>	
		<div  class="form-group">
			<label>harga : <input  class="form-control"  type="text" value="<?=$data['harga'];?>" name="harga" id="harga" required="required"></label>	
		</div>	
		<div  class="form-group">
			<label>stok : <input  class="form-control"  type="text" value="<?=$data['stok'];?>" name="stok" id="stok" required="required"></label>	
		</div>	
		<div  class="form-group">
		<label>suplier : <select  name="suplier" required="required">
				<?php
					$con = connect_db();
					$query = "SELECT * FROM suplier";
					$result = execute_query($con,$query);
					while ($suplier = mysqli_fetch_array($result)) {
						$selected = "";
						if($suplier['nama']==$data['suplier']){
							$selected = "selected";
						}

				?>
					<option <?=$selected;?> value="<?=$suplier['nama'];?>"><?=$suplier['nama'];?></option>
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