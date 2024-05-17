<h2>Tambah Data Dosen</h2>
<!-- tag form -->
<form action="Save2.php" method="POST">
<label>Nomor Induk Pegawai :</label>
<input type="text" name="nip" placeholder="Nomor Induk Pegawai" required>
<br>
<label>Nama Dosen :</label>
<input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
<br>
<label for="">Alamat :</label>
<input type="text" name="alamat" id="alamat" placeholder="Alamat Lengkap" required>
<br>
<label for="">Jenis_kelamin :</label>
<select name="jenis_kelamin" id="jenis_kelamin">
<option value="Laki-laki" selected>Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select>
<br>
<label for="">Email :</label>
<input type="text" name="email" id="email" placeholder="Email Lengkap" required>
<br>
<button type="submit" name="kirim" value="kirim">Kirim Data</button>
</form>