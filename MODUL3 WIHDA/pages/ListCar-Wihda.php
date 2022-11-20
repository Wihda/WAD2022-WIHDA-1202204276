<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyItem</title>
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
    </nav><br>
        <h3 style="margin-left:80px">My Show Room</h3>
        <p style="margin-left:80px">List Show Room <?php echo $_POST['milik'] ?></p>
        <?php
        include '..\config\connector.php';
        $query = mysqli_query($conn, "SELECT*FROM modul3");

        if($query){
            while($select = mysqli_fetch_assoc($query)){
        ?>
        <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
        <div class="card" style="margin:80px" >
            <img src="..\asset\images\McLaren P1.jpg" class="card-img-top rounded" style="width:95%; margin:auto; margin-top: 10px"/>
            <div class="card-body">
                <h5 class="card-title">MCLaren P1</h5>
                <p class="card-text">Sport car with red-orange body, elegant black wheel, and modern design.</p>
                <a href="Detail-Wihda.php" class="btn btn-primary btn-sm rounded-pill" style="padding-left:40px; padding-right:40px;margin-right:20px">Detail</a>
                <button type="button" name="delete" class="btn btn-danger btn-sm rounded-pill" style="padding-left:40px; padding-right:40px" id="liveToastBtn">Delete</button>

                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2">
                    <strong class="me-auto">Alert</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Data berhasil dihapus.
                </div>
            </div>
            </div>
        </div></div></div>
        <div class="col">
        <div class="card" style="margin:80px" >
            <img src="..." class="card-img-top" alt="Fissure in Sandstone"/>
            <div class="card-body">
                <h5 class="card-title"><?php echo $_POST['mobil']?></h5>
                <p class="card-text"><?php echo $_POST['desc']?></p>
                <a href="Detail-Wihda.php" class="btn btn-primary btn-sm rounded-pill" style="padding-left:40px; padding-right:40px;margin-right:20px">Detail</a>
                <button type="button" name="delete" class="btn btn-danger btn-sm rounded-pill" style="padding-left:40px; padding-right:40px" id="liveToastBtn">Delete</button>
            </div>
                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Alert</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Data berhasil dihapus.
                </div>
            </div>
            </div>
        </div></div></div>
        <?php
            }
            }
        ?>
</body>
</html>