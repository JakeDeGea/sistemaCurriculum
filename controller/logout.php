
<?php
session_start(); //iniciamos a sess�o que foi aberta para limpa-las
session_unset(); //limpamos as variaveis globais das sess�es
$_SESSION['loginOK'] = false;
echo "<script>top.location.href='../login/login.php';</script>";
?>
