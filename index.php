<?php
require_once("config.php");
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Explica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  .full-width-section {
    width: 100vw;
    margin-left: calc(-50vw + 50%);
    padding-left: 0;
    padding-right: 0;
  }
</style>

</head>
<body>

<?php include "menu.php"; ?>

<div class="container mt-4">
  <?php
  if (isset($_GET['op'])) {
    $op = basename($_GET['op']); // Protege
    $fl = $op . ".php";

    if (file_exists($fl)) {
      include $fl;
    } else {
      include 'formerro.php';
    }
  } else {
    include 'home.php'; // Página inicial por defeito
  }
  ?>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
  <p class="mb-0">© 2025 Explica | Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

