<style>
  html, body {
  margin: 0;
  padding: 0;
  width: 100%;
}
/* Utilitários base */
.w-100 {
  width: 100%;
}

.py-5 {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.text-center {
  text-align: center;
}

.mt-3 {
  margin-top: 1rem;
}

.mb-4 {
  margin-bottom: 1.5rem;
}

.container-fluid {
  width: 100%;
  max-width: none;
  margin: 0;
  padding: 12;
}


/* Cores base monocromáticas */
.bg-light {
  background: linear-gradient(135deg, #1a1a1a, #2e2e2e); /* fundo topo escuro */
  color: white;
}

.bg-grey {
  background-color: #2f2f2f;
}

.bg-primary {
  background-color: #1a1a1a;
}

.text-white {
  color: #ffffff;
}

.text-light {
  color: #cccccc;
}

.text-dark {
  color: #333333;
}

.text-grey {
  color: #777;
}

/* Tipografia */
.display-4 {
  font-size: 3rem;
  font-weight: bold;
}

.lead {
  font-size: 1.25rem;
  margin-top: 0.5rem;
  color: #dddddd;
}

.card-title {
  color: #f0f0f0;
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.card-text {
  font-size: 1rem;
  color: #bbbbbb;
}

/* Botões */
.btn {
  display: inline-block;
  padding: 0.75rem 2rem;
  font-weight: 600;
  text-decoration: none;
  border-radius: 50px;
  transition: all 0.3s ease;
}

.btn-primary {
  background-color: #ffffff;
  color: #1a1a1a;
  border: none;
}

.btn-primary:hover {
  background-color: #e0e0e0;
  color: #000000;
}

.btn-light {
  background-color: #ffffff;
  color: #1a1a1a;
  border: none;
}

.btn-light:hover {
  background-color: #dddddd;
  color: #000;
}

.btn-light-grey {
  background-color: #f0f0f0;
  color: #2f2f2f;
  border: none;
}

.btn-light-grey:hover {
  background-color: #e0e0e0;
  color: #000;
}

/* Cartões */
.card {
  border: none;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  background-color: #1f1f1f;
}

.card:hover {
  transform: translateY(-5px);
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
}

.card-body {
  padding: 2rem;
}

/* Grid */
.row {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
}

.col-md-4 {
  flex: 1 1 calc(33.333% - 1rem);
  min-width: 250px;
}

.g-4 {
  gap: 1.5rem;
}
.bg-light-grey {
  background-color: #1e1e1e; /* Um cinza escuro, diferente do header */
}

.text-grey {
  color: #aaaaaa;
}

.btn-white {
  background-color: #ffffff;
  color: #1e1e1e;
  border: none;
  padding: 0.75rem 2rem;
  border-radius: 50px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-white:hover {
  background-color: #dddddd;
  color: #000;
}

</style>
<!-- Apresentação -->
<header class="bg-light text-center py-5 w-100">
  <div class="container-fluid">
    <h1 class="display-4">Centro de Explicações Explica</h1>
    <p class="lead">Apoio de preparação de exames. Sucesso garantido!</p>
    <a href="#servicos" class="btn btn-primary btn-lg mt-3">Ver disciplinas</a>
  </div>
</header>

<!-- Serviços -->
<section id="servicos" class="py-5 w-100">
  <div class="container-fluid">
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
<section class="bg-light-grey text-white py-5 text-center w-100">
  <div class="container-fluid">
    <h2 class="mb-3">Horários Flexíveis</h2>
    <p class="mb-4 text-grey">Aulas durante a semana. Marca já a tua explicação!</p>
    <a href="#contato" class="btn btn-white">Fale connosco</a>
  </div>
</section>



