<html>
<head>
    <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width", 
        initial-scale=1">
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"
            ></script>
            <script src="js/bootstrap.min.js"></script>
</head>
<?php
if(isset($_POST['simpan'])){
 include('config.php');
 $id=$_POST['id'];
 $nis=$_POST['nis'];
 $nama=$_POST['nama'];
 $kelas=$_POST['kelas'];
 $jurusan=$_POST['jurusan'];
 $update=mysqli_query($koneksi,"UPDATE siswa SET nis='$nis',nama='$nama',kelas='$kelas',jurusan='$jurusan' WHERE id='$id'")or die(mysql_error());
 if($update){
  echo'Data berhasil disimpan! ';
  echo'<a href="index.php?id='.$id.'" class="btn btn-primary">Kembali</a>';
 }else{
  echo'Gagal menyimpan data! ';
  echo'<a href="index.php?id='.$id.'" class="btn btn-primary">Kembali</a>';
 }
}else{
 echo'<script>window.history.back()</script>';
}
?>
</html>