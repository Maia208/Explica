<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px;margin:auto" id="band">
<?php
if (!isset($_SESSION['id']) || $_SESSION['id']!=session_id())  {
		
	?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-start h-100"> <!-- Alinhamento do conteúdo para o topo -->
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 pb-5">
              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Insira o seu e-mail e password</p>
              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Email</label>
              </div>
              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>
              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>	
	<?php
	}
	else{
	?>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
			<fieldset>
				<legend>Bem-Vindo</legend>
				<h2><?php echo $_SESSION['nome'];?></h2>
				<h5>Sessão:<?php echo $_SESSION['id'];?></h5>
				<div class="buttons">
					<button id="submit" name="out" value="out">Sair</button>
				</div>
			</fieldset>
		</form>
	<?php
}
?>
</div>

<style>
    /* Ajustando a altura e o estilo do formulário */
    .card-body {
        padding: 2rem;
        height: auto;
    }

    .card {
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease-in-out;
    }

    .card:hover {
        box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
    }

    .form-control-lg {
        border-radius: 20px;
        padding: 15px 20px;
        font-size: 1rem;
    }

    .btn-outline-light {
        padding: 10px 20px;
        border-radius: 30px;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .btn-outline-light:hover {
        background-color: #fff;
        color: #333;
    }

    .btn-outline-danger {
        padding: 10px 30px;
        font-weight: 600;
        border-radius: 30px;
    }

    /* Ajustando o título e legendas */
    legend {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
    }

    h2 {
        color: #fff;
    }

    h5 {
        color: #777;
    }

    /* Removendo padding do topo */
    .gradient-custom {
        padding-top: 0 !important; /* Remove o padding do topo */
        margin-top: 0 !important; /* Remove qualquer margem superior */
    }

    /* Ajustando a altura do .container */
    .container {
        padding-top: 10px; /* Pequeno ajuste no padding do container */
    }

    /* Ajustando alinhamento */
    .vh-100 {
        margin-top: 0; /* Remove a margem do topo para mover o formulário para cima */
        margin-bottom: 0;
    }

    .row {
        align-items: flex-start !important; /* Alinha o conteúdo do formulário para o topo */
    }
</style>
