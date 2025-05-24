<?php
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .sidebar {
      width: 10%;
      height: 100vh;
    }

    .main-content {
      margin-left: 280px;
      padding: 2rem;
    }

    .section {
      margin-bottom: 20px;
      padding: 15px;
      border-radius: 10px;
      background: #f4f4f4;
    }

    .section-title {
      font-size: 18px;
      font-weight: bold;
      color: #333;
      margin-bottom: 10px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 10px;
    }

    .card {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
      font-weight: bold;
      color: #555;
    }

    .btn-logout {
      margin-top: 20px;
    }
  </style>
</head>
<body>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark text-white sidebar position-fixed">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <span class="fs-4">Área Reservada</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <?php
    $t = isset($_SESSION["tipo"]) ? $_SESSION["tipo"] : 0;
    if ($mysqli->connect_errno) {
        echo "<li class='nav-item text-danger'>Erro DB</li>";
    } else {
        $query = "SELECT * FROM menu WHERE tipo<=?";
        $statement = $mysqli->prepare($query);
        $statement->bind_param('s', $t);
        $statement->execute();
        $statement->bind_result($id, $nome, $link, $tipo);
        while ($statement->fetch()) {
            if ($t == 2 && $nome == "Login") {
                echo '<li class="nav-item"><a href="?ad=logout" class="nav-link text-white">Logout</a></li>';
            } else {
                echo '<li class="nav-item"><a href="' . $link . '" class="nav-link text-white">' . $nome . '</a></li>';
            }
        }
        $statement->close();
    }
    ?>
  </ul>
  <hr>
  
</div>

<div class="main-content">
  <h1>Área Reservada</h1>

  <div class="section">
    <div class="section-title">Próximas explicações</div>
    <div class="grid">
      <div class="card">Português</div>
      <div class="card">Matemática</div>
      <div class="card">Física</div>
    </div>
  </div>

  <div class="section">
    <div class="section-title">Inscrição explicações</div>
    <div class="grid">
      <div class="card">Nova 1</div>
      <div class="card">Nova 2</div>
      <div class="card">Nova 3</div>
    </div>
  </div>
</div>
<form method="post" action="logout.php">
    <button type="submit" name="out" value="out" class="btn btn-outline-light w-100">Sair</button>
  </form>
</body>
</html>
