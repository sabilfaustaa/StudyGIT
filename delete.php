<!-- Muhamad Sabil Fausta -->

<?php 
	$accept
	$hapus = 'Hapus data ?';
	if($accept = 'ya'){
		echo "Data Berhasil dihapus !";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Delete Data</title>
	</head>
	<body>
		<span><?= $hapus ?></span>
		<button>Ya</button>
		<button>Tidak</button>
	</body>
</html>