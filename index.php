<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Centro de Explicações Escolar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php 
require_once("config.php");
include "formmenu.php";
?>
<!-- Navbar
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="#">Explica</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Área reservada</a>
  </li>
</ul>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="#">Explica</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Serviços</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Horários</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>
-->
<!-- Apresentação -->
<header class="bg-light text-center py-5">
  <div class="container">
    <h1 class="display-4">Centro de Explicações Explica</h1>
    <p class="lead">Apoio de preparação de exames. Sucesso garantido!</p>
    <a href="#servicos" class="btn btn-primary btn-lg mt-3">Ver disciplinas</a>
  </div>
</header>

<!-- Serviços -->
<section id="servicos" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Disciplinas</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <h5 class="card-title">Matemática</h5>
            <p class="card-text">Explicações individuais e em grupo para todos os anos.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <h5 class="card-title">Física e Química</h5>
            <p class="card-text">Aulas práticas e teóricas com resolução de exames.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <h5 class="card-title">Português</h5>
            <p class="card-text">Apoio na gramática, escrita e interpretação de textos.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Horários e Contacto -->
<section class="bg-primary text-white py-5 text-center">
  <div class="container">
    <h2>Horários Flexíveis</h2>
    <p class="mb-4">Aulas durante a semana. Marca já a tua explicação!</p>
    <a href="#contato" class="btn btn-light">Fale connosco</a>
  </div>
</section>


<!-- Rodapé -->
<?php
if(isset($_GET['op'])){
	$fl="form" . $_GET['op'] . ".php";
	if(file_exists($fl)){
		include $fl;
	}
	else
		include 'formerro.php';	
}
else
	include 'formlogin.php';	


?>
<footer class="bg-dark text-white text-center py-3">
  <div class="container">
    <p class="mb-0">© 2025 Explica | Todos os direitos reservados</p>
  </div>
</footer>
<?php
$mysqli->close();
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
