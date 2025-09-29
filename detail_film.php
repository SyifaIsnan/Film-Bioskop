<?php
require "koneksi.php";
session_start();

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM film WHERE id=$id") or die(mysqli_error($conn));
$film = mysqli_fetch_assoc($query);

// Tambah ke daftar tontonan
if(isset($_POST['tambah'])){
    $_SESSION['tontonan'][] = $film; // simpan film ke session
    header("Location: daftar_tontonan.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $film['judul'] ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="navbar">
    <h1>FilmBioskop</h1>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="daftar_tontonan.php">Daftar Tontonan</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  </div>

  <section>
    <h2><?= $film['judul'] ?></h2>
    <img src="img/<?= $film['poster'] ?>" alt="<?= $film['judul'] ?>" width="200">
    <p><?= $film['sinopsis'] ?></p>

    <form method="post">
      <button type="submit" name="tambah">Tambah ke Daftar Tontonan</button>
    </form>
  </section>
</body>
</html>
