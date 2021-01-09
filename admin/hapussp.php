<?php

include '../konfigurasi/config.php';
include '../konfigurasi/function.php';
include '../fragment/header.php';

?>

<header>
<h1>Delete Pengarang</h1>	
</header>

<?php

include '../fragment/menu.php';

if (isset($_GET['id'])) {

	$con = connect_db();
	$query = "DELETE from suplier WHERE id_suplier='".$_GET['id']."'";
	execute_query($con,$query);
	

	if (mysqli_affected_rows($con)!=0) {
		echo "Data berhasil dihapus";
	}else{
		echo "Data tidak berhasil dihapus";
	}


}else{
	header('location:index.php');
}

include '../fragment/footer.php';

?>