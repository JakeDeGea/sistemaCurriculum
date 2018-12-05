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

    } ?>


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

      <section id="corpo">
        <header>
          <h1>Cadas&shy;tro de Fun&shy;cioná&shy;rio</h1>
        </header>
        <section>
          <div class="container-fluid" id="container_cad_func">
            <form id="form_cadastro_funcionario" action="#" method="post">
              <fieldset id="field_dados_pessoais">
                <legend>Dados Pessoais</legend>

                <!-- linha 1  -->
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="i_nome">Nome</label>
                    <input type="text" class="form-control" id="i_nome" placeholder="Insira seu nome completo aqui">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_nascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="i_nascimento">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="">Sexo</label>
                    <br>
                    <input class="form-check-input" type="radio" name="i_sexo" id="i_masc" value="m" checked>
                    <label class="form-check-label" for="i_masc">
                      Masculino
                    </label>
                    <input class="form-check-input" type="radio" name="i_sexo" id="i_fem" value="f">
                    <label class="form-check-label" for="i_fem">
                      Feminino
                    </label>
                  </div>
                </div>

                <!-- linha 2 -->
                <div class="form-row">
                  <div class="form-group col-md-5">
                    <label for="i_nacionalidade">Nacionalidade</label>
                    <input type="text" class="form-control" id="i_nacionalidade" placeholder="Insira sua nacionalidade">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="i_naturalidade">Naturalidade</label>
                    <input type="text" class="form-control" id="i_naturalidade" placeholder="Insira sua naturaliade">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_est_civil">Estado Civil</label>
                    <select class="form-control" id="i_est_civil">
                      <option>Solteiro(a)</option>
                      <option>Casado(a)</option>
                      <option>Namorando</option>
                      <option>Viúvo(a)</option>
                      <option selected>Fudido(a)</option>
                    </select>
                  </div>
                </div>

                <!-- linha 3 -->
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="i_cpf">CPF</label>
                    <input type="text" class="form-control" id="i_cpf" placeholder="000.000.000-00">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_rg">RG</label>
                    <input type="text" class="form-control" id="i_rg" placeholder="">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_data_rg">Data de Emissão do RG</label>
                    <input type="date" class="form-control" id="i_data_rg" placeholder="">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_orgao_rg">Orgão Emissor do RG</label>
                    <input type="text" class="form-control" id="i_orgao_rg" placeholder="">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_pis">PIS</label>
                    <input type="text" class="form-control" id="i_pis" placeholder="000.0000.000-0">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_pasep">PASEP</label>
                    <input type="text" class="form-control" id="i_pasep" placeholder="000.0000.000-0">
                  </div>
                </div>

                <!-- linha 4 -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="i_nome_mae">Nome da Mãe</label>
                    <input type="text" class="form-control" id="i_nome_mae" placeholder="Insira o nome de sua mãe aqui">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="i_nome_pai">Nome do Pai</label>
                    <input type="text" class="form-control" id="i_nome_pai" placeholder="Insira o nome de seu pai aqui">
                  </div>
                </div>
              </fieldset>
              <fieldset id="field_contato">
                <legend>Contato</legend>

                <!-- linha 5 -->
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="i_email">E-mail</label>
                    <input type="email" class="form-control" id="i_email" placeholder="fulano@email.com">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_telefone">Telefone</label>
                    <input type="text" class="form-control" id="i_telefone" placeholder="(99) 9 9999-9999">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_celular">Celular</label>
                    <input type="text" class="form-control" id="i_celular" placeholder="(99) 9 9999-9999">
                  </div>
                </div>
              </fieldset>
              <fieldset id="field_endereco">
                <legend>Endereço</legend>

                <!-- linha 6 -->
                <div class="form-row">
                  <div class="form-group col-md-9">
                    <label for="i_rua">Logradouro</label>
                    <input type="text" class="form-control" id="i_rua" placeholder="Rua, avenida, travessa...">
                  </div>
                  <div class="form-group col-md-1">
                    <label for="i_num">Número</label>
                    <input type="number" class="form-control" id="i_num" placeholder="">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_cep">CEP</label>
                    <input type="text" class="form-control" id="i_cep" placeholder="00000-000">
                  </div>
                </div>

                <!-- linha 7 -->
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="i_complemento">Complemento</label>
                    <input type="text" class="form-control" id="i_complemento" placeholder="Descreva alguma característica complementar">
                  </div>
                </div>

                <!-- linha 8 -->
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="i_bairro">Bairro</label>
                    <input type="text" class="form-control" id="i_bairro" placeholder="Insira o nome o bairro">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="i_cidade">Cidade</label>
                    <input type="text" class="form-control" id="i_cidade" placeholder="Insira a cidade">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="i_pais">País</label>
                    <input type="text" class="form-control" id="i_pais" placeholder="Insira o país">
                  </div>
                </div>
              </fieldset>
              <fieldset id="field_user">
                <legend>Informações de Login</legend>

                <!-- linha 9 -->
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="i_username">Username</label>
                    <input type="text" class="form-control" id="i_username" placeholder="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="i_senha">Senha</label>
                    <input type="password" class="form-control" id="i_senha" placeholder="">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="i_senha_confirm">Confirme a Senha</label>
                    <input type="password" class="form-control" id="i_senha_confirm" placeholder="">
                  </div>
                </div>
              </fieldset>
              <button type="submit" class="btn" id="btn_salvar"><h2>Salvar</h2></button>
            </form>
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
