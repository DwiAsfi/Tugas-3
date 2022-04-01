<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    	<title>Update</title>
  	</head>
  	<body>
  		<div class="container" align="center">
    		<?php
			include "koneksi.php";

			$id = $_POST['kode_buku'];
			$judul = $_POST['JudulBuku'];
			$penulis = $_POST['Penulis'];
			$penerbit = $_POST['Penerbit'];
			$halaman = $_POST['JumlahHalaman'];

			$sql = "UPDATE tbl_121 SET JudulBuku='$judul', Penulis='$penulis', Penerbit='$penerbit', JumlahHalaman='$halaman' WHERE kode_buku='$id'";
			$hasil = mysqli_query($koneksi, $sql);
			if (!$hasil) { ?>
				<h2>Eksekusi Gagal</h2>
				<?php }
				else { ?>
					<h2 class="mt-3">Data Telah Berhasil Diupdate<br></h2>
					<a href="dataBuku.php" button type="button" class="btn btn-success mt-3">Lihat Daftar Buku</a>
					<?php }
					?>
		</div>
  	</body>
</html>