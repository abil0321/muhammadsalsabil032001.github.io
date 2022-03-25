<?php
require_once 'class_account.php';

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

$bnk1 = new BankAccount('001', 100000, 'Budiman');
// $bnk1->deposit(200);
// $bnk1->withdraw(100);
// $bnk1->transfer();

$bnk2 = new BankAccount('003',200000, 'iman');
// $bnk2->deposit(200);
// $bnk2->withdraw(100);
$bnk2->transfer($bnk1, 20000);

$bnk2->cetak();
$bnk1->cetak();

?>