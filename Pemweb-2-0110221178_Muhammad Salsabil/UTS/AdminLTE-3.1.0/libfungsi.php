<?php
$_proses = $_POST['proses'];
$_nama = $_POST['nama'];
$_matkul = $_POST['matkul'];
function matkul($_namaMatkul){
    switch ($_namaMatkul) {
        case 'DDP':
          $nama_matkul = 'Dasar-Dasar Pemrograman'; 
          break;
        case 'BDI':
          $nama_matkul = 'Basis Data'; 
          break;
        case 'WEB1':
          $nama_matkul = 'Pemrograman WEB'; 
          break;    
        default:"";
      }
      return $nama_matkul;
}
    $_proses = $_POST['proses'];
    $_nilaiUas = $_POST['nilai_uas'];
    $_uts = $_POST['nilai_uts'];
    $_uas = $_POST['nilai_uas'];
    $_tugas = $_POST['nilai_tugas'];
    $nilai_akhir = ($_uts + $_tugas + $_uas)/3;

function kelulusan($_nilai)
{ 
    if ($_nilai <= 55) {
        $pernyataan = 'Tidak Lulus';
    } else {
        $pernyataan = 'Lulus';
    }
    return $pernyataan;
}

function predikat($nilai_akhir){
    if ($nilai_akhir <= 35) {
        $grade = "E";
    } elseif($nilai_akhir >= 36 && $nilai_akhir <= 55) {
        $grade = "D";
    } elseif($nilai_akhir >= 56 && $nilai_akhir <= 69) {
        $grade = "C";
    } elseif($nilai_akhir >= 70 && $nilai_akhir <= 84) {
        $grade = "B";
    } elseif($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        $grade = "A";
    } else{
        echo "mana ada mas !!!";
    }
    return $grade;
}

function grade($grade){
    switch ($grade) {
        case('A') :
            $predikat = "Sangat Memuaskan";
            break;
        case ('B'):
            $predikat = "Memuaskan"; 
            break;
        
        case ('C'):
            $predikat = "Cukup"; 
            break;
  
        case ('D'):
            $predikat = "Kurang"; 
            break;
        case ('E'):
            $predikat = "Sangat Kurang"; 
            break;
        case ('I'):
            $predikat = "Tidak Ada"; 
            break;
        default:
            echo "mana ada mass !!";
    }
    return $predikat;
}

?>
