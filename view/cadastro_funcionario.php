<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Funcionário</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../_css/header.css">
    <link rel="stylesheet" href="../_css/inicio.css">
    <link rel="stylesheet" href="../_css/cadastro_funcionario.css">
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
        <!-- <div class="container-fluid"> -->
          <header>
            <h1>Cadas&shy;tro de Fun&shy;cioná&shy;rio</h1>
          </header>
        <!-- </div> -->
          <section>
            <div class="">

            </div>
          </section>
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
