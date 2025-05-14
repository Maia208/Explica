<?php
require_once("config.php");


$t = isset($_SESSION["tipo"]) && $_SESSION["tipo"] !== "" ? $_SESSION["tipo"] : 0;

$mysqli = new mysqli($bd_host, $bd_user, $bd_password, $bd_database);

if ($mysqli->connect_error) {
  die('Erro: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$query = "SELECT * FROM menu WHERE tipo <= ?";
$statement = $mysqli->prepare($query);
$statement->bind_param('i', $t);
$statement->execute();
$statement->bind_result($id, $nome, $link, $tipo);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="?op=home">Explica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php while ($statement->fetch()) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo htmlspecialchars($link); ?>">
              <?php echo htmlspecialchars($nome); ?>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
