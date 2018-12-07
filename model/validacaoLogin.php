<?php require_once("conexao.php");

//INICIAR SESSÃO
session_start();

$acesso = false;
if (isset($_POST['login'])){
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM usuarios WHERE login = '{$login}'";
  $acesso = mysqli_query($conecta, $sql);
  $resultado = mysqli_fetch_assoc($acesso);

  $hash = $resultado['senha'];

  $acesso = password_verify($senha, $hash);

  if (!$acesso) {
    //Se acesso não for verdadeiro volta para página de LOGIN SHUA SHUA
    header('location: ../login/login.php');
  } else {
    //Definir varivavel como sessão logada para outras funções
    $_SESSION['loginOK'] = true;

    //Passar valores de variaveis para sessões referente ao usuário
    $_SESSION['usuarioID'] = $resultado['id'];
    $_SESSION['usuarioLogin'] = $resultado['login'];
    //$_SESSION['usuarioSenha'] = $resultado['senha']; acho que não precisa salvar a senha do user
    $_SESSION['usuarioCodCargo'] = $resultado['id_cargo'];

    //Passar valores de variaveis para sessões referente ao cargo
    $idCargo = $_SESSION['usuarioCodCargo'];
    $sql = "SELECT * FROM cargos WHERE id = '{$idCargo}'";
    $acesso = mysqli_query($conecta, $sql);
    $resultado = mysqli_fetch_assoc($acesso);

    $_SESSION['usuarioCargo'] = $resultado['nome'];
  }
}
?>
