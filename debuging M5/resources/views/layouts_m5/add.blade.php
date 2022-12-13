<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AddItem</title>
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
                <li class="nav-item"><a class="nav-link active" href="{{url('/layouts_m5/home-after')}}" style="margin-left:50px">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{url('/layouts_m5/list-car')}}" style="margin-left:50px">MyCar</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="{{url('/layouts_m5/add')}}" class="btn btn-light btn-outline-primary" style="margin-right:50px">Add Car</a></li>
            <div class="dropdown">
                <button class="btn btn-light btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right:50px">
                    Wihda
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{url('/layouts_m5/profil')}}">Profil</a></li>
                    <li><a class="dropdown-item" href="../MODUL4 WIHDA/config/logout.php">Log Out</a></li>
                </ul>
                </div>
            </ul>
        </div>
    </nav>

    <div class="container pt-5">
    <h1>Tambah Mobil</h1>
    <p style="color:grey">Tambah Mobil Baru Anda Ke List Show Room</p><br>

    <form action="/layouts_m5" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="name" class="form-label"><strong>Nama Mobil</strong></label>
                        <input type="text" class="form-control" name="nama_mobil" placeholder="BMW 14">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label"><strong>Nama Pemilik</strong></label> <br>
                        <input type="text" class="form-control" name="pemilik_mobil" placeholder="Nama - NIM">
                    </div>
                    <div class="mb-3">
                        <label for="merk" class="form-label"><strong>Merk</strong></label> <br>
                        <input type="text" class="form-control" name="merk_mobil" placeholder="BWM">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label"><strong>Tanggal Beli</strong></label> <br>
                        <input type="date" class="form-control" name="tanggal_beli">
                    </div>
                    <div class="mb-3">
                        <label for="Deskripsi" class="form-label"><strong>Deskripsi</strong></label>
                        <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label"><strong>Foto</strong></label>
                        <input class="form-control" type="file" name="foto_mobil">
                    </div>
                    <br>
                    <div class="mb-3">
                    <p><strong>Status Pembayaran</strong></p>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineCheckbox1" name="status_pembayaran" value="Lunas">
                        <label class="form-check-label" for="inlineCheckbox1">Lunas</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineCheckbox2" name="status_pembayaran" value="Belum lunas">
                        <label class="form-check-label" for="inlineCheckbox2">Belum Lunas</label>
                    </div>
                        <br><br>
                        <input type="submit" class="btn btn-primary btn-lg btn-sm" value="Selesai" style="padding-left:25px; padding-right:25px">

                    </form>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>