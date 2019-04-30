<?php
include "config.php";
$email      = $_POST['email'];
$password   = $_POST['password'];

$cek        = mysqli_query($connect, "SELECT * FROM tb_user WHERE email='$email' and password='$password' ");
$result     = mysqli_num_rows($cek);
$data       = mysqli_fetch_array($cek);


if ($result > 0) {
    if ($data['level'] == 'admin') {
        session_start();
        $_SESSION['email']  = $data['email'];
        // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
        $_SESSION['level']  = $data['level'];
        echo "<script>alert('Selamat Datang, Admin.');document.location.href='AdminLTE-2.4.10/index.html'</script>";
    } elseif ($data['level'] == 'user') {
        session_start();
        $_SESSION['email']  = $data['email'];
        // $data['level'] level digunaan untu memanggil value level dari username yang telah login dan disimpan dalam $_SESSION['level']
        $_SESSION['level']  = $data['level'];
        echo "<script>alert('Selamat Datang, User.');document.location.href='AdminLTE-2.4.10/index2.html'</script>";
    } else {
        header("location:login.php");
    }
}
