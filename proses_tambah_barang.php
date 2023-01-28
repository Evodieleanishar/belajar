<?php
include 'koneksi.php';
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$satuan = $_POST['satuan'];
$sql = mysqli_query($koneksi, "INSERT into barang VALUES('$kode', '$nama', '$harga', '$jumlah', '$satuan')");
echo "<script>alert('Data Barang Tersimpan');document,location.href='barang.php';</script>";
?>