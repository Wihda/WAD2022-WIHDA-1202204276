<?php include('connector.php');

$email = $_POST['email'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$sandi = $_POST['sandi'];

$sql = "INSERT INTO user_wihda(nama,email,password,no_hp) 
VALUES ('$nama', '$email', '$sandi', '$no_hp')";
$sql_cek ="SELECT email FROM user_wihda where email='$email'";
$cek = $conn->query($sql_cek);

if (mysqli_query($conn, $sql)){
    session_start();
    $_SESSION['register']='Berhasil';
    header("location:../pages/Login-Wihda.php");
} else{
    header("Location:../pages/Login-Wihda.php");
}

if ($cek -> num_rows>0){
    session_start();
    
    while ($row = $cek -> fetch_assoc()){
        $email = $_POST['email'];
        $email_cek = $row['email'];
        $nama = $row['nama'];
        $id = $row['id'];
    }
    if ($email == $email_cek){
        $_SESSION['register']='Gagal';
        header("location:../pages/Register-Wihda.php");
    }
}
$conn ->close();
?>
