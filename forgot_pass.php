<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Password SUrvey Santri</title>
</head>

<body>

    <h2> Rubah Password Survey Santri </h2>
    <?php
    #Mengatasi Error Notice dan Warning
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

    #Koneksi Ke Database
    $conn = new mysqli("localhost", "root", "qwe123", "survey-santri");
    if ($conn->connect_erno) {
        echo die("Gagal Terhubung Ke MySQL: " . $conn->connect_error);
    }

    #Proses jika tombol di Klik
    if ($_POST['submit']) {
        #Membuat variabel untuk menyimpan data inputan yang diisikan di FORM
        $old_pass       = $_POST['old_pass'];
        $new_pass       = $_POST['new_pass'];
        $confirm_pass   = $_POST['confirm_pass'];
    }
    ?>
</body>

</html>