<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Film Bioskop</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #121212;
      color: #fff;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #ff4444;
      text-align: center;
      padding: 20px;
    }

    header h1 {
      margin: 0;
      font-size: 28px;
    }

    nav {
      background: #222;
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 15px;
      font-weight: bold;
    }

    nav a:hover {
      color: #ff4444;
    }

    .container {
      max-width: 1000px;
      margin: 20px auto;
      padding: 10px;
    }

    .film-card {
      background: #1e1e1e;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.3);
    }

    .film-card h2 {
      margin-top: 0;
      color: #ff4444;
    }

    footer {
      background: #222;
      text-align: center;
      padding: 15px;
      margin-top: 20px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <header>
    <h1>🎬 Film Bioskop Online</h1>
  </header>

  <nav>
    <a href="#">Home</a>
    <a href="#">Daftar Film</a>
    <a href="#">Tontonan Saya</a>
    <a href="#">Login</a>
  </nav>

  <div class="container">
    <div class="film-card">
      <h2>Judul Film: Interstellar</h2>
      <p><b>Genre:</b> Sci-Fi</p>
      <p><b>Sutradara:</b> Christopher Nolan</p>
      <p><b>Durasi:</b> 169 menit</p>
      <p><b>Sinopsis:</b> Sebuah perjalanan luar angkasa untuk mencari rumah baru bagi umat manusia.</p>
    </div>

    <div class="film-card">
      <h2>Judul Film: Parasite</h2>
      <p><b>Genre:</b> Drama</p>
      <p><b>Sutradara:</b> Bong Joon-ho</p>
      <p><b>Durasi:</b> 132 menit</p>
      <p><b>Sinopsis:</b> Kisah satir tentang kesenjangan sosial antara keluarga kaya dan miskin di Korea Selatan.</p>
    </div>
  </div>

  <footer>
    &copy; 2025 Film Bioskop Online | Dibuat dengan ❤️ pakai HTML + CSS
  </footer>

</body>
</html>
