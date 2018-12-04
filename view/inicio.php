<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Curriculum</title>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1"> -->

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../_css/header.css">
    <!-- <link rel="stylesheet" href="_css/dashboard.css"> -->
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
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <span style="background-color: black"><i style="color: white" class="glyphicon glyphicon-user"></i> Funcionarios</span>
                    </button>
                  </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <ul class="list-unstyled components">
                      <li>
                        <a href="https://www.google.com">Cadastrar Funcionário</a>
                      </li>
                      <li>
                        <a href="#pageFuncionarios">Excluir Funcionario</a>
                      </li>
                      <li>
                        <a href="#pageEventos">Buscar Funcionário</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- <ul class="list-unstyled components">
              <li>
                <a href="#pageUsuarios"><i style="color: white" class="glyphicon glyphicon-user"></i> Usuarios</a>

              </li>
              <li>
                <a href="#pageFuncionarios"><i style="color: white" class="glyphicon glyphicon-user"></i> Funcionarios</a>
              </li>
              <li>
                <a href="#pageEventos"><i style="color: white" class="glyphicon glyphicon-list-alt"></i> Eventos</a>
              </li>
              <li>
                <a href="#pageCurriculos"><i style="color: white" class="	glyphicon glyphicon-file"></i> Curriculos</a>
              </li>
            </ul> -->
          </section>
        </nav>
      </aside>

      <!-- O conteúdo é aqui -->
      <section id="corpo" >
        <div class="container-fluid">
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
