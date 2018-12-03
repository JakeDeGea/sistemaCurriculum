<?php require_once("conexao.php"); ?>

<?php
//INICIAR SESSÃO
session_start();

if (isset($_POST['login'])){
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM usuario WHERE login = '{$login}' and senha = '{$senha}'";
  $acesso = mysqli_query($conecta, $sql);
  $resultado = mysqli_fetch_assoc($acesso);

  $_SESSION['usuarioID'] = $resultado['id_user'];
  $_SESSION['usuarioLogin'] = $resultado['login'];
  $_SESSION['usuarioSenha'] = $resultado['senha'];
  $_SESSION['usuarioNivel'] = $resultado['nivelAcesso'];

  if (!$acesso) {
    die("Falha na consulta");

  }
}

?>
