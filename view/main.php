<?php
  include '../controller/loginController.php';
  loginController::verificar();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Nossa Casa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container text-center mt-5">
      <h3>Nossa Casa</h3>
      <?php
        echo "Seja bem-vindo(a): " .$_SESSION['login']. " <a href='login.php'>Sair</a>";
      ?>
      <div class="mt-5">
        <a href="../index.php" class="btn btn-primary">Voltar para a tela inicial</a>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
