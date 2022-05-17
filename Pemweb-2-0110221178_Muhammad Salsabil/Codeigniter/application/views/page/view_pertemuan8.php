<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<form autocomplete="off" action="" method="GET">
		<div class="form-group row">
			<label for="nim" class="col-4 col-form-label">NIM</label>
			<div class="col-8">
				<input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control"
					required="required">
			</div>
		</div>
		<div class="form-group row">
			<label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label>
			<div class="col-8">
				<input id="nama" name="nama" placeholder="Masukkan Nama Mahasiswa" type="text" required="required"
					class="form-control">
			</div>
		</div>
		<div class="form-group row">
			<label class="col-4">Jenis Kelamin</label>
			<div class="col-8">
				<div class="custom-control custom-radio custom-control-inline">
					<input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki-laki"
						required="required">
					<label for="jk_0" class="custom-control-label">Laki-Laki</label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan"
						required="required">
					<label for="jk_1" class="custom-control-label">Perempuan</label>
				</div>
			</div>
		</div>
		<div class="form-group row">
			<label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
			<div class="col-8">
				<input id="tgl_lahir" name="tgl_lahir" type="text" class="form-control" required="required">
			</div>
		</div>
		<div class="form-group row">
			<label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
			<div class="col-8">
				<input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" required="required">
			</div>
		</div>
		<div class="form-group row">
			<label for="pr_studi" class="col-4 col-form-label">Program Studi</label>
			<div class="col-8">
				<select id="pr_studi" name="pr_studi" class="custom-select" required="required">
					<option value="SI">SI</option>
					<option value="TI">TI</option>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="ipk" class="col-4 col-form-label">IPK</label>
			<div class="col-8">
				<input id="ipk" name="ipk" placeholder="Masukkan IPK" type="text" class="form-control"
					required="required">
			</div>
		</div>
		<div class="form-group row">
			<div class="offset-4 col-8">
				<button name="submit" type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
</body>

</html>
