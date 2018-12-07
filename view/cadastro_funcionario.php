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
                <a href="cadastro_funcionario.php"><i style="color: white" class="glyphicon glyphicon-user"></i>Cadas&shy;trar Funcio&shy;nário</a>
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
        <?php if(isset($_GET['cadastroRealizado']) && $_GET['cadastroRealizado']) { ?>
          <div class="alert alert-success">
            <h3 class="font-weight-bold">Sucesso!</h3>
            <hr>
            <h4>Cadastro realizado</h4>
          </div>
        <?php } ?>
        <section>
          <div class="container-fluid" id="container_cad_func">
          <form id="form_cadastro_funcionario" action="../controller/funcionario/inserirfuncionario.php" method="post">
              <fieldset id="field_dados_pessoais">
                <legend>Dados Pessoais</legend>

                <!-- linha 1  -->
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="i_nome">Nome</label>
                    <input type="text" class="form-control" name="i_nome" id="i_nome" placeholder="Insira seu nome completo aqui" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_nascimento">Data de Nas&shy;cimen&shy;to</label>
                    <input type="date" class="form-control" name="i_nascimento" id="i_nascimento" required>
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
                      Femi&shy;nino
                    </label>
                  </div>
                </div>

                <!-- linha 2 -->
                <div class="form-row">
                  <div class="form-group col-md-5">
                    <label for="i_nacionalidade">Na&shy;ciona&shy;lida&shy;de</label>
                    <input type="text" class="form-control" name="i_nacionalidade" id="i_nacionalidade" placeholder="Insira sua nacionalidade" required>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="i_naturalidade">Natu&shy;rali&shy;dade</label>
                    <input type="text" class="form-control" name="i_naturalidade" id="i_naturalidade" placeholder="Insira sua naturaliade">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_est_civil">Esta&shy;do Ci&shy;vil</label>
                    <select class="form-control" name="i_est_civil" id="i_est_civil">
                      <option>Sol&shy;teiro(a)</option>
                      <option>Casa&shy;do(a)</option>
                      <option>Namo&shy;ran&shy;do</option>
                      <option>Viúvo(a)</option>
                      <option selected>Fu&shy;dido(a)</option>
                    </select>
                  </div>
                </div>

                <!-- linha 3 -->
                <div class="form-row">
                  <div class="form-group col-md-2">
                    <label for="i_cpf">CPF</label>
                    <input type="text" class="form-control" name="i_cpf" id="i_cpf" placeholder="000.000.000-00" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_rg">RG</label>
                    <input type="text" class="form-control" name="i_rg" id="i_rg" placeholder="" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_data_rg">Data de Emis&shy;são do RG</label>
                    <input type="date" class="form-control" name="i_data_rg" id="i_data_rg" placeholder="" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_orgao_rg">Orgão Emis&shy;sor do RG</label>
                    <input type="text" class="form-control" name="i_orgao_rg" id="i_orgao_rg" placeholder="" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_pis">PIS</label>
                    <input type="text" class="form-control" name="i_pis" id="i_pis" placeholder="000.0000.000-0" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_pasep">PASEP</label>
                    <input type="text" class="form-control" name="i_pasep" id="i_pasep" placeholder="000.0000.000-0" required>
                  </div>
                </div>

                <!-- linha 4 -->
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="i_nome_mae">Nome da Mãe</label>
                    <input type="text" class="form-control" name="i_nome_mae" id="i_nome_mae" placeholder="Insira o nome de sua mãe aqui" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="i_nome_pai">Nome do Pai</label>
                    <input type="text" class="form-control" name="i_nome_pai" id="i_nome_pai" placeholder="Insira o nome de seu pai aqui" required>
                  </div>
                </div>
              </fieldset>
              <fieldset id="field_contato">
                <legend>Con&shy;tato</legend>

                <!-- linha 5 -->
                <div class="form-row">
                  <div class="form-group col-md-8">
                    <label for="i_email">E-mail</label>
                    <input type="email" class="form-control" name="i_email" id="i_email" placeholder="fulano@email.com" required>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_telefone">Tele&shy;fone</label>
                    <input type="text" class="form-control" name="i_telefone" id="i_telefone" placeholder="(99) 9 9999-9999">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_celular">Celu&shy;lar</label>
                    <input type="text" class="form-control" name="i_celular" id="i_celular" placeholder="(99) 9 9999-9999" required>
                  </div>
                </div>
              </fieldset>
              <fieldset id="field_endereco">
                <legend>Ende&shy;reço</legend>

                <!-- linha 6 -->
                <div class="form-row">
                  <div class="form-group col-md-9">
                    <label for="i_rua">Logra&shy;douro</label>
                    <input type="text" class="form-control" name="i_rua" id="i_rua" placeholder="Rua, avenida, travessa..." required>
                  </div>
                  <div class="form-group col-md-1">
                    <label for="i_num">Número</label>
                    <input type="number" class="form-control" name="i_num" id="i_num" placeholder="">
                  </div>
                  <div class="form-group col-md-2">
                    <label for="i_cep">CEP</label>
                    <input type="text" class="form-control" name="i_cep" id="i_cep" placeholder="00000-000" required>
                  </div>
                </div>

                <!-- linha 7 -->
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <label for="i_complemento">Comple&shy;mento</label>
                    <input type="text" class="form-control" name="i_complemento" id="i_complemento" placeholder="Descreva alguma característica complementar">
                  </div>
                </div>

                <!-- linha 8 -->
                <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="i_bairro">Bair&shy;ro</label>
                    <input type="text" class="form-control" name="i_bairro" id="i_bairro" placeholder="Insira o nome o bairro" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="i_cidade">Ci&shy;dade</label>
                    <input type="text" class="form-control" name="i_cidade" id="i_cidade" placeholder="Insira a cidade" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="i_estado">Estado</label>
                    <input type="text" class="form-control" name="i_estado" id="i_estado" placeholder="Insira o estado" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="i_pais">País</label>
                    <input type="text" class="form-control" name="i_pais" id="i_pais" placeholder="Insira o país" required>
                  </div>
                </div>
              </fieldset>
              <fieldset id="field_user">
                <legend>Infor&shy;mações de Login</legend>

                <!-- linha 9 -->
                <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="i_username">User&shy;name</label>
                    <input type="text" class="form-control" id="i_username" name="i_username" placeholder="" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="i_senha">Senha</label>
                    <input type="password" class="form-control" name="i_senha" id="i_senha" placeholder="" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="i_senha_confirm">Con&shy;firme a Senha</label>
                    <input type="password" editable="false" class="form-control" name="i_senha_confirm" id="i_senha_confirm" placeholder="" required>
                  </div>
                </div>
              </fieldset>
              <button type="submit" class="btn" id="btn_salvar"><h2>Salvar</h2></button>
              <button type="button" class="btn" id="btn_pesquisar"><h2>Pesquisar</h2></button>
              <button type="button" class="btn" id="btn_excluir"><h2>Excluir</h2></button>
              <button type="button" class="btn" id="btn_limpar"><h2>Limpar</h2></button>
            </form>
          </div>
        </section>
      </section>
    </div>

    <!-- modal improvisado -->
    <div id="modal_container"></div>
    <div id="modalzao_massa">
      <form id="modal_form" action="">
        <div class="form-row">
          <div class="form-group col-md">
            <label for="m_cpf">Informe o CPF do Funcionário</label>
            <input type="text" name="m_cpf" id="m_cpf" value="" placeholder="000.000.000-00" required>
          </div>
        </div>
        <button type="submit" class="btn" name="b_m_pesquisar_func" id="b_m_pesquisar_func">Pesquisar</button>
      </form>
    </div>
    <!-- fim modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.0/dist/sweetalert2.all.min.js" integrity="sha256-FABHlNZdWEEvD1Ge8L18a01NTTLNiZ4uD8hdl5QG5BI=" crossorigin="anonymous"></script>

    <!--  FUNÇÕES EM JAVASCRIPT-->
    <script>
      $(document).ready(function () {
        $('#btn_limpar').on('click', function () {
          $('#i_nome').val('');
          $('#i_nascimento').val('');
          $('#i_nacionalidade').val('');
          $('#i_naturalidade').val('');
          $('#i_cpf').val('');
          $('#i_rg').val('');
          $('#i_data_rg').val('');
          $('#i_orgao_rg').val('');
          $('#i_pis').val('');
          $('#i_pasep').val('');
          $('#i_nome_mae').val('');
          $('#i_nome_pai').val('');
          $('#i_email').val('');
          $('#i_telefone').val('');
          $('#i_celular').val('');
          $('#i_rua').val('');
          $('#i_num').val('');
          $('#i_cep').val('');
          $('#i_complemento').val('');
          $('#i_bairro').val('');
          $('#i_cidade').val('');
          $('#i_estado').val('');
          $('#i_pais').val('');
          $('#i_username').val('');
          $('#i_senha').val('');
          $('#i_senha_confirm').val('');
          $('#i_nome').focus();
        });
        $('#sideCollapse').on('click', function () {
          $('#sidebar').toggleClass('active');
        });
        $('#modal_container').on('click', function () {
          $('#modal_container').hide();
          $('#modalzao_massa').hide();
        });
        $('#btn_pesquisar').on('click', function () {
          $('#modal_container').show();
          $('#modalzao_massa').show();
        });
        // $('#b_m_pesquisar_func').submit(function(e){
        $('#b_m_pesquisar_func').on('click', function(e){
          // verifica erro e pega as informações do form do modal e passa por get pra consuta
          e.preventDefault();
          var values = $("#modal_form").serialize();
          console.log(values);

          $.get('../controller/funcionario/pesquisar_funcionario.php?' + values, function(data){
            // usa a variável data pra pegar as informações da pesquisa
            var response = $.parseJSON(data);
            console.log(response)

            // se a vaiável sucess for verdadeira mostra as informações trazidas pela data
            if(response.success) {
              var data = response.data;

              $('#i_nome').val(data.nome);
              $('#i_nascimento').val(data.nascimento);
              $('#i_sexo').val(data.sexo);
              $('#i_naturalidade').val(data.naturalidade);
              $('#i_nacionalidade').val(data.nacionalidade);
              $('#i_est_civil').val(data.estado_civil);
              $('#i_rg').val(data.rg);
              $('#i_data_rg').val(data.data_emissao_rg);
              $('#i_orgao_rg').val(data.orgao_emissor_rg);
              $('#i_pis').val(data.numero_pis);
              $('#i_pasep').val(data.numero_pasep);
              $('#i_nome_mae').val(data.nomeda_mae);
              $('#i_nome_pai').val(data.nomedo_pai);
              $('#i_email').val(data.email);
              $('#i_telefone').val(data.telefone);
              $('#i_celular').val(data.telefone_celular);
              $('#i_rua').val(data.rua);
              $('#i_num').val(data.numero);
              $('#i_cep').val(data.cep);
              $('#i_complemento').val(data.complemento);
              $('#i_bairro').val(data.bairro);
              $('#i_cidade').val(data.cidade);
              $('#i_estado').val(data.estado);
              $('#i_pais').val(data.pais);
              $('#i_username').val(data.login);
              $('#i_cpf').val(data.cpf);

              // esconde o modal
              $('#modal_container').hide();
              $('#modalzao_massa').hide();

              //mensagem de confirmação massa
              swal({
                position: 'center',
                type: 'success',
                title: 'Funcionário encontrado!',
                showConfirmButton: false,
                timer: 1200
              })

            } else {
              // esconde o modal
              $('#modal_container').hide();
              $('#modalzao_massa').hide();

              //mensagem de erro massa
              swal({
                position: 'center',
                type: 'error',
                title: 'Funcionário não encontrado!',
                showConfirmButton: false,
                timer: 1200
              })
            } // fim else
          } /* fim do get*/);
        }); //fim da função Pesquisar
      });
    </script>
  </body>
</html>
