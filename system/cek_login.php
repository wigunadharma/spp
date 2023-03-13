<?php
session_start();


// Menghubungkan dengan functions
require 'functions.php';

// Menangkap data yang dikkirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM pengguna where username = '$username' and password = '$password'");
$cek = mysqli_num_rows($result);

if ($cek > 0) {

    $data = mysqli_fetch_assoc($result);

    if ($data['level'] == "1") {
        $_SESSION['username'] = $username;
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['level'] = "1";
        header("Location: ../index.php");
    } elseif ($data['level'] == "2") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "2";
        header("Location: ../petugas.php");
    } elseif ($data['level'] == "3") {
        $_SESSION['id_siswa'] = $data['id_siswa'];
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "3";
        header("Location: ../siswa.php");
    } else {
        header("Location:../login.php?pesan=salah");
    }
} else {

    header("Location:../login.php?pesan=salah");
}
