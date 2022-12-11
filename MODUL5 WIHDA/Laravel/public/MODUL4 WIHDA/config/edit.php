<?php
include '../config/connector.php';

$id_mobil = $_POST['id_mobil'];
$nama_mobil = $_POST['nama_mobil'];
$pemilik_mobil = $_POST['pemilik_mobil'];
$merk_mobil = $_POST['merk_mobil'];
$tanggal_beli = $_POST['tanggal_beli'];
$deskripsi = $_POST['deskripsi'];
$foto_mobil = $_FILES['foto_mobil']['name'];
$status_pembayaran = $_POST['status_pembayaran'];

$query="UPDATE showroom_wihda_table SET id_mobil='$id_mobil',nama_mobil='$nama_mobil',pemilik_mobil='$pemilik_mobil',merk_mobil='$merk_mobil',tanggal_beli='$tanggal_beli', deskripsi='$deskripsi' ,foto_mobil='$foto_mobil' ,status_pembayaran='$status_pembayaran'WHERE id_mobil=$id_mobil'";
mysqli_query($conn, $query);
header("location:../pages/ListCar-Wihda.php");
?>