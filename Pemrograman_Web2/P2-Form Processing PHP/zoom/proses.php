<?php
$_nama = $_POST['nama'];
$_umur = $_POST['umur'];
$_gender = $_POST['gender'];
$_proses = $_POST['proses'];

$status = ($_umur >=17) ? "Dewasa":"Anak-Anak";

echo 'Nama : '. $_nama;
echo '<br>Umur : '. $_umur. ' tahun';
echo '<br>Gender : '. $_gender;
echo '<br>Status Usia : '. $status;


?>