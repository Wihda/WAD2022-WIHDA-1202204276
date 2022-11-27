<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ItemDetail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <style>

    form{
        width: 75%;
    }
  </style>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark p-3">
        <div class="container-fluid">
            <ul class="navbar-nav pl-3">
                <li class="nav-item"><a class="nav-link active" href="HomeAfter-Wihda.php" style="margin-left:50px">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="ListCar-Wihda.php" style="margin-left:50px">MyCar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="Add-Wihda.php" class="btn btn-light btn-outline-primary" style="margin-right:50px">Add Car</a></li>
            <div class="dropdown">
                <button class="btn btn-light btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right:50px">
                    Wihda
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="Profil-Wihda.php">Profil</a></li>
                    <li><a class="dropdown-item" href="../config/logout.php">Log Out</a></li>
                </ul>
                </div>
            </ul>
        </div>
    </nav>

    <?php
        $id = $_POST['id_mobil'];

        include "../config/connector.php";
        $query = mysqli_query($conn, "SELECT * FROM showroom_wihda_table WHERE id_mobil='$id'") or die("database error:". mysqli_error($conn));
        $record = mysqli_fetch_assoc($query);
        function active_radio_button($value,$input){
            $result =  $value==$input?'checked':'';
            return $result;}

        ?>

    <div class="container pt-5">
    <h1><?php echo $record['nama_mobil'] ?></h1>
    <p style="color:grey">Detail Mobil <?php echo $record['nama_mobil']?></p>

    <div class="container">
    <div class="row">
        <div class="col">
        <img src="../images/<?php echo $record["foto_mobil"];?>" class="rounded" alt="car" style="width: 90%">
    </div>

    <div class="col">
        <form action="Edit-Wihda.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_mobil" value="<?php echo $id; ?>" />
        <div class="mb-3">
            <label for="name" class="form-label"><strong>Nama Mobil</strong></label>
                        <input type="text" class="form-control" name="nama_mobil" value="<?php echo $record['nama_mobil'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label"><strong>Nama Pemilik</strong></label> <br>
                        <input type="text" class="form-control" name="pemilik_mobil" value="<?php echo $record['pemilik_mobil'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label"><strong>Merk</strong></label> <br>
                        <input type="text" class="form-control" name="merk_mobil" value="<?php echo $record['merk_mobil'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label"><strong>Tanggal Beli</strong></label> <br>
                        <input type="date" class="form-control" name="tanggal_beli" value="<?php echo $record['tanggal_beli'] ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="Deskripsi" class="form-label"><strong>Deskripsi</strong></label>
                        <textarea class="form-control" rows="3" name="deskripsi" disabled><?php echo $record['deskripsi'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label"><strong>Foto</strong></label>
                        <input class="form-control" type="file" name="foto_mobil" value="foto_mobil" disabled>
                    </div>
                    <br>
                    <div class="mb-3">
                    <p><strong>Status Pembayaran</strong></p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineCheckbox1" name="status_pembayaran" value="lunas" <?php echo active_radio_button("lunas", $record['status_pembayaran'])?> disabled>
                        <label class="form-check-label" for="inlineCheckbox1">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineCheckbox2" name="status_pembayaran" value="belum lunas"<?php echo active_radio_button("belum lunas", $record['status_pembayaran'])?> disabled>
                        <label class="form-check-label" for="inlineCheckbox2">Belum Lunas</label>
                    </div>
                        <br><br>
                    </form>
                    <form action="Edit-Wihda.php" method="POST" >
                        <input type="hidden" name="id_mobil" value="<?php echo $id; ?>" />
                        <button type="submit" class="btn btn-primary btn-sm" style="padding-left:25px; padding-right:25px">Edit</button>
                    </form>    
                    </div>
                </div>
            </div>
        </div>
    </div>         
</body>
</html>