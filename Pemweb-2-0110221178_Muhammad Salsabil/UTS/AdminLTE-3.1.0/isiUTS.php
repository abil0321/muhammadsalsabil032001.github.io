<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title">Daftar Pasien</h3>

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
        <?php
        // require_once "class_bmiPasien.php";
        require_once "class_pasien.php";
        // require_once "class_bmi.php";

        $no = 1;
        $ps1 = new Pasien(12345, "P001", "Ahmad", "Jakarta", "10-3-2000", "ahmadyani@gmail.com", "L", 1, "3-4-2022", 169, 69.8);
        $ps2 = new Pasien(23456, "P002", "Rina", "Depok", "2-2-2001", "Rinariana@gmail.com", "P", 2, "3-5-2022", 165, 55.3);
        $ps3 = new Pasien(34567, "P003", "Lutfi", "Jogja", "3-4-2001", "Lutfinurjannah@gmail.com", "L", 3, "4-5-2022", 171, 45.2);

        $array_pasien = [$ps1, $ps2, $ps3];
        ?>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tanggal Periksa</th>
              <th scope="col">Kode Pasien</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Gender</th>
              <th scope="col">Berat (kg)</th>
              <th scope="col">Tinggi (cm)</th>
              <th scope="col">Nilai BMI</th>
              <th scope="col">Status BMI</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($array_pasien as $pasien) : ?>
            <tr>
              <th scope="row"><?= $no++; ?></th>
              <td><?= $pasien->tanggal ?></td>
              <td><?= $pasien->kode ?></td>
              <td><?= $pasien->nama ?></td>
              <td><?= $pasien->gender ?></td>
              <td><?= $pasien->berat ?></td>
              <td><?= $pasien->tinggi ?></td>
              <td><?= $pasien->nilai_bmi() ?></td>
              <td><?= $pasien->status_bmi() ?></td>
            </tr>
            <?php endforeach; ?>

      
          </tbody>
        </table>


      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Project UTS</h4>
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
        <h3 class="card-title">Form Pengukuran BMI</h3>

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
        <h2>body</h2>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Project UTS</h4>
      </div>
      <!-- /.card-footer-->
    </div>

    <!-- /.card -->
  </section>
</div>
