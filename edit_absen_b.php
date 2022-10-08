<?php 
error_reporting(0);
include 'koneksi.php';

?>
<!doctype html>
<html lang="en">
<body>

  <div>
  <h2>Setting Data Kehadiran</h2>
  <form  method="post" action="">
                    <?php
      $id = $_GET['id'];
      $no = 1;
      $sql1 = mysqli_query($koneksi,"SELECT * FROM tb_absen_b WHERE id ='$id' ");
      $sql_record = mysqli_query($koneksi,"SELECT * FROM tb_absen_b_record WHERE id ='$id' ");
      $jumlah_baris = mysqli_num_rows($sql1);
      $data = mysqli_fetch_array($sql1);

      $data_record = mysqli_fetch_array($sql_record);
      $hadir = $data_record['hadir'];
      $ot = $data_record['ot'];
      $op_pengganti = $data_record['op_pengganti'];
      $pembimbing = $data_record['pembimbing'];
      $pengecek = $data_record['pengecek'];
      $catatan = $data_record['catatan'];
      ?>
        <table>
          <thead>
          <tr>
            <th>NO</th>
            <th>PROSES</th>
            <th>NAMA</th>
            <th>LOKASI</th>
            <th>HADIR</th>
            <th>OT</th>
            <th>OP PENGGANTI</th>
            <th>PEMBIMBING</th>
            <th>PENGECEK</th>
            <th>CATATAN INFORMASI</th>
          </tr>
        </thead>
        <tbody>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['proses'] ?></td>
        <td><?= $data['nama_op'] ?></td>
        <td><?= $data['lokasi'] ?></td>
        

        <form method="POST">
          <td><input type="text" name="hadir" value="<?= $data_record['hadir'] ?>"></td>
          <td><input type="text" name="ot" value="<?= $data_record['ot'] ?>"></td>
          <td><input type="text" name="op_pengganti" value="<?= $data_record['op_pengganti'] ?>"></td>
          <td><input type="text" name="pembimbing" value="<?= $data_record['pembimbing'] ?>"></td>
          <td><input type="text" name="pengecek" value="<?= $data_record['pengecek'] ?>"></td>
          <td><input type="text" name="catatan" value="<?= $data_record['catatan'] ?>"></td>
        </tr>
<?php

if (isset($_POST['kirim'])) {
$hadir = $_POST['hadir'];
$ot = $_POST['ot'];
$op_pengganti = $_POST['op_pengganti'];
$pembimbing = $_POST['pembimbing']; 
$pengecek = $_POST['pengecek']; 
$catatan = $_POST['catatan']; 

$update = mysqli_query($koneksi,"UPDATE tb_absen_b_record SET hadir='$hadir',ot='$ot',op_pengganti='$op_pengganti',pembimbing='$pembimbing',pengecek='$pengecek',catatan='$catatan' WHERE id = '$id' ");
if ($update){
echo "data berhasil di update";
header ('Location:index_b.php');
}
else{
echo "Data gagal di update!";
}

}
?>
      </form>
    </tbody>
        </table><br>
                <button  type="submit" name="kirim" value="Update">Simpan</button>
  </div>
</body>
</html>