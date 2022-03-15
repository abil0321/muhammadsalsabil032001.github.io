<?php
require_once 'class_mahasiswa.php';
$mahasiswa1 = new Mahasiswa('122456', 'Budiman', 2019, 4.0, 'informatika');
$mahasiswa2 = new Mahasiswa('122386', 'sumanto', 2019, 2.9, 'informatika');
$mahasiswa3 = new Mahasiswa('123426', 'ahmad yani', 2019, 3.5, 'informatika');
$mahasiswa4 = new Mahasiswa('122129', 'yani', 2019, 1.9, 'informatika');

$ar_siswa = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];
?>

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

    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="color: black;">

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="navbar-toggler-icon"></span>
                </button> <a class="navbar-brand" href="#">Brand</a>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                                data-toggle="dropdown">Dropdown link</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another
                                    action</a> <a class="dropdown-item" href="#">Something else
                                    here</a>
                                <div class="dropdown-divider">
                                </div> <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" />
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </form>
                    <ul class="navbar-nav ml-md-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                                data-toggle="dropdown">Dropdown link</a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another
                                    action</a> <a class="dropdown-item" href="#">Something else
                                    here</a>
                                <div class="dropdown-divider">
                                </div> <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nim
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            Prodi
                        </th>
                        <th>
                            Tahun Angkatan
                        </th>
                        <th>
                            IPK
                        </th>
                        <th>
                            Predikat
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            $no = 1;
                            foreach ($ar_siswa as $siswa) : ?>
                    <tr>
                        <td>
                            <?= $no++?>
                        </td>
                        <td>
                            <?= $siswa->nim ?>
                        </td>
                        <td>
                            <?= $siswa->nama ?>
                        </td>
                        <td>
                            <?= $siswa->prodi ?>
                        </td>
                        <td>
                            <?= $siswa->thn_angkatan ?>
                        </td>
                        <td>
                            <?= $siswa->ipk ?>
                        </td>
                        <td>
                            <?= $siswa->predikat_ipk() ?>
                        </td>
                        <td>
                            Default
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row fixed-bottom">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <footer class="blockquote-footer">Someone famous is <cite title="Source Title">Abil</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>