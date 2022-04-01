<!doctype html>
<html lang="en">
	<head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    	<title>Data Buku</title>
  	</head>
  	<body>
  		<div class="container">
    		<h1 style="text-align: center;">Daftar Buku Perpustakaan</h1>
    		<a href="form_buku.php" button type="button" class="btn btn-success"> + Tambah Data</a>
			<table class="table table-striped table-hover mt-3">
				<thead>
					<tr style="text-align: center;">
						<td><b>Kode Buku</b></td>
						<td><b>Judul Buku</b></td>
						<td><b>Penulis</b></td>
						<td><b>Penerbit</b></td>
						<td><b>Jumlah Halaman</b></td>
						<td><b>Action</b></td>
				</tr>
				</thead>
				<?php
				include "koneksi.php";
				$sql = "SELECT * FROM tbl_121";
				$hasil = mysqli_query($koneksi, $sql);
				while ($row = mysqli_fetch_array($hasil)) {
				?>
				<tr style="text-align: center;">
					<td><?= $row['kode_buku'];?></td>
					<td><?= $row['JudulBuku'];?></td>
					<td><?= $row['Penulis'];?></td>
					<td><?= $row['Penerbit'];?></td>
					<td><?= $row['JumlahHalaman'];?></td>
					<td>
						<div class="row">
							<div class="col d-flex justify-content-center">
								<a href = "form_edit.php?id=<?=$row['kode_buku'] ?>"button type="button" class="btn btn-outline-primary"> Edit </a>
							</div>
							<div class="col d-flex justify-content-center">
								<a href = "delete.php?id=<?=$row['kode_buku'] ?>"button type="button" class="btn btn-outline-danger"> Delete </a>
							</div>
						</div>
					</td>
				</tr>
				<?php }
				?>
			</table>
		</div>
  	</body>
</html>