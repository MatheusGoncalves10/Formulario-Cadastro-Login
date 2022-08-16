<?php
  session_start();

  if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  }
  $usuario = $_SESSION['nome'];


?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo/perfil.css">
    <!-- Importando a fonte 'Poppins' -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Perfil</title>
  </head>
  <body style="background-image: url('imagens/form-imagem.png'); background-repeat: no-repeat; background-size: cover;">
    <div class="user">
      <?php
          echo "<h1>$usuario</h1>";
      ?>
    </div>
    <div class="botão">
        <button type="button"><a href="logout.php">SAIR</a></button>
    </div>
  </body>
</html>
