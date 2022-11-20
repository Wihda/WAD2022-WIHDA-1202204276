<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EditItem</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="..\asset\style\index.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-dark navbar-expand-md bg-primary justify-content-center">
    <div class="container">
        <ul class="navbar-nav">
            <li class="active">
                <a class="nav-link" href="Home-Wihda.php">Home</a>
            </li>
            <li class="active">
                <a class="nav-link" href="Add-Wihda.php" style="padding-left:50px">MyCar</a>
            </li>
        </ul>
    </div>
    </nav>
    <br>
    <form action="ListCar-Wihda.php" method="post" style="margin-left:80px">  
        <h3>Tambah Mobil</h3>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p><br>
        <div class="mb-3">
            <label for="mobil" class="form-label">Nama Mobil</label>
            <input type="text" class="form-control" name="mobil">
        </div>
        <div class="mb-3">
            <label for="pemilik" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" name="milik">
        </div>
        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" class="form-control" name="merk">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Beli</label>
            <input type="text" class="form-control" name="tanggal" placeholder="dd/mm/yyyy">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="desc" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Foto</label>
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Status Pembayaran</label><br>
			<input type="radio" name="status" value="Lunas" style="margin-right:5px"><p1 style="margin-right:20px">Lunas</p1> 
            <input type="radio" name="status" value="Belum Lunas" style="margin-right:5px">Belum Lunas
        </div>
        <button type="submit" name="simpan" class="btn btn-primary btn-sm" style="padding-left:25px; padding-right:25px">Simpan</button><br>
</form>
<br>    
</body>
</html>