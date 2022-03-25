<?php
require_once 'class_account.php';

$ac1 = new Account("020", 5000);
$ac1->deposit(200);
$ac1->cetak();

$ac2 = new Account("045", 4000);
$ac2->withdraw(200);
$ac2->cetak();

?>