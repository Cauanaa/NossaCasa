<?php 
include "../controller/imovelController.php";
include "../controller/loginController.php";
LoginController::verificar();


$imovel = new imovelController();

  if(!empty($_POST['id'])){
    $imovel->update($_POST);
    header("location: imovelList.php");

  } elseif(!empty($_POST)) {
    $imovel->salvar($_POST);
    header("location: imovelList.php");

  }

  if(!empty($_GET['id'])){
    $data = $imovel->buscar($_GET['id']);
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nossa Casa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#800000	">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Nossa Casa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="imovelList.php">Imóveis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="clienteList.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="visitaList.php">Visitas</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
  <a href="login.php">
    <button style="background-color:white; color:black" class="btn" type="button">Login</button>
           </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
 <br>
  <br>
     <br>
    <div class="container">
      <h1>Anuncie seu imóvel aqui</h1>
        <form action="imovelForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/><br>
            <div class="col-3">
            <label class="form-label">Nome</label><br>
            <input type="text" class="form-control" name="nome" value="<?php echo !empty($data->nome) ? $data->nome : "" ?>">
        </div>
            <div class="col-3">
            <label class="form-label">Email</label><br>
            <input type="text" class="form-control" name="email" value="<?php echo !empty($data->email) ? $data->email : "" ?>">
        </div>
            <div class="col-3">
            <label class="form-label">Telefone</label><br>
            <input type="text" class="form-control" name="telefone" value="<?php echo !empty($data->telefone) ? $data->telefone : "" ?>">
        </div>
            <div class="col-3">
            <label class="form-label">CPF</label><br>
            <input type="text" class="form-control" name="CPF" value="<?php echo !empty($data->CPF) ? $data->CPF : "" ?>">
        </div>
        <br>
             <div class="mb-3">
    <select class="form-select" aria-label="Default select" name="funcao">
        <option selected>Selecione a sua função:</option>
        <option value="Contador" <?php if (!empty($data->funcao) && $data->funcao == "1") echo "selected"; ?>>Contador</option>
        <option value="Acessor" <?php if (!empty($data->funcao) && $data->funcao == "2") echo "selected"; ?>>Acessor</option>
        <option value="Gestor" <?php if (!empty($data->funcao) && $data->funcao == "3") echo "selected"; ?>>Gestor</option>
        <option value="Administrador" <?php if (!empty($data->funcao) && $data->funcao == "4") echo "selected"; ?>>Administrador</option>
    </select>
</div>
            
            <input type="submit" style="background-color:#800000; color:white" class="btn" value="Salvar"/>
            <a href="imovelList.php" style="background-color:#800000; color:white" class="btn">Voltar</a>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	</body>
</html>