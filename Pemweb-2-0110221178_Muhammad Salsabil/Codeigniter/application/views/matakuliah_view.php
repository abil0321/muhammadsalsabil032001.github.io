<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="col-md-12 mt-5">
		<h3 class="">
			Daftar Matakuliah
		</h3>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>KODE</th>
					<th>Nama</th>
					<th>SKS</th>
				</tr>
			</thead>
			<tbody>

				<?php
 $nomor=1;
 foreach($list_mapel as $mapel){
 ?>
				<tr>
					<td><?=$nomor?></td>
					<td><?=$mapel->kode?></td>
					<td><?=$mapel->nama?></td>
					<td><?=$mapel->sks?></td>
				</tr>
				<?php
 $nomor++;
 }
 ?>
			</tbody>
		</table>
	</div>
</body>

</html>
