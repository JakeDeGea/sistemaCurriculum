<?php require_once("conexao.php"); ?>

<?php
//INICIAR SESSÃO
session_start();
$acesso = false;
if (isset($_POST['login'])){
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  $sql = "SELECT * FROM usuarios WHERE login = '{$login}' and senha = '{$senha}'";
  $acesso = mysqli_query($conecta, $sql);
  $resultado = mysqli_fetch_assoc($acesso);

  if (!$acesso) {
    die("Falha na consulta");
  } else {
    //Definir como sessão logada para outras funções
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
