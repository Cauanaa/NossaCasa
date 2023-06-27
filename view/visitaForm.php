<?php 
include "../controller/visitaController.php";
include "../controller/LoginController.php";
LoginController::verificar();


$visita = new visitaController();

  if(!empty($_POST['id'])){
    $visita->update($_POST);
    header("location: visitaList.php");

  } elseif(!empty($_POST)) {
    $visita->salvar($_POST);
    header("location: visitaList.php");

  }

  if(!empty($_GET['id'])){
    $data = $visita->buscar($_GET['id']);
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
      <h1>Agende sua visita com um dos nossos corretores </h1>
        <form action="visitaForm.php" method="POST">
            <input type="hidden" name="id" value="<?php echo !empty($data->id) ? $data->id : "" ?>"/><br>
            <div class="col-3">
            <label class="form-label">Titulo</label><br>
            <input type="text" class="form-control" name="titulo" value="<?php echo !empty($data->titulo) ? $data->titulo : "" ?>">
        </div>
        <div class="col-3">
            <label class="form-label">Data</label><br>
            <input type="date" class="form-control" name="data" value="<?php echo !empty($data->data) ? $data->data : "" ?>">
        </div>
        <div class="col-3">
            <label class="form-label">Horário</label><br>
            <input type="time" class="form-control" name="horario" value="<?php echo !empty($data->horario) ? $data->horario : "" ?>">
        </div>
        <div class="col-3">
        <label class="form-label">Selecione:</label>
        <select class="form-select" aria-label="Default select" name="imovel">
        <option value="Casa" <?php if (!empty($data->imovel) && $data->imovel == "Casa") echo "selected"; ?>>Casa</option>
        <option value="Apartamento" <?php if (!empty($data->imovel) && $data->imovel == "Apartamento") echo "selected"; ?>>Apartamento</option>
    </select>
</div>
            <div class="col-3">
            <label class="form-label">Selecione:</label>
            <select class="form-select" aria-label="Default select" name="forma">
        <option value="compra" <?php if (!empty($data->forma) && $data->forma == "compra") echo "selected"; ?>>Comprar</option>
        <option value="aluguel" <?php if (!empty($data->forma) && $data->forma == "aluguel") echo "selected"; ?>>Alugar</option>
    </select>
        </div>
            <div class="col-3">
            <label class="form-label">Valor</label><br>
            <input type="text" class="form-control" name="valor" value="<?php echo !empty($data->valor) ? $data->valor : "" ?>">
        </div>
            <div class="col-3">
            <label class="form-label">Telefone</label><br>
            <input type="text" class="form-control" name="telefone" value="<?php echo !empty($data->telefone) ? $data->telefone : "" ?>">
        </div>
        <div class="col-3">
            <label class="form-label">Localização desejada</label>
            <input type="text" class="form-control"name="localizacao" value="<?php echo !empty($data->localizacao) ? $data->localizacao : "" ?>">
        </div>
           <br>
            <input type="submit" style="background-color:#800000; color:white" class="btn" value="Salvar"/>
            <a href="visitaList.php" class="btn" style="background-color:#800000; color: white">Voltar</a>
        </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	</body>
</html>