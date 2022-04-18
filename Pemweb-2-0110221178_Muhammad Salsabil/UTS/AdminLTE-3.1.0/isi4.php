<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title">Persegi Panjang</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>

          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-3">
        <div class="container-fluid">
          <?php
class PersegiPanjang{
    var $p, $l;

    function __construct($p, $l)
    {
        $this->p = $p;
        $this->l = $l;
    }

    public function luasPersegiPanjang()
    {
        $panjang = $this->p;
        $lebar = $this->l;

        $luas = $panjang * $lebar;
        return $luas;
    }

    public function kelilingPersegiPanjang()
    {
        $panjang = $this->p;
        $lebar = $this->l;
        
        $keliling = 2 * ($panjang + $lebar);
        return $keliling;
    }
}

$persegi = new PersegiPanjang(5, 5);
echo "Luas Persegi Panjang dengan Panjang  ". $persegi->p. ' dan Lebar '. $persegi->l . ' adalah ' .  $persegi->luasPersegiPanjang();
?>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <h4>Tugas PHP Object Oriented Programming Next</h4>
        </div>
        <!-- /.card-footer-->
      </div>

      <!-- /.card -->
  </section>
</div>

<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title">Mahasiswa</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>

          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-3">
        <ul>
          <li>Percobaan 1</li>
          <?php
class Mahasiswa {
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;

    function __construct($nim, $nama, $thn_angkatan, $ipk, $prodi)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->thn_angkatan = $thn_angkatan;
        $this->prodi = $prodi;
        $this->ipk = $ipk;
    }

    public function predikat_ipk()
    {
        if ($this->ipk < 2.0) {
            return 'Cukup';
        } elseif ($this->ipk >= 2.0 && $this->ipk< 3.0) {
            return 'Baik';
        } elseif ($this->ipk >= 3.0 && $this->ipk< 3.75) {
            return 'Memuaskan';
        } elseif ($this->ipk >= 3.75 && $this->ipk<= 4.0) {
            return 'Cum Claude';
        }else {
            return 'ngarang kau !!';
        }
    }
}

$mahasiswa1 = new Mahasiswa('122456', 'Budiman', 2019, 4.0, 'informatika');
$mahasiswa2 = new Mahasiswa('122386', 'sumanto', 2019, 2.9, 'informatika');
$mahasiswa3 = new Mahasiswa('123426', 'ahmad yani', 2019, 3.5, 'informatika');
$mahasiswa4 = new Mahasiswa('122129', 'yani', 2019, 1.9, 'informatika');

$ar_siswa = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];
?>

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

          <br>
          <li>Percobaan 2</li>

          <?php
class NilaiMahasiswa{
    var $matakuliah, $nilai, $nim;
    function __construct($matkul, $nilai, $nim)
    {
        $this->matakuliah = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function grade()
    {
        if ($this->nilai < 36) {
            return $grade = 'E';
        } elseif($this->nilai > 35 && $this->nilai < 56) {
            return $grade = 'D';
        } elseif($this->nilai > 55 && $this->nilai < 70) {
            return $grade = 'C';
        } elseif($this->nilai > 69 && $this->nilai < 85) {
            return $grade = 'B';
        } elseif($this->nilai > 84 && $this->nilai <= 100 ) {
            return $grade = 'A';
        }else {
            return 'ngarang ko racun !!';
        }
    }

    function hasil()
    {
        if ($this->nilai < 56) {
            return 'TIDAK LULUS';
        } else {
            return 'LULUS';
        }
        
    }
}
?>

          <div class="container-fluid m-0">
            <!-- <div class="row"> -->
            <div class="row">
              <nav class="col-md-12 navbar navbar-expand-lg navbar-dark bg-dark" style="color: black;">

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
            <!-- </div> -->

            <div class="row my-3 ml-2">
              <div class="col-md-12">
                <h2>Form Nilai Ujian</h2>
              </div>
            </div>
            <div class="row p-5 mx-5">
              <div class="col-md-12">
                <form action="praktikum4.php" method="POST">
                  <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label>
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                          </div>
                        </div>
                        <input id="nim" name="nim" placeholder="NIM " type="text" class="form-control"
                          required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Pilih MK</label>
                    <div class="col-8">
                      <select id="matkul" name="matkul" class="custom-select" required="required">
                        <option value="dw">Data Warehouse</option>
                        <option value="da">Data Analiyst</option>
                        <option value="ds">Data Statistik</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nilai" class="col-4 col-form-label">Nilai</label>
                    <div class="col-8">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-sort-numeric-asc"></i>
                          </div>
                        </div>
                        <input id="nilai" name="nilai" placeholder="Nilai" type="text" class="form-control"
                          required="required">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-4 col-8">
                      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <?php
// require_once 'class_nilaimahasiswa.php';
$_nim = $_POST['nim'];
$_nilai = $_POST['nilai'];
$_matkul = $_POST['matkul'];
$_submit = $_POST['submit'];

switch ($_matkul) {
    case 'dw':
        $nama_matkul = 'Data Warehouse';
        break;
    case 'da':
        $nama_matkul = 'Data Analiyst';
        break;
    case 'ds':
        $nama_matkul = 'Data Statistik';
        break;
        
    default:
    $nama_matkul = 'Salah Pilih Kang';
        break;
}

$mahasiswa = new NilaiMahasiswa($nama_matkul, $_nilai, $_nim);
if (isset($_submit)) :
?>
            <div class="row mx-5">
              <div class="col-md-12">
                <p>Nim : <?= $_nim?></p>
                <p>Nama Matakuliah : <?= $nama_matkul?></p>
                <p>Nilai : <?= $_nilai?></p>
                <p>Hasil Ujian : <?= $mahasiswa-> grade()?></p>
                <p>Grade : <?= $mahasiswa->hasil()?></p>
              </div>
            </div>

            <?php endif?>
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
          </div>
        </ul>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Tugas PHP Object Oriented Programming Next</h4>
      </div>
      <!-- /.card-footer-->
    </div>

    <!-- /.card -->
  </section>
</div>
