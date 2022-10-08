<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="shortcut icon" href="image/icon.png" />

    <title>Absensi</title>
    <meta http-equiv="refresh" content="60" />
    <link href="css/app.css" rel="stylesheet">
    <link href="css/app1.css" rel="stylesheet">
</head>

<?php  
  
// $url = $_SERVER['REQUEST_URI'];  
  
header("Refresh: ; ");  
error_reporting(0);
  
?> 
<body>



        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg" style="padding:10px;">
        
            
            
            
            <a class="sidebar-toggle d-flex">
          <i class=" align-self-center" ></i>
          <span class="align-middle" style="position:relative;top:-10px;right:10px;"><img src="image/200.gif"  width="130" height="45"></span>
          <span class="align-middle" style="position:relative;top:-6px;right:134px;"><img src="image/gil.jpg"  width="119" height="38"></span>
          <span class="align-middle" style="position:relative;top:17px;right:240px;"><img src="image/absensis.png" style="border-radius:5px;" width="100" height="8"></span>
          <!-- <span class="align-middle" style="position:relative;top:-5px;"><img src="image/icon.png"  width="40" height="40"></span> -->
          <!-- <a style="position:relative;" href="../index.php" > -->
          <!-- <h1 style="font-family: sans-serif;color:white;position:relative;top:4px;right:-56px;font-size:30px;" ><b> PACKING</b></h1>          -->
         
        </a>


                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">

                    <?php

setlocale(LC_TIME, 'id_ID.utf8');

$hariIni = new DateTime();

# lokalisasi tidak berpengaruh
echo $hariIni->format('l F Y') . '<br>';

?>  
                        
                </div>
            </nav>
    <main>
   
    <h1 class="card-title mb-0" style="color:red;font-size:30px;text-align:center;"><b>ABSENSI LOGISTIK GROUP A</b></h1><br>
    <h1 class="card-title mb-0" style="position:relative;margin-top:-50px;margin-left:1300px;color:red;font-size:20px;text-align:center;" id="jam"></h1><br>
    
<!-- <span></span><img src="../static/img/icons/4.png"  size="100%">&nbsp;</span> -->
<div id="wrapper">  
    <div id="blue">
     <div id="tanggal"></div>
     <div style="position:relative;left:1600px;top:-40px;"><a href="../absen/data_zona_a.php"><img style="border-radius:20px;" src="image/orb.gif" width="50px" height="50px;"></a> </div>
                 
   </div>
   
   <!-- <button style="position:relative;margin-left:20px;"><a href="data_zona_a.php"><h style="color:red;">Data Zona</h></a></button> -->
   <style type="text/css">
#gradient3 {
    background-image: linear-gradient(to bottom right, #483D8B, #000000);
}

.scroll2{
display:block;
border: 1px solid white;
padding:10px;
margin-top:5px;

width:100%;
height:500px;
overflow:auto;
}

.scroll3{
display:block;
border: 1px solid white;
padding:10px;
margin-top:5px;

width:100%;
height:150px;
overflow:none;
}

.indikator_absen{
    width:300px;
    height:120px;
    background-image:url("image/d.gif");
    background-size:cover;
    border-radius:5px;
}
.indikator_sakit{
    position:relative;
    bottom:120px;
    left:370px;
    width:300px;
    height:120px;
    background-image:url("image/d.gif");
    background-size:cover;
    border-radius:5px;
}
.indikator_izin{
    position:relative;
    bottom:240px;
    left:740px;
    width:300px;
    height:120px;
    background-image:url("image/d.gif");
    background-size:cover;
    border-radius:5px;
}
.indikator_cuti{
    position:relative;
    bottom:360px;
    left:1100px;
    width:300px;
    height:120px;
    background-image:url("image/d.gif");
    background-size:cover;
    border-radius:5px;
}
.indikator_alfa{
    position:relative;
    bottom:480px;
    left:1460px;
    width:300px;
    height:120px;
    background-image:url("image/d.gif");
    background-size:cover;
    border-radius:5px;
}

</style>
<?php
include "koneksi.php";
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
    // TOTAL HADIR                                        
    

     $yanghadir = mysqli_query($koneksi, "SELECT  COUNT(hadir) AS yghadir FROM tb_absen_record INNER JOIN tb_absen ON tb_absen_record.vu = tb_absen.vu and tgl_key = '$tanggal_ori' and hadir = 'O' and lokasi = 'LOGISTIK' GROUP BY hadir ");
    while($yanghadirabsen = mysqli_fetch_array($yanghadir)) {  
    $totalhadirabsen = $yanghadirabsen['yghadir'];
    }

    // SAKIT
    $yangsakit = mysqli_query($koneksi, "SELECT  COUNT(catatan) AS ygsakit FROM tb_absen_record INNER JOIN tb_absen ON tb_absen_record.vu = tb_absen.vu and tgl_key = '$tanggal_ori' and catatan = 'SAKIT' and lokasi = 'LOGISTIK' GROUP BY catatan ");
    while($yangsakita = mysqli_fetch_array($yangsakit)) {  
    $totalsakit = $yangsakita['ygsakit'];
    }

    // IZIN
    $yangizin = mysqli_query($koneksi, "SELECT  COUNT(catatan) AS ygizin FROM tb_absen_record INNER JOIN tb_absen ON tb_absen_record.vu = tb_absen.vu and tgl_key = '$tanggal_ori' and catatan = 'IZIN' and lokasi = 'LOGISTIK' GROUP BY catatan ");
    while($yangizina = mysqli_fetch_array($yangizin)) {  
    $totalizin = $yangizina['ygizin'];
    }

    // CUTI
    $yangcuti = mysqli_query($koneksi, "SELECT  COUNT(catatan) AS ygcuti FROM tb_absen_record INNER JOIN tb_absen ON tb_absen_record.vu = tb_absen.vu and tgl_key = '$tanggal_ori' and catatan = 'CUTI' and lokasi = 'LOGISTIK' GROUP BY catatan ");
    while($yangcutia = mysqli_fetch_array($yangcuti)) {  
    $totalcuti = $yangcutia['ygcuti'];
    }

    // ALFA
    $totallnya = mysqli_query($koneksi, "SELECT  COUNT(vu) AS totall FROM tb_absen where lokasi = 'LOGISTIK' ");
    while($totalla = mysqli_fetch_array($totallnya)) {  
    $totallaa = $totalla['totall'];
    }


    // TOTAL ALFA
    $totalalfa =  $totallaa - ($totalhadirabsen + $totalsakit + $totalizin +  $totalcuti);

?>
<div class="scroll3">
<span><div class="indikator_absen">
<h1 style="color:white;"><img style="position:relative;top:20px;" src="image/user.png" width="80" height="80"><b>TOTAL HADIR</b><a href="#" ><br><h5 style="position:relative;top:-10px;left:220px;font-size:40px;color:white;"><?= $totalhadirabsen ?></h5></br></a></h1>
</div>

<div class="indikator_sakit">
<h1 style="color:white;"><img style="position:relative;top:20px;" src="image/protection.png" width="80" height="80"><b>SAKIT</b><a href="#" ><br><h5 style="position:relative;top:-10px;left:220px;font-size:40px;color:white;"><?= $totalsakit ?></h5></br></a></h1>
</div>

<div class="indikator_izin">
<h1 style="color:white;"><img style="position:relative;top:20px;" src="image/money1.png" width="80" height="80"><b>IZIN</b><a href="#" ><br><h5 style="position:relative;top:-10px;left:220px;font-size:40px;color:white;"><?= $totalizin ?></h5></br></a></h1>
</div>

<div class="indikator_cuti">
<h1 style="color:white;"><img style="position:relative;top:20px;" src="image/candidate3.png" width="80" height="80"><b>CUTI</b><a href="#" ><br><h5 style="position:relative;top:-10px;left:220px;font-size:40px;color:white;"><?= $totalcuti ?></h5></br></a></h1>
</div>

<div class="indikator_alfa">
<h1 style="color:white;"><img style="position:relative;top:20px;" src="image/design.png" width="80" height="80"><b>ALFA</b><a href="#" ><br><h5 style="position:relative;top:-10px;left:220px;font-size:40px;color:white;"><?= $totalalfa ?></h5></br></a></h1>
</div>

</span>
</div>


<?php
include "koneksi.php";
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


 

$yanghijau = mysqli_query($koneksi,"SELECT * FROM tb_gambar_absensi where id='1' ");
            while ($data0 =  mysqli_fetch_array($yanghijau,MYSQLI_ASSOC)) {    
                                               
            $hijau = "<img  src='image/$data0[nama]' width='40px' height='40px' />";                                            
            $hijau1 = "<img  src='image/$data0[nama]' width='20px' height='20px' />";                                            
            } 

$yangmerah = mysqli_query($koneksi,"SELECT * FROM tb_gambar_absensi where id='2' ");
            while ($data0 =  mysqli_fetch_array($yangmerah,MYSQLI_ASSOC)) {    
                                               
            $merah = "<img src='image/$data0[nama]' width='40px' height='40px' />";                                            
            $merah1 = "<img src='image/$data0[nama]' width='20px' height='20px' />";                                            
            }
        
$yangkuning = mysqli_query($koneksi,"SELECT * FROM tb_gambar_absensi where id='3' ");
            while ($data0 =  mysqli_fetch_array($yangkuning,MYSQLI_ASSOC)) {    
                                               
            $kuning = "<img  src='image/$data0[nama]' width='40px' height='40px' />";                                            
            $kuning1 = "<img  src='image/$data0[nama]' width='20px' height='20px' />";                                            
            }
?>

<div>
<span>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $hijau1; ?> <b>HADIR</b> <?php echo $merah1; ?> <b>TIDAK HADIR</b> <?php echo $kuning1; ?> <b>SAKIT</b></span>
</div>




<div class="scroll2">
<table class="table table-hover my-0">

<thead>
<!-- <a style="font-weight: bold;position:relative;color:black;" href="importan/form.php">IMPORT DATA </a> -->
<!-- <a style="font-weight: bold;position:relative;margin-left:1200px;" href="index_b.php"><span style="color:red;">Untuk pindah group ,klik ...</span>GROUP B</a> -->
<!-- <button style="position:relative;margin-left:20px;"><a href="exsport-excel.php"><h style="color:red;">Data Excel</h></a></button> -->
<!-- <a style="color:red; font-weight: bold;position:relative;margin-left:1000px;" href="delete_all.php" >DELETE ALL</a> -->

                        <tr>
                        <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ALAMAT</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NAMA</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>PROCESS</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>HADIR</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>OT</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>OP PENGGANTI</center></th>                             
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>PEMBIMBING</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>PENGECEK</center></th>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CATATAN INFORMASI</center></th>
                           <!--  <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>AKSI</center></th> -->                  
                        </th>     
                        </tr>
                    </thead> 
                    <?php
                      include "koneksi.php";
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

                      $no=1;
                        $sql1 = mysqli_query($koneksi,"SELECT * FROM tb_absen where lokasi = 'LOGISTIK' ");
//  ORDER BY `tbabsensi`.`urut_` ASC
$jumlah_baris = mysqli_num_rows($sql1);
while ($data = mysqli_fetch_array($sql1)) {
        $id[] = $data['id'];
        $proses[] = $data['proses'];
        $nama_op[] = $data['nama_op'];
        $vu[] = $data['vu'];
        $lokasi[] = $data['lokasi'];
        
        
        }

        for ($u=0; $u < $jumlah_baris ; $u++) { 
        $sql2[$u] = mysqli_query($koneksi,"SELECT * FROM tb_absen_record WHERE vu='$vu[$u]' AND tgl_key='$tgl2' ");
        $data1 = mysqli_fetch_array($sql2[$u]);
        
        if($data1['hadir'] == 'O'){
            $hadir[$u] = $hijau;
        }elseif($data1['hadir'] == ''){
            $hadir[$u] = $merah;
        }elseif($data1['catatan'] == 'SAKIT'){
            $hadir[$u] = $kuning;
        }
        
        $ot[$u] = $data1['ot'];
        $op_pengganti[$u] = $data1['op_pengganti'];
        $pembimbing[$u] = $data1['pembimbing'];
        $pengecek[$u] = $data1['pengecek'];
        $catatan[$u] = $data1['catatan'];

        }
    
            $zz=1;
            for ($i=0 ; $i < $jumlah_baris ; $i++){
                ?>
                <td><?= $zz++ ?></td>
                <td><center><?= $proses[$i] ?></center></td>
                <td><?= $nama_op[$i] ?></td>
                <td><center><?= $lokasi[$i] ?></center></td>
                <td style="color:green;"><center><?= $hadir[$i] ?></center></td>
                <td><center><?= $ot[$i] ?></center></td>
                <td><center><?= $op_pengganti[$i] ?></center></td>
                <td><center><?= $pembimbing[$i] ?></center></td>
                <td><center><?= $pengecek[$i] ?></center></td>
                <td><?= $catatan[$i] ?></td>
               <!--  <td><a href='edit_absen.php?id=<?= $id[$i] ?>'>Edit</a></td> --></tr>
                </tr>
            <?php } ?>  
            
            

                  <form id="in-bar" method="POST" action="" class="fill-barcode">
            <p style="margin-left: 2%;">
                <input style="position:absolute;background-color:#F8F8FF;border-radius:5px;" type="text" name="dani" placeholder="Input di sini" autofocus>
                <div id="toggle" onclick="showHide();"></div>
            </p>
            <td><input type="submit" name="kirim1" value="OK" hidden=""></td>
<style type="text/css">
#tampil_modal{
    padding-top:10em;
    background-color:rgba(0,0,0,0.8);
    position:fixed;
    top:0;
    bottom:0;
    left:0;
    right:0;
    z-index:10;
    display:block;
}
#modal{
    padding:15px;
    font-size:20px;
    text-align:center;
    background:#ff1493;
    color:#fff;
    width:480px;
    border-radius:15px;
    margin:0 auto;
    margin-bottom:20px;
    padding-bottom:50px;
    z-index:9;   
}
#modal_atas{
    width:100%;
    background:#ff00ff;
    text-align:left;
    padding :15px;
    margin-left:-15px;
    font-size:15px;
    margin-top:-15px;
    border-top-left-radius:15px;
    border-top-right-radius:15px;
    color:yellow;
}
#oke{
    background:#c0392b;
    border:none;
    float:right;
    width:80px;
    height:auto;
    color:#fff;
    margin-right:5px;
    cursor:pointer;
}
.info{
    position:relative;
    font-family: stock;
    font-size: 30px;
    color: #00FF00;
    background-color:white;
    font-style:italic;
    border:1px solid white;
    width:1690px;
    height:50px;
    top:10px;
    left:-27px;

}
.alert{
    background-color:white;
    color:black;
    border-radius:10px;
 
    font-size:40px;
    width:500px;
    height:50px;
}
    </style>


  <?php
// include database connection file
include "koneksi.php";

error_reporting(0);


// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['kirim1']))

{   
    
        $nama = $_POST['dani'];
        $panggildb= mysqli_query($koneksi, "SELECT * FROM tb_absen WHERE vu = '$nama'");
        while ($row=mysqli_fetch_array( $panggildb,MYSQLI_ASSOC))  {
        $id2 = $row['id'];
        $proses = $row['proses'];
        $nama_op = $row['nama_op'];
        $vu = $row['vu'];
        $lokasi = $row['lokasi'];
        $hadir = $row['hadir'];
        $ot = $row['ot'];
        $op_pengganti = $row['op_pengganti'];
        $pembimbing = $row['pembimbing'];
        $pengecek = $row['pengecek'];
        $catatan = $row['catatan'];
        
        $cekdatasama = $row['vu'].$tgl2;
        $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_absen_record WHERE cekdatasama='$cekdatasama' "));

        if($cek > 0){
            echo '<script>alert("GAGAL ...!")</script>';
        }else{
            $sql="INSERT INTO tb_absen_record (id,hadir,ot,op_pengganti,pembimbing,pengecek,catatan,vu,tgl_key,cekdatasama) VALUES ('$id2','O','$ot','$op_pengganti','$pembimbing','$pengecek','$catatan','$vu','$tgl2','$cekdatasama')";  
            mysqli_query($koneksi, $sql);
            mysqli_close ($koneksi);  
            echo '<center><div class="alert" role="alert"> <span data-dismiss="alert" aria-label="close" aria-hidden="true"></span><strong >Sukses..! </strong> Data Tersimpan....</div></center>';
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=a_logistik.php">';
           
        }
}
}
?>
</form>

            </table>
            </div>
            </main>        
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-left">
                            <p class="mb-0">
                                <a href="#" class="text-muted">&copy; <strong ><b>2022 <i style="color:blue;">Ramandani Gilang S [19968]</i> YIMM-WJF.</b></strong></a> 
                            </p>
                        </div>
                        <div>
                            <marquee class="info" direction="center" scrollamount="10">PATUHI PROTOKOL KESEHATAN COVID-19 DENGAN MELAKUKAN 3M DAN HINDARI 3K</marquee>
                        </div>                      
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?php
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
  $jam_ori1 = gmdate('H:i', $waktu_indonesia);

include "koneksi.php";


?>


<script src="js/app.js"></script>
    
<script type="text/javascript">
 window.onload = function() { jam(); }

function jam() {
 var e = document.getElementById('jam'),
 d = new Date(), h, m, s;
 h = d.getHours();
 m = set(d.getMinutes());
 s = set(d.getSeconds());

 e.innerHTML = h +':'+ m +':'+ s;

 setTimeout('jam()', 1000);
}

function set(e) {
 e = e < 10 ? '0'+ e : e;
 return e;
}
$(document).on('keypress', 'input,select', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
        console.log($next.length);
        if (!$next.length) {
       $next = $('[tabIndex=1]');        }
        $next.focus() .click();
    }
});

    </script>

</body>

</html>