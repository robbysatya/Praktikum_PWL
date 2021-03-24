<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if (!isset($_SESSION['username'])) { // Jika tidak ada session username berarti dia belum login
    header("location: ../index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil Login</title>
</head>

<body>
    <h1>Selamat datang <?php echo $_SESSION['nama']; ?></h1>
    <h4>Anda berhasil login ke dalam aplikasi. Berikut data diri Anda yang tersimpan pada database kami :</h4>
    <table style="margin-bottom: 15px;">
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?php echo $_SESSION['username'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_SESSION['nama'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $_SESSION['email'] ?></td>
        </tr>
    </table>
    <a href="logout.php">Logout</a>
</body>

</html>