<!doctype html>
<html lang="en">
	<head>
    	<!-- Required meta tags -->
	    <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    	<title>Action</title>
  	</head>
  	<body>
  		<div class="container" align="center">
			<?php
			include "koneksi.php";

			$judul = $_POST['JudulBuku'];
			$penulis = $_POST['Penulis'];
			$penerbit = $_POST['Penerbit'];
			$halaman = $_POST['JumlahHalaman'];

			$sql = "INSERT INTO tbl_121 VALUES (null, '$judul', '$penulis', '$penerbit', '$halaman')";
			$hasil = mysqli_query($koneksi, $sql);
			if (!$hasil) { ?>
				<h2>Eksekusi Gagal</h2>
				<?php }
				else { ?>
					<h2 class="mt-3">Data Telah Berhasil Ditambahkan<br></h2>
					<a href="dataBuku.php" button type="button" class="btn btn-success mt-3">Lihat Daftar Buku</a>
					<?php }
					?>
		</div>
  	</body>
</html>