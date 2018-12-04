<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1">
    <title>Sistema de Curriculo 1.0</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="_css/header.css">

    <!-- BARRA DE NAVEGAÇÃO HEADER-->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #004166">
      <div id="sideCollapse">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="glyphicon glyphicon-th-list"></i>
        </button>
      </div>

      <a id="item" style="font-weight: bolder" class="navbar-brand" href="#">Ultra Contabilidade</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <img src="../_imagem/perfilexample.png" style="margin-right: 1%; position: relative">
				<div style="color: white; font-weight: bolder; position: relative"><?php
          echo "Olá, " . $_SESSION["usuarioLogin"];
          ?><b class="caret"></b></a>
          <div style="color: grey; font-weight: lighter; margin-right: 1%; position: relative"><?php
          if ($_SESSION['usuarioID'] == 1) {
            echo "@Admin";
          } elseif ($_SESSION['usuarioID'] == 2) {
            echo "@Usuario";
          }

          ?>
         </div>
       </div>

        <a class="nav-link" href="../controller/logout.php"><span style="position: relative" id="logIcon" class='glyphicon glyphicon-off'></span></a>

      </div>
    </nav>
</head>
