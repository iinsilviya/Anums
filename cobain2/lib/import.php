<?php
include "excel_reader2.php";
$username = "root";
$password = "";
$database = "smuna";

mysql_connect("localhost", $username, $password);
mysql_select_db($database);

// file yang tadinya di upload, di simpan di temporary file PHP, file tersebut yang kita ambil
// dan baca dengan PHP Excel Class
$data = new Spreadsheet_Excel_Reader($_FILES['excel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);



for ($i=2; $i<=$hasildata; $i++)
{
  
  $kode_mk = $data->val($i,2); 
  $kelas = $data->val($i,3); 
  $nim = $data->val($i,4);
    $presensi = $data->val($i,6);
    $tugas1 = $data->val($i,7);
    $tugas2 = $data->val($i,8);
    $tugas3 = $data->val($i,9);
    $tugas4 = $data->val($i,10);
    $tugas5 = $data->val($i,11);
    $uts = $data->val($i,12);
    $uas = $data->val($i,13);
    $total = $data->val($i,14);
    $huruf = $data->val($i,15);
      
$query = "UPDATE krs SET nilai1='$presensi', nilai2='$tugas1', nilai3='$tugas2', nilai4='$tugas3', nilai5='$tugas4', nilai6='$tugas5', nilai7='$uts', nilai8='$uas', total='$total', huruf='$huruf' WHERE NIM='$nim' AND kode_mk='$kode_mk' AND kelas='$kelas'";
$hasil = mysql_query($query);

}


if ($hasil) 
{
header('Location: ../#/home');
}
else
{
echo "Data Gagal";
}
?>
