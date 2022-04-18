<div class="row">
  <?php
// require_once 'class_account.php';

use Fruit as GlobalFruit;

class Account{
    public $nomor, $saldo;
    function __construct($no, $saldo)
    {
        $this->nomor = $no;
        $this->saldo = $saldo;
    }

    public function deposit($uang)
    {
        $this->saldo = ($this->saldo + $uang);
    }

    public function withdraw($uang)
    {
        $this->saldo = $this->saldo - $uang;
    }

    public function cetak()
    {
        echo 'Nomor ' . $this->nomor . ', Saldonya : ' . $this->saldo . '<br><br>';
    }
}

class BankAccount extends Account{
    public $costumer;

    function __construct($no, $saldo_awal, $cust)
    {
        parent::__construct($no, $saldo_awal);
        $this->costumer = $cust;
    }

    function cetak()
    {
        parent::cetak();
        echo ', Costumer : ' . $this->costumer . '<br><br>';
    }

    function transfer($obj_account, $uang)
    {
        $obj_account->deposit($uang);
        $this->withdraw($uang);
    }
}

// $awal = new Account()
$bnk1 = new BankAccount('C001', 6000000, 'Ahmad');
$bnk2 = new BankAccount('C002', 5350000, 'Budi');
$bnk3 = new BankAccount('C003',2500000, 'Kurniawan');
$array1 = [$bnk1, $bnk2, $bnk3];

$bnk1->deposit(1000000);
$bnk1->transfer($bnk2, 500000);
$bnk1->transfer($bnk3, 1500000);
// $bnk1->cetak();
$bnk1->withdraw(2500000);

$array2 = [$bnk1, $bnk2, $bnk3];

?>
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title">Bank</h3>

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
        <h1>Dafter Account</h1>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">No.Account</th>
              <th scope="col">Pemilik</th>
              <th scope="col">Saldo</th>
            </tr>
          </thead>
          <tbody>
            <?php
                // require_once 'class_bankAccount.php';
                $no = 1;
                foreach ($array1 as $arc) : ?>
            <tr>
              <th scope="row"><?= $no++;?></th>
              <td><?= $arc->nomor?></td>
              <td><?= $arc->costumer?></td>
              <td><?= $arc->saldo?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Tugas Object Oriented Programming PHP</h4>
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
        <h3 class="card-title">Dispenser</h3>

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
class Dispenser{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaMinuman;

    function __construct($vol, $vgel, $harga){
        $this->volume = $vol;
        $this->volumeGelas = $vgel;
        $this->hargaSegelas = $harga;

    }

    public function beli($segelas)
    {
        $isi = ($segelas * $this->volumeGelas);

        if ($this->volume > 0) {
            $this->volume = ($this->volume - $isi);
            echo "Pelanggan telah membeli $segelas gelas yang gelasnya berisi $this->volumeGelas ml.<br>Jadi sisa yang belum terjual ada $this->volume ml <br><br>";
        }
        else{
            echo "<b style=color:red>Maaf minuman telah habis, Tunggu pengisian selanjutnya !!!</b> <br><br>";
            // $this->volume = ($this->volume + $this->volume);
        }

    }

    public function refill($isi)
    {
        echo "<b style=color:green>Dispenser telah di isi, silahkan beli sebutuhnya !!!</b> <br><br>";

        $this->volume = ($this->volume + $isi);
    }
}

$bl = new Dispenser(1000, 250, 5000);
$bl->beli(2);
$bl->beli(2);
$bl->beli(1);
$bl->refill(1000);
$bl->beli(1);

?>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Tugas Object Oriented Programming PHP</h4>
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
        <h3 class="card-title">Fruit</h3>

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
class Fruit{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The fruit is {$this->name} and the color is {$this->color}";
    }
    
}

use Strawberry as GlobalStrawberry;

// require_once 'class_fruit.php';

class Strawberry extends Fruit{
    public function message()
    {
        echo "Am I a fruit or berry? ";
    }
}

$straberry = new GlobalStrawberry("Strawberry", "red");
$straberry->message();
$straberry->intro();
?>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <h4>Tugas Object Oriented Programming PHP</h4>
      </div>
      <!-- /.card-footer-->
    </div>

    <!-- /.card -->
  </section>
</div>
