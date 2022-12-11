<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyItem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>

  <style>
    .card-body{
      text-align: justify;
      text-justify: inter-word;
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

    <div class="container pt-3">

    <?php
			// include("../MODUL4 WIHDA/config/connector.php");
			// $query = mysqli_query($conn, "SELECT * FROM showrooms") or die("database error:". mysqli_error($conn));
      // $jumlah = mysqli_num_rows($query);
      // ?>
      <!-- // <h2>My Show Room</h2>
      // <p style="color:grey">List Show Room Wihda - 1202204276</p>
      // <div class="row"> -->
			<?php 
      while( $record = mysqli_fetch_assoc($query) ) {
        if (strlen($record['deskripsi']) > 10)
        $new_string = substr($record['deskripsi'], 0, 140) . '...';
        $id_mobil = $record['id']
        ?>
        
          <div class="col-sm">
            <div class="card shadow-lg" style="width: 25rem;">
            <img class="card-img-top p-3" src="../MODUL4 WIHDA/images/{{mobil->foto_mobil}}" alt=""> 
            <div class="card-body">
              <h4 class="card-title">{{mobil->nama_mobil}}</h4>
              <p class="card-text">{{mobil->deskripsi}}</p>
            </div>
            <div class="card-footer">
              <div class="row justify-content-start">
                <div class="col-4">
              <form action="{{mobil->nama_mobil}}" method="GET" >
                <input type="hidden" name="id_mobil" value="{{mobil->id}}" />
                <input style="width: 100%" type="submit" class="btn btn-primary rounded-pill" value="Detail">
              </form></div>
              <div class="col-4">
              <form action="{{url('/layouts_m5/list-car')}}" method="delete" >
                <input type="hidden" name="id_mobil" value="{{mobil->id}}" />
                <button style="width: 100%" type="submit" class="btn btn-danger rounded-pill">Delete</button>
              </form></div>    
            </div>
      </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <br>
      <h5 style="color:grey">Jumlah : <?php echo $jumlah?></h5><br>
      </div>
    </body>
  </html>

