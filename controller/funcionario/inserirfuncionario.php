<?php
require_once ("../../model/conexao.php");  //Conexao com o banco
include ("../seguranca.php"); //INCLUIR FUNÇÕES DE SEGURANÇA E CHAMA-LAS ABAIXO

//PEGA O VALOR NAME="txtLogin" do tipo _POST DO FORM CADASTRO_FUNCIONARIO
$login = filter_input(INPUT_POST, 'txtLogin', FILTER_SANITIZE_STRING);


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
          (isset($_POST['i_celular']) && ($_POST['i_celular'] != '')) &&
          ) {
            
            $rua = $_POST['i_rua'];

          } else {
            // falta dados do funcionario
            echo "tomate no banho";
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

  // CADASTRO DE USUÁRIO
  // $sql = "INSERT INTO usuarios VALUES (null, '$user', '$senha', 2)";
  // if(mysqli_query($conecta, $sql)){
  //   echo "cadastrado pai";
  // } else {
  //   echo "Erro <br>" . $sql . "<br>" . mysqli_error($conecta);
  // }

  // CADASTRO DE ENDERECO
  // $sql = "INSERT INTO enderecos VALUES (null, '$cep', '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$pais')";
  // if(mysqli_query($conecta, $sql)){
  //   echo "cadastrado pai";
  // } else {
  //   echo "Erro <br>" . $sql . "<br>" . mysqli_error($conecta);
  // }
  // mysqli_close($conecta);
}
?>
