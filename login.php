<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = $pdo->prepare("SELECT * FROM prak1_pwl.user WHERE username=:a AND password=:b");
$sql->bindParam(':a', $username);
$sql->bindParam(':b', $password);
$sql->execute();

$data = $sql->fetch();

if (!empty($data)) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['email'] = $data['email'];
    header("location: " . $base_url . "./admin/index.php");
} else {
    setcookie("message", "Maaf, username atau password anda salah");
    header("location: " . $base_url . "index.php");
}
