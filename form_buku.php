<!DOCTYPE html>
<html>
	<head>
    	<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Form Tambah Daftar Buku</title>
	</head>
	<body>
		<div class="w-50 mx-auto mt-5">
			<h1>Form Tambah Daftar Buku</h1>
			<form action="action.php" method="post" class=" border p-3 mt-3">
				<label>Judul Buku : </label>
				<input type="text" name="JudulBuku" class="form-control"><br>
				<label>Nama Penulis : </label>
				<input type="text" name="Penulis" class="form-control"><br>
				<label>Nama Penerbit : </label>
				<input type="text" name="Penerbit" class="form-control"><br>
				<label>Jumlah Halaman : </label>
				<input type="text" name="JumlahHalaman" class="form-control"><br>
				<input type="submit" class="btn btn-success" value="Tambah Data">
			</form>
		</div>
	</body>
</html>