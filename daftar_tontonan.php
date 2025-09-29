<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Tontonan</title>
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
    <h2>Daftar Tontonan Anda</h2>
    <div class="film-list">
      <?php 
      if(isset($_SESSION['tontonan'])){
        foreach($_SESSION['tontonan'] as $film){ ?>
          <div class="film-card">
            <img src="<?= $film['poster'] ?>" alt="<?= $film['judul'] ?>">
            <h3><?= $film['judul'] ?></h3>
          </div>
      <?php 
        }
      } else {
        echo "<p>Belum ada film di daftar tontonan.</p>";
      }
      ?>
    </div>
  </section>
</body>
</html>
