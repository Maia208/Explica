<div class="w3-top">

  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
<?php
  require_once("config.php");
  $t=0;
  if(isset($_SESSION["tipo"])){
    if($_SESSION["tipo"]!="")
    {  
      $t=$_SESSION["tipo"];
    }
    else
      $t=0;
  }
  $mysqli = new mysqli($bd_host,$bd_user,$bd_password,$bd_database);

	// Mostrar erros, caso existam
	if ($mysqli->connect_error) {
		die('Erro: ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}

  $query = "SELECT * FROM menu WHERE tipo<=?";
  $statement = $mysqli->prepare($query);

  // Ligar os parametros aos ?, onde (s = string, i = integer, d = double,  b = blob)
  $statement->bind_param('s',$t);

  // Executar o query
  $statement->execute();

  // Ligar o resultado a variáveis
  $statement->bind_result($id,$nome,$link,$tipo);
  while ($statement->fetch()) {
?>
  <ul class="nav justify-content-end">
    <li class="nav-item">
      <a href="<?php echo $link;?>" class="nav-link"><?php echo $nome;?></a>
    </li>
  <?php
  }
  ?>
  </ul>
  <?php
  if (isset($_SESSION['id']) && $_SESSION['id']==session_id())  {
  ?>

  <span href="javascript:void(0)" class="w3-padding-large w3-hide-small w3-right">
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    
      <legend>Bem-Vindo <?php echo $_SESSION['nome'];?> <button class="w3-hover-red" id="submit" name="out" value="out">Sair</button></legend>
      
    
  </form>
  </span>
  <?php
}
?>
  </div>
</div>