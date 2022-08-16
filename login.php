<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/form.css"> <!-- Conexão com o css -->
    <!-- Importando a fonte 'Poppins' -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Formulário de login</title>
  </head>
  <body>
    <div class="container">
      <div class="parte-esquerda" style="background-image: url('imagens/form-imagem.png'); background-repeat: no-repeat; background-size: cover;">
        <section class="texto">
          <h1>Form Project</h1>
          <p>Um projeto <span class="automatico"></span></p>
        </section>
      </div>
      <div class="parte-direita">
        <form action="configLogin.php" method="post">
          <section class="topo">
            <h2>Entrar</h2>
            <p>Não possui uma conta? <a href="index.php"><strong>Cadastre-se</strong></a></p>
          </section>
          <div class="input-campos">
            <label for="nome">Nome</label> <br>
            <input type="text" name="nome" id="nome" required>
          </div>
          <div class="input-campos">
            <label for="senha">Senha</label> <br>
            <input type="password" name="senha" id="senha" required>
          </div>
          <input type="submit" name="submit" id="submit" class="submit" value="CONTINUAR">
          <section class="rodapé">
            <p>Ao continuar, você está aceitando nossa <br> <a href="#">Política de Privacidade</a> &amp;
            <a href="#">Termos de Serviço</a>.</p>
          </section>
        </form>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      var typed = new Typed(".automatico",{
        strings:["sobre formulário", "desenvolvido por Matheus Gonçalves"],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true
      })
    </script>
  </body>
</html>
