<?php
//Disini akan digunakan kode PHP untuk memproses data
//Ambil koneksi ke basisdata, karena data ini akan disimpan didalam basisdata.

require_once "KoneksiDB2.php";
//cek form yang di kirim
if($_SERVER['REQUEST_METHOD']=="POST"){
//ambil data dari form, simpan dalam variabel
$nip=$_POST['nip']; //yg didalam tanda kutip harus sama dengan name di form
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$email=$_POST['email'];
//buat SQL untuk simpan data
$sqlsave="INSERT INTO tbl_dosen VALUES
('$nip','$nama','$alamat','$jenis_kelamin','$email')";
//Proses ke mysql server, menggunakan mysqli_query()
if(mysqli_query($koneksi,$sqlsave)){
//redirect ke halaman tampildata.php jika proses simpan berhasil
echo "<script> alert('Data sudah disimpan');
window.location.assign('TampilData2.php'); </script>";
}
}
//Sampai disini program sudah siap, kita coba jalankan.
//Ok. program untuk tambah data (save) sudah selesai.
//ketika input jgn menggunakan nim yg sama karena nim adalah primary key, jik ingin kontrol dari sistem jg bisa...kita bahas pertemuan berikutnya