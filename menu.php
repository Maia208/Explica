<style>
    body {
      font-family: Arial, sans-serif;
    }
  </style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MeuSite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarConteudo" aria-controls="navbarConteudo" aria-expanded="false" aria-label="Alternar navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarConteudo">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php
          $t=0;
          if(isset($_SESSION["tipo"])){
            if($_SESSION["tipo"]!=0) {  
              $t=$_SESSION["tipo"];
            } else {
              $t=0;
            }
          }
          $query = "SELECT * FROM menu WHERE tipo<=?";
          $statement = $mysqli->prepare($query);
          $statement->bind_param('s',$t);
          $statement->execute();
          $statement->bind_result($id,$nome,$link,$tipo);
          while ($statement->fetch()) {
            if($t == 2 && $nome == "Login") {
              echo '<li class="nav-item"><a class="nav-link" href="?ad=logout">Logout</a></li>';
            } else {
              echo '<li class="nav-item"><a class="nav-link" href="'.$link.'">'.$nome.'</a></li>';
            }
          }
          $statement->close();
        ?>
      </ul>
    </div>
  </div>
</nav>

