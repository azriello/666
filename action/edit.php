<html>
<head>
 <title>Simple CRUD</title>
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
<body>
<h2 align="center">Data Siswa-Siswi Berprestasi di SMK BINA INFORMATIKA</h2> 
<p><a href="index.php" class="btn btn-success">Beranda</a> / <a href="tambah.php" class="btn btn-primary">Tambah Data</a></p>
<?php
include('config.php');
$id=$_GET['id'];
$show=mysqli_query($koneksi,"SELECT * FROM siswa WHERE id='$id'");
 if(mysqli_num_rows($show)==0){
  echo'<script>window.history.back()</script>';
 }else{
  $data=mysqli_fetch_assoc($show);
 }
?>
<form action="edit_proses.php" method="post">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table cellpadding="3" cellspancing="0">
 <tr>
  <td>NIS</td>
  <td>:</td>
  <td><input type="text" name="nis" value="<?php echo $data['nis'];?>"required></td>
 </tr>
 <tr>
  <td>Nama Lengkap</td>
  <td>:</td>
  <td><input type="text" name="nama" size="30" value="<?php echo $data['nama'];?>"required></td>
 </tr>
 <tr>
  <td>Kelas</td>
  <td>:</td>
  <td>
   <select name="kelas" required>
    <option value="">Pilih Kelas</option>
    <option value="X" <?php if($data['kelas']=='X'){echo'selected';}?>>X</option>
    <option value="XI" <?php if($data['kelas']=='XI'){echo'selected';}?>>XI</option>
    <option value="XII" <?php if($data['kelas']=='XII'){echo'selected';}?>>XII</option>
   </select>
  </td>
 </tr>
 <tr>
  <td>Jurusan</td>
  <td>:</td>
  <td>
   <select name="jurusan" required>
    <option value="">Pilih Jurusan</option>
    <option value="RPL" <?php if($data['jurusan']=='RPL'){echo'selected';}?>>Rekayasa Perangkat Lunak</option>
    <option value="TKJ" <?php if($data['jurusan']=='TKJ'){echo'selected';}?>>Teknik Komputer dan Jaringan</option>
    <option value="MM" <?php if($data['jurusan']=='MM'){echo'selected';}?>>Multimedia</option>
    <option value="PKM" <?php if($data['jurusan']=='PKM'){echo'selected';}?>>Perbankkan</option>
</select>
  </td>
 </tr>
 <tr>
  <td>&nbsp;</td>
  <td></td>
  <td><input type="submit" name="simpan" class="btn btn-primary" value="Simpan"></td>
 </tr>
</table>
</form>
</body>
</html>