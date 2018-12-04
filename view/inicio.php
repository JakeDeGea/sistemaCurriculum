<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Curriculum</title>
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="_css/header.css">

  </head>
  <body>

  </body>
</html>

<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="_css/dashboard.css">

<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../_css/header.css">
<link rel="stylesheet" href="../_css/inicio.css">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/jquery-3.3.1.min.js"></script>

<?php
  require_once ("../model/conexao.php");
  require_once("../model/validacaoLogin.php"); //VERIFICA DADOS DO USUÁRIO CONECTADO (ID_USER, SENHA, E NÍVEL)
  include ("../controller/seguranca.php"); //INCLUIR FUNÇÕES DE SEGURANÇA E CHAMA-LAS ABAIXO
  require_once ("../header.php")
  protegePagina();
?>

<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h5 style="text-align: center">Painel de controle</h5>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a href="#pageUsuarios"><i style="color: white" class="glyphicon glyphicon-user"></i> Usuarios</a>
            </li>
            <li>
                <a href="#pageFuncionarios"><i style="color: white" class="glyphicon glyphicon-user"></i> Funcionarios</a>
            </li>
            <li>
                <a href="#pageEventos"><i style="color: white" class="glyphicon glyphicon-list-alt"></i> Eventos</a>
            </li>
            <li>
                <a href="#pageCurriculos"><i style="color: white" class="	glyphicon glyphicon-file"></i> Curriculos</a>
            </li>
        </ul>
    </nav>

    <!-- O conteúdo é aqui -->
    <div class="container">

    </div>

</div>


<!--  FUNÇÕES EM JAVASCRIPT PARA DASHBOARD-->
<script>
    $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>
