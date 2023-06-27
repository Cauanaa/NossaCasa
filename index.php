

<DOCTYPE html>
    <html>
        <head>
            <title>Nossa Casa</title>
            <meta charset="UTF-8">


            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
          </head>
        <body>
            
            <header>
              
           
                <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#800000	">

  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Nossa Casa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="./view/imovelList.php">Imóveis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./view/clienteList.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./view/visitaList.php">Visitas</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
  <a href="./view/login.php">
    <button class="btn " style="background-color: white; color: black;" type="button">Login</button>
        </a>
      </li>
    </div>
  </div>
</nav>
</header>
  <br>
    <br>
      <br>
      <div class="container">
  <div class="flex-wrap d-flex justify-content-center" style="gap: 20px">

    <div class="col-md-5 rounded border border-2 card">
  <div class="card-body">
    <div style="display: flex; gap: 40px; align-items: center; padding-left: 24px" >
    <!-- <img src="img/trabalheconosco.png" class="rounded-circle mx-auto d-block align-middle" width="40%"> -->
    <i class="fa-solid fa-house" style="font-size: 90px"></i>
    <div><h5 class="card-title">Anuncie na Nossa Casa</h5>
    <p class="card-text">Cadastre sua casa ou apartamento para aluguel ou venda.</p>
    <a  class="btn" href="./view/imovelForm.php" style="background-color: #800000; color: white;">Cadastre seu imóvel</a>
  </div>
    </div></div>
</div>

<div class="col-md-5 rounded border border-2 card">
  <div class="card-body">
  <div style="display: flex; gap: 40px; align-items: center; padding-left: 24px" >
    <!-- <img src="img/trabalheconosco.png" class="rounded-circle mx-auto d-block align-middle" width="40%"> -->
    <i class="fa-solid fa-user" style="font-size: 90px"></i>
    <div><h5 class="card-title">Cadastre-se</h5>
    <p class="card-text">Preencha os campos com seus dados e informações a seguir.</p>
    <a  class="btn" href="./view/clienteForm.php" style="background-color: #800000; color: white;">Cadastrar-se</a>
  </div>
    </div></div>
</div>

<div class="col-md-5 rounded border border-2 card">
  <div class="card-body">
  <div style="display: flex; gap: 40px; align-items: center; padding-left: 24px" >
    <!-- <img src="img/trabalheconosco.png" class="rounded-circle mx-auto d-block align-middle" width="40%"> -->
    <i class="fa-solid fa-calendar-days" style="font-size: 90px"></i>
    <div><h5 class="card-title">Agende sua visita</h5>
    <p class="card-text">Escolha a data e horário para fazer uma visita em alguma propriedade com um de nossos corretores.</p>
    <a  class="btn" href="./view/visitaForm.php" style="background-color: #800000; color: white;">Agendar Visita</a>
  </div>
    </div></div>
</div>

  </div>
</div>






