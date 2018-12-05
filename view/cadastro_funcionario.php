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
            <h1>Cadastro de Funcionário</h1>
          </header>
          <!-- Form de cadastro -->
              <form id="dados" method="post" action="../controller/funcionario/inserirfuncionario.php" class="cadastroFun">
                  <fieldset>
                    <div>
                      <label style="margin-left: 20%">Login</label>
                      <input placeholder="Digite o nome para usuário" style="width: 50%; margin-left: 20%" type="text" name="txtLogin" id="login"/>
                    </div>

                    <div>
                      <label style="margin-top: 3%; margin-left: 19%">Senha</label>
                      <input placeholder="Senha" style="width: 50%; margin-left: 20%" type="password" name="txtSenha" id="senha"/>
                    </div>

                    <!-- Consulta na tabela de cargos para setar -->
                    <div style="margin-top: 3%; margin-left: 20%" class="col-md-6">
                      <label>Cargo:</label>
                      <div class="input-group mb-1">
                        <select class="custom-select" name="selectCargo" id="inputGroupSelect02">
                          <option selected>Escolha...</option>
                          <option><?php foreach ($conecta->query('SELECT * FROM cargos ORDER BY nome ASC') as $row) {
                            echo '<option value="' .$row['id'].'">' . $row['nome'].'</option>';
                          } ?>
                        </option>
                        </select>
                      </div>
                    </div>
                    <br>
                    <button id="cadastrar" style="float:left; margin-left: 20%" type="submit" class="btn btn-primary mb-2" name="cadastrar" value="Cadastrar">Salvar</button>
                    <button id="limpar" style="float:left; margin-left: 1%" type="button" class="btn btn-secondary mb-2" name="limpar" value="Limpar">Limpar</button>
                    </fieldset>
                    <form>
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
