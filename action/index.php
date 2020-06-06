<html>
<head>
 <title>Simple CRUD</title>
 <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width", 
        initial-scale=1">
            <link rel="stylesheet" href="css/bootstrap.min.css" />
            <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=
        crossorigin="anonymous"
            ></script>
            <script src="js/bootstrap.min.js"></script>
</head>
<body>
 <h2 align="center">Simple CRUD</h2>
<p><a href="index.php" class="btn btn-success">Beranda</a> / <a href="tambah.php" class="btn btn-primary">Tambah Data</a></p>
<div style="margin-top:20px"></div>
        <table width='80%' height='20%' border=2>
        <table class="table table-bordered">
        <div class="row">
 <tr bgcolor="#CCCCCC">
  <th>No.</th>
  <th>NIS</th>
  <th>Nama Lengkap</th>
  <th>Kelas</th>
  <th>Jurusan</th>
  <th>Opsi</th>
 </tr>
<?php
include('config.php');
$query=mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY NIS")or die('perintah sql salah');
 if(mysqli_num_rows($query)==0){
  echo'<tr><td colspan="6">Tidak ada data!</td></tr>';
 }else{
  $no=1;
  while($data=mysqli_fetch_assoc($query)){
   echo'<tr bgcolor="grey">';
   echo"<td><center>$no.</center></td>";
   echo"<td>$data[nis]</td>";
   echo'<td>'.$data['nama'].'</td>';
   echo'<td><center>'.$data['kelas'].'</center></td>';
   echo'<td><center>'.$data['jurusan'].'</center></td>';
   echo'<td><center><a href="edit.php?id='.$data['id'].'" class="btn btn-primary">Edit</a> / <a href="hapus.php?id='.$data['id'].'"onclick="return confirm(\'Yakin?\')" class="btn btn-danger">Hapus</a></center></td>';
   echo'</tr>';
   $no++;
  }
 }
?>
</table>
<a href="../admin/logout.php">LOGOUT</a>
</body>
&copy;Windi Alwiani RPL
</html>