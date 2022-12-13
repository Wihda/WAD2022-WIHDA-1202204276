<?php 
session_start();
include "../config/connector.php";

$email = $_POST['email'];
$password = $_POST['sandi'];

//cek data
$sql = "SELECT * FROM user_wihda WHERE email='$email' ";
$qry = mysqli_query($conn,$sql);
$usr = mysqli_fetch_array($qry);

if( 
 md5($email) == md5($usr['email'])
 AND
 md5($password) == md5($usr['password'])
  )
{
 $_SESSION['email'] = $usr['email'];
 $_SESSION['sandi'] = $usr['password'];
 $_SESSION['login'] = 1;
 $pesan = "Login berhasil";
 header('location:../pages/HomeAfter-Wihda.php');
} else {
 $pesan = "Login gagal, username atau password anda salah!";
 header('location:../pages/Login-Wihda.php');
}

?>
<?php
// if (!isset($_SESSION)){
//     session_start();
// }
// require 'connector.php';
// $email = $_POST['email'];
// $sandi = $_POST['sandi'];

// $dt_email="SELECT * FROM user_wihda WHERE email='$email'";
// $executeQuery = mysqli_query($conn, $dt_email);

// if (mysqli_num_rows($executeQuery) > 0){
//     $result = mysqli_fetch_assoc($executeQuery);

    // if (password_verify($sandi, $result['sandi'])){
    //     $_SESSION['email'] = $result['email'];
    //     $_SESSION['message'] = 'Anda berhasil login!';
    //     header('location:../pages/HomeAfter-Wihda.php');
    //     exit();
    // } else {
        // $_SESSION['message-error'] = 'Password anda salah, silakan coba lagi!';
        // header('location:../pages/Login-Wihda.php');
        // exit();
    // }
// }
// $_SESSION['message-error'] = 'Gagal Login';
// header('location:../pages/Login-Wihda.php');
// exit();

// ?>