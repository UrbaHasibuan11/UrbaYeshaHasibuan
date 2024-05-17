<!-- Mengambil data yang akan diedit, berdasarkan nim yang dipilih dan
dikirim melalui link (get) -->
<?php
$nip=$_GET['nip'];
//membuat sql tampil data
$sqldata="SELECT * FROM tbl_dosen WHERE nip='$nip'";
//ambil koneksi data
require_once "KoneksiDB2.php";
//proses sql
$query=mysqli_query($koneksi,$sqldata);
//mengubah data ke array asosiatif, tidak menggunakan perulangan karena datanya hanya 1.
$data=mysqli_fetch_assoc($query);
//selanjutnya tampilkan pada field dibawah.
?>
<h2>Update Data Dosen</h2>
<!-- tag form -->
<form action="Update2.php" method="POST">
<label>Nomor Induk Pegawai :</label>
<input type="text" name="nip" value="<?=$data['nip']?>"placeholder="Nomor Induk Pegawai" required>
<br>
<label>Nama Dosen :</label>
<input type="text" name="nama" id="nama" value="<?=$data['nama']?>"placeholder="Nama Lengkap" required>
<br>
<label for="">Alamat :</label>
<input type="text" name="alamat" id="alamat"value="<?=$data['alamat']?>" placeholder="Alamat Lengkap" required>
<br>
<label for="">Jenis Kelamin :</label>
<select name="jenis_kelamin" id="jenis_kelamin">
<option value="<?=$data['jenis_kelamin']?>"selected><?=$data['jenis_kelamin']?></option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
<br>
<label for="">Email :</label>
<input type="text" name="email" id="email"value="<?=$data['email']?>" placeholder="Email Lengkap" required>
<br>
<button type="submit" name="kirim" value="kirim">Update Data</button>
</form>