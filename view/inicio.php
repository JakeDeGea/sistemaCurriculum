<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Curriculum</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../_css/header.css">
    <link rel="stylesheet" href="../_css/inicio.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
  </head>
  <body>
    <?php
      require_once("../model/conexao.php");
      require_once("../model/validacaoLogin.php"); //VERIFICA DADOS DO USUÁRIO CONECTADO (ID_USER, SENHA, E NÍVEL)
      require_once("../controller/seguranca.php"); //INCLUIR FUNÇÕES DE SEGURANÇA E CHAMA-LAS ABAIXO
      include ("../header.php");
      protegePagina();
    ?>
    <div class="wrapper">
      <aside class="">
        <nav id="sidebar">
          <header>
            <div class="sidebar-header">
              <h5 style="text-align: center">Opções</h5>
            </div>
          </header>
          <section>
            <ul id="opcoes_side_bar" class="list-unstyled components">
              <li>
                <a href="cadastro_funcionario.php"><i style="color: white" class="glyphicon glyphicon-user"></i>Cadastrar Funcionário</a>
              </li>
            </ul>
          </section>
        </nav>
      </aside>

      <!-- O conteúdo é aqui -->
      <section id="corpo" >
        <div class="container-fluid">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </section>
    </div>
    
    <!--  FUNÇÕES EM JAVASCRIPT PARA DASHBOARD-->
    <script>
      $(document).ready(function () {
        $('#sideCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
        });
      });
    </script>
  </body>
</html>
