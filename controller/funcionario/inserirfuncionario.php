<?php
require_once ("../../model/conexao.php");  //Conexao com o banco
include ("../seguranca.php"); //INCLUIR FUNÇÕES DE SEGURANÇA E CHAMA-LAS ABAIXO

if (!$conecta) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  if ((isset($_POST['i_username']) && ($_POST['i_username'] != '')) &&
    (isset($_POST['i_senha_confirm']) && ($_POST['i_senha_confirm'] != '')) &&
    (isset($_POST['i_senha']) && ($_POST['i_senha'] != '')) ) {

    $user = $_POST['i_username'];
    $senha = $_POST['i_senha'];
    $senhaConfirm = $_POST['i_senha_confirm'];



    if ($senha == $senhaConfirm) {
      $sql = "SELECT * FROM usuarios WHERE login = '$user'";
      $acesso = mysqli_query($conecta, $sql);
      $resultado = mysqli_fetch_assoc($acesso);
      // var_dump(count($resultado));
      $hash = password_hash($senha, PASSWORD_DEFAULT);
      $aux = count($resultado);
      if ($aux == 0) {
        // aqui comeca a parte de enderecos
        if ((isset($_POST['i_rua']) && ($_POST['i_rua'] != '')) &&
        (isset($_POST['i_cep']) && ($_POST['i_cep'] != '')) &&
        (isset($_POST['i_bairro']) && ($_POST['i_bairro'] != '')) &&
        (isset($_POST['i_cidade']) && ($_POST['i_cidade'] != '')) &&
        (isset($_POST['i_pais']) && ($_POST['i_pais'] != '')) ) {

          $rua = $_POST['i_rua'];
          $cep = $_POST['i_cep'];
          $numero = $_POST['i_num'];
          $complemento = $_POST['i_complemento'];
          $bairro = $_POST['i_bairro'];
          $cidade = $_POST['i_cidade'];
          $estado = $_POST['i_estado'];
          $pais = $_POST['i_pais'];

          // aqui começa a validação do Funcionário
          if ((isset($_POST['i_nome']) && ($_POST['i_nome'] != '')) &&
          (isset($_POST['i_nascimento']) && ($_POST['i_nascimento'] != '')) &&
          (isset($_POST['i_sexo']) && ($_POST['i_sexo'] != '')) &&
          (isset($_POST['i_nacionalidade']) && ($_POST['i_nacionalidade'] != '')) &&
          (isset($_POST['i_est_civil']) && ($_POST['i_est_civil'] != '')) &&
          (isset($_POST['i_cpf']) && ($_POST['i_cpf'] != '')) &&
          (isset($_POST['i_rg']) && ($_POST['i_rg'] != '')) &&
          (isset($_POST['i_data_rg']) && ($_POST['i_data_rg'] != '')) &&
          (isset($_POST['i_orgao_rg']) && ($_POST['i_orgao_rg'] != '')) &&
          (isset($_POST['i_pis']) && ($_POST['i_pis'] != '')) &&
          (isset($_POST['i_pasep']) && ($_POST['i_pasep'] != '')) &&
          (isset($_POST['i_nome_mae']) && ($_POST['i_nome_mae'] != '')) &&
          (isset($_POST['i_nome_pai']) && ($_POST['i_nome_pai'] != '')) &&
          (isset($_POST['i_email']) && ($_POST['i_email'] != '')) &&
          (isset($_POST['i_celular']) && ($_POST['i_celular'] != '')) ) {

            $cpf = $_POST['i_cpf'];
            $rg = $_POST['i_rg'];

            $sql = "SELECT * FROM funcionarios WHERE (cpf = '$cpf') OR (rg = '$rg')";
            $acesso = mysqli_query($conecta, $sql);
            $resultado = mysqli_fetch_assoc($acesso);

            $aux = count($resultado);
            if ($aux == 0) {
              $nome = $_POST['i_nome'];
              $nascimento = $_POST['i_nascimento'];
              $sexo = $_POST['i_sexo'];
              $nacionalidade = $_POST['i_nacionalidade'];
              $naturalidade = $_POST['i_naturalidade'];
              $estado_civil = $_POST['i_est_civil'];
              $data_rg = $_POST['i_data_rg'];
              $orgao_rg = $_POST['i_orgao_rg'];
              $pis = $_POST['i_pis'];
              $pasep = $_POST['i_pasep'];
              $nome_mae = $_POST['i_nome_mae'];
              $nome_pai = $_POST['i_nome_pai'];
              $email = $_POST['i_email'];
              $telefone = $_POST['i_telefone'];
              $celular = $_POST['i_celular'];

              //começa de fato a cadastrar

              // CADASTRO DE USUÁRIO
              $sql = "INSERT INTO usuarios VALUES (null, '$user', '$hash', 2)";
              if(mysqli_query($conecta, $sql)){
                //pega o id do último usuário cadastrado
                $sql = "SELECT MAX(id) FROM usuarios";
                $acesso = mysqli_query($conecta, $sql);
                $resultado = mysqli_fetch_assoc($acesso);
                $id_user = array_shift($resultado);

                // CADASTRO DE ENDERECO
                $sql = "INSERT INTO enderecos VALUES (null, '$cep', '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$pais')";
                if(mysqli_query($conecta, $sql)){

                  //pega o id do último endereco cadastrado
                  $sql = "SELECT MAX(id) FROM enderecos";
                  $acesso = mysqli_query($conecta, $sql);
                  $resultado = mysqli_fetch_assoc($acesso);
                  $id_endereco = array_shift($resultado);

                  // CADASTRO DE FUNCIONÁRIO (FINALMENTE MEU JESUS)
                  $sql = "INSERT INTO funcionarios VALUES(null, '$id_user', '$id_endereco', '$nome', '$nascimento', '$sexo', '$cpf', '$nacionalidade', '$naturalidade', '$estado_civil', '$nome_pai', '$nome_mae', '$rg',
                  '$data_rg', '$orgao_rg', '$pis', '$pasep', '$telefone', '$celular', '$email')";

                  if (mysqli_query($conecta, $sql)) {
                    //cadastro realizado com sucesso
                    echo "cadastro realizado";
                    // header('location: ../../view/cadastro_funcionario.php');
                  } else {
                    //falha ao tentar cadastrar o funcionario
                    echo "Erro <br>" . $sql . "<br>" . mysqli_error($conecta);
                  }

                } else {
                  //falha ao tentar cadastrar o endereco
                  echo "Erro <br>" . $sql . "<br>" . mysqli_error($conecta);
                }

              } else {
                // falha ao tentar cadastrar o usuario
                echo "Erro <br>" . $sql . "<br>" . mysqli_error($conecta);
              }


              mysqli_close($conecta);
            } else {
              // já existe um funcionário com esse cpf ou rg
              header('location: ../../view/cadastro_funcionario.php');
            }

          } else {
            // falta dados do funcionario
            header('location: ../../view/cadastro_funcionario.php');
          }

        } else {
          // dados de endereco faltando
          header('location: ../../view/cadastro_funcionario.php');
        }


      } else {
        // existe outro user com esse nickname
        header('location: ../../view/cadastro_funcionario.php');
      }

    } else {
      // senhas não batem
      header('location: ../../view/cadastro_funcionario.php');
    }
  } else {
    // falta dados de login
    header('location: ../../view/cadastro_funcionario.php');
  }

}
?>
