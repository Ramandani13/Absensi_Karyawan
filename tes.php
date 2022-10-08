<?php
include "koneksi.php";

// $yanghadir = mysqli_num_rows(mysqli_query($koneksi, "SELECT COUNT(hadir) FROM tb_absen_record "));
//  echo $yanghadir ;
$set_jam = '60'; 
$set_menit = '04'; ///untuk setting selisih 4 menit 
$waktu_indonesia = time() + (60 * 60 * 7) ;
$waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
$tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
$jam_ori = gmdate('H:i:s', $waktu_indonesia);
$jam_oriw = gmdate('H:i', $waktu_indonesia);
$tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
$nama_tahun = gmdate('Y', $waktu_indonesia);
$hari=gmdate('D', $waktu_indonesia);
$nama_bulan = gmdate('M-Y', $waktu_indonesia);
$nama_tgl = gmdate('d-m-y', $waktu_indonesia);
$nama_hari=gmdate('D', $waktu_indonesia);
$tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
$bulan_nama2 = gmdate('M', $waktu_indonesia);
$tgl2=date("Y-m-d");



$totallnya = mysqli_query($koneksi, "SELECT  COUNT(vu) AS totall FROM tb_absen ");
    while($totalla = mysqli_fetch_array($totallnya)) {  
    $totallaa = $totalla['totall'];
    }
   echo $totallaa;
 ?>