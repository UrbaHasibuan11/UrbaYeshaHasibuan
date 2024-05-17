<?php
//mengambil program koneksidb, dengan menggunakan fungsi include
include "KoneksiDB2.php";
//Membuat SQL untuk menampilkan data
$sqltampil = "SELECT * FROM tbl_dosen";
//Melakukan proses query ke basisdata
$query = mysqli_query($koneksi, $sqltampil) or die("SQL Error");
$nomor = 1;//untuk membuat nomor untuk di tabel hasil query
?>
<h2>Data Dosen STMIK Royal</h2>
<!-- Disini kita buat link untuk menambahkan data, dimana link ini nantinya akan memanggil form tambah data. -->
<a href="FormTambah2.php">Tambah Data</a>
<table width="100%" border="1">
<thead>
<tr>
<th>No</th>
<th>Nip</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jenis_kelamin</th>
<th>Email</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
//Jika data lebih dari 1, maka kita bisa menampilkan dengan menggunakan perintah perulangan seperti (for,while, do-while, foreach)
//mysqli_fetch_assoc merupakan fungsi yang digunakan untuk mengkonversi data menjadi data array asosiatif.
while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
<!-- untuk menampilkan data, kita gunakan tag pandek php yaitu spt dibawah -->
<td><?= $nomor ?></td>
<td><?= $data['nip'] ?></td>
<td><?= $data['nama'] ?></td>
<td><?= $data['alamat'] ?></td>
<td><?= $data['jenis_kelamin'] ?></td>
<td><?= $data['email'] ?></td>
<td>
<a href="FormEdit2.php?nip=<?=$data['nip']?>"> Edit</a> | <a href="Delete2.php?nip=<?=$data['nip']?>">Delete</a>
</td>
</tr>
<?php $nomor++;
} //akhir dari perulangan ?>
</tbody>
</table>