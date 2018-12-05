<?php require_once("../../model/conexao.php");  //Conexao com o banco ?>
<?php include ("../seguranca.php"); //INCLUIR FUNÇÕES DE SEGURANÇA E CHAMA-LAS ABAIXO ?>


<?php
//PEGA O VALOR NAME="txtLogin" do tipo _POST DO FORM CADASTRO_FUNCIONARIO
$login = filter_input(INPUT_POST, 'txtLogin', FILTER_SANITIZE_STRING);
//PEGA O VALOR NAME="txtSenha" do tipo _POST DO FORM CADASTRO_FUNCIONARIO
$senha = filter_input(INPUT_POST, 'txtSenha', FILTER_SANITIZE_STRING);

$hash = password_hash($senha, PASSWORD_DEFAULT);

// PEGA O VALOR DO NAME="selectCargo" DO SELECT GROUP
$cargo = filter_input(INPUT_POST, 'selectCargo', FILTER_SANITIZE_STRING);

if (!$conecta) {
      die("Connection failed: " . mysqli_connect_error());
}
else {
  echo "Connected successfully <br>";

  //LEMBRAR NA HORA DO INSERT DE CADASTRAR TODOS OS DADOS INFORMADOS, POIS SE NÃO O CÓDIGO PARA NO
  //ECHO "Connected successfully <br>";

//realizando teste
  $sql = "INSERT INTO usuarios (id, login, senha, id_cargo) VALUES ('null', '$login', '$hash', '$cargo')";

  if(mysqli_query($conecta, $sql)){
    echo "<script>top.location.href='../../view/cadastro_funcionario.php';</script>";
  } else {
      mysqli_close($conecta);
  }

}
?>
