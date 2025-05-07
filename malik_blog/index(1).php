<?php
require 'connect.php';
// lakukan penulisan query

$query = "SELECT * FROM posts";

// proses query ke data base
$results = mysqli_query($connect, $query);

?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Utama</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="d-flex">
      <a class="nav-link text-white me-3" href="#">Home</a>
      <a class="nav-link text-white me-3" href="#">Post</a>
    </div>
  </div>
</nav>


  <!-- Konten Utama -->
  <div class="container mt-4">
    <h2>Posts</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      
      <!-- Post Card 1 -->
      <div class="col">
        <div class="card">
          <div class="card-body">
            <a href="detail.php" class="text-decoration-none">
              <h5 class="card-title">Judul Post 1</h5>
            </a>
            <p class="card-text">Pengarang 1</p>
            <p class="card-text"><small class="text-muted">01 Januari 2025</small></p>
          </div>
        </div>
      </div>

      <!-- Post Card 2 -->
      <div class="col">
        <div class="card">
          <div class="card-body">
            <a href="detail.php" class="text-decoration-none">
              <h5 class="card-title">Judul Post 2</h5>
            </a>
            <p class="card-text">Pengarang 2</p>
            <p class="card-text"><small class="text-muted">02 Januari 2025</small></p>
          </div>
        </div>
      </div>

      <!-- Post Card 3 -->
      <div class="col">
        <div class="card">
          <div class="card-body">
            <a href="detail.php" class="text-decoration-none">
              <h5 class="card-title">Judul Post 3</h5>
            </a>
            <p class="card-text">Pengarang 3</p>
            <p class="card-text"><small class="text-muted">03 Januari 2025</small></p>
          </div>
        </div>
      </div>

      <!-- Post Card 4 -->
      <div class="col">
        <div class="card">
          <div class="card-body">
            <a href="detail.php" class="text-decoration-none">
              <h5 class="card-title">Judul Post 4</h5>
            </a>
            <p class="card-text">Pengarang 4</p>
            <p class="card-text"><small class="text-muted">04 Januari 2025</small></p>
          </div>
        </div>
      </div>

      <!-- Post Card 5 -->
      <div class="col">
        <div class="card">
          <div class="card-body">
            <a href="detail.php" class="text-decoration-none">
              <h5 class="card-title">Judul Post 5</h5>
            </a>
            <p class="card-text">Pengarang 5</p>
            <p class="card-text"><small class="text-muted">05 Januari 2025</small></p>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
