<?php
require 'config/db.php';
$posts = $conn->query("SELECT posts.*, users.fullname FROM posts JOIN users ON posts.user_id = users.id ORDER BY create_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Blog</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
  <h1 class="mb-4">Blog Publik</h1>
  <?php while ($row = $posts->fetch_assoc()): ?>
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title"><a href="post/detail.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></h5>
        <h6 class="card-subtitle mb-2 text-muted">By <?= $row['fullname'] ?> on <?= date("d M Y", strtotime($row['create_at'])) ?></h6>
      </div>
    </div>
  <?php endwhile; ?>
</div>
</body>
</html>