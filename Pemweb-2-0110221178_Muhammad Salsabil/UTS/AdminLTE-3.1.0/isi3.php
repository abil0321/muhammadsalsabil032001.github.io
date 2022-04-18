<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title">Nilai Siswa</h3>

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
        <h3 class="text-center mt-3">Form Input Nilai</h3>
        <div class="border border-primary rounded m-5 p-4">
          <form method="POST" action="praktikum3.php" autocomplete="off">
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div>
                  <input id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" type="text" required="required"
                    class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
              <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                  <option value="" selected disabled>Pilih</option>
                  <option value="DDP">Dasar-Dasar Pemrograman</option>
                  <option value="BDI">Basis Data 1</option>
                  <option value="WEB1">Pemrograman Web</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-archive"></i>
                    </div>
                  </div>
                  <input id="nilai_uts" name="nilai_uts" placeholder="Isi Nilai UTS" type="number" required="required"
                    class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-archive"></i>
                    </div>
                  </div>
                  <input id="nilai_uas" name="nilai_uas" placeholder="Isi Nilai UAS" type="number" required="required"
                    class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas Praktikum</label>
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-archive"></i>
                    </div>
                  </div>
                  <input id="nilai_tugas" name="nilai_tugas" placeholder="Isi Nilai Tugas" type="number"
                    required="required" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <input type="submit" value="Simpan" name="proses">
              </div>
            </div>
          </form>
        </div>

        <div class="border border-success rounded m-5 p-4">
          <?php
    require_once('libfungsi.php');
    $grade = predikat($nilai_akhir);
    $pernyataan = kelulusan($nilai_akhir);
    $predikat = grade($grade);
    $nama_matkul = matkul($_matkul);
    
?>

          <div class="row mx-2">
            <div class="col-md-6">
              <h4>
                Nama: <?= $_nama?>
              </h4>
            </div>
            <div class="col-md-6" style="display: flex; justify-content: right;">
              <table width="70%" class="text-left">
                <tr>
                  <td>
                    <h5>Mata Kuliah</h5>
                  </td>
                  <td>
                    <h5>:</h5>
                  </td>
                  <td>
                    <h5><?= $nama_matkul?></h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Grading</h5>
                  </td>
                  <td>
                    <h5>:</h5>
                  </td>
                  <td>
                    <h5><?= $grade?></h5>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th>Penilaian</th>
                <th></th>
                <th>Nilai</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><?= $_uas;?></td>
              </tr>
              <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><?= $_uts;?></td>
              </tr>
              <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><?= $_tugas;?></td>
              </tr>
              <tr class="<?= $table?>">
                <td>Nilai Akhir</td>
                <td>:</td>
                <td><?= $nilai_akhir;?></td>
              </tr>

            </tbody>
          </table>
          <h3 class="text-right">Predikat : <?= $predikat; ?></h3>
          <h3 class="text-right">Dinyatakan : <?= $pernyataan; ?></h3>
          <h6 class="text-center py-3 mt-5" style="background-color: #5eff89;">Proses: <?= $_proses?></h6>

        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Tugas Structur and Function</h4>
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
        <h3 class="card-title">Integrasi AdminLTE</h3>

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
      <a href="startbootstrap-sb-admin-gh-pages/index.php" target="blank" class="card-body p-3">
        <h5>Bootstrap</h5>
      </a>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Tugas integrasi Admin LTE</h4>
      </div>
      <!-- /.card-footer-->
    </div>

    <!-- /.card -->
  </section>
</div>
