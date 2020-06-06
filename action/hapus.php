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
if(isset($_GET['id'])){
 include('config.php');
 $id=$_GET['id'];
 $cek=mysqli_query($koneksi,"SELECT id FROM siswa where id='$id'")or die(mysql_error());
 if(mysqli_num_rows($cek)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $del=mysqli_query($koneksi,"DELETE FROM siswa WHERE id='$id'");
  if($del){
   echo'Data siswa berhasil dihapus! ';
   echo'<a href="index.php" class="btn btn-primary">Kembali</a>';
  }else{
   echo'Gagal menghapus data! ';
   echo'<a href="index.php" class="btn btn-primary">Kembali</a>';
  }
 }
}else{
 echo'<script>window.history.back()</script>';
}
?>
</html>