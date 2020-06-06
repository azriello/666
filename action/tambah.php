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
<p><a href="index.php" class="btn btn-success">Beranda</a></p>
<form action="tambah_proses.php" method="post">
 <table cellpadding="3" cellspacing="0">
 <tr>
   <td>NIS</td>
   <td>:</td>
   <td><input type="text" name="nis" required></td>
  </tr>
  <tr>
   <td>Nama Lengkap</td>
   <td>:</td>
   <td><input type="text" name="nama" size="30" required></td>
  </tr>
  <tr>
  <td>Kelas</td>
  <td>:</td>
   <td><select class="btn btn-primary" name="kelas" required>
    <option value="">Pilih Kelas</option>
    <option value="X">X</option>
    <option value="XI">XI</option>
    <option value="XII">XII</option>
    </select>
   </td>
  </tr>
  <tr>
  <td>Jurusan</td>
  <td>:</td>
   <td>
    <select class="btn btn-primary" name="jurusan" required>
     <option value="">Pilih Jurusan</option>
     <option value="RPL">Rekayasa Perangkat Lunak</option>
     <option value="TKJ">Teknik Komputer dan Jaringan</option>
     <option value="MM">Multimedia</option>
     <option value="PKM">Perbankkan</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>&nbsp;</td>
   <td></td>
   <td><input type="submit" name="tambah" class="btn btn-success" value="Tambah"></td>
  </tr>
 </table>
</form>
</body>
</html>