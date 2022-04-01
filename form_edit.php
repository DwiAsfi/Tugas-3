
<!DOCTYPE html>
<html>
	<head>
    	<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Edit</title>
	</head>
	<body>
		<div class="w-50 mx-auto mt-5">
			<?php
			include 'koneksi.php';
			$id = $_GET['id'];
			$sql = "SELECT * FROM tbl_121 WHERE kode_buku='$id'";
			$hasil = mysqli_query($koneksi, $sql);

			if (!$hasil) {
				echo "query salah";
			}
			?>

			<h1>Form Edit Daftar Buku</h1>

			<?php
			while ($row = mysqli_fetch_array($hasil))
			{
			?>
				<form method="post" action="update.php" class=" border p-3 mt-3">
					<input type="hidden" name="kode_buku" value="<?php echo $row['kode_buku'] ?>">
					<label>Judul Buku : </label>
					<input type="text" name="JudulBuku" value="<?php echo $row['JudulBuku'] ?>" class="form-control"><br>
					<label>Nama Penulis : </label>
					<input type="text" name="Penulis" value="<?php echo $row['Penulis'] ?>" class="form-control"><br>
					<label>nama Penerbit : </label>
					<input type="text" name="Penerbit" value="<?php echo $row['Penerbit'] ?>" class="form-control"><br>
					<label>Jumlah Halaman : </label>
					<input type="text" name="JumlahHalaman" value="<?php echo $row['JumlahHalaman'] ?>" class="form-control"><br>
					<input type="submit" class="btn btn-success" value="Update">
				</form>
			<?php  }
			?>
	</body>
</html>