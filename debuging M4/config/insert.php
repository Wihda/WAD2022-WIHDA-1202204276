<?php

    include ('connector.php');

    $nama_mobil = $_POST['nama_mobil'];
    $pemilik_mobil = $_POST['pemilik_mobil'];
    $merk_mobil = $_POST['merk_mobil'];
    $tanggal_beli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto_mobil = $_FILES['foto_mobil']['name'];
    $status_pembayaran = $_POST['status_pembayaran'];

    // $foto_mobil = rand(1000,10000)."-".$_FILES['foto_mobil']['name'];
    move_uploaded_file ($_FILES['foto_mobil']['tmp_name'], "../images/".$foto_mobil);

    $query = mysqli_query($conn, "INSERT INTO showroom_wihda_table(nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$foto_mobil', '$status_pembayaran')");

    if($query){
         echo "<script>alert('Data telah ditambahkan')</script>";
         echo "<meta http-equiv='refresh' content='1 url=../pages/Add-Wihda.php'>";
     } else {
         echo "<script>alert('Gagal ditambahkan')</script>";
         echo "<meta http-equiv='refresh' content='1 url=../pages/Add-Wihda.php'>"; 
     }?>
