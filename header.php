<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1">
    <title>Sistema de Curriculo 1.0</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="_css/header.css">

    <!-- BARRA DE NAVEGAÇÃO HEADER-->



    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #711829">
        <div id="sideCollapse">
            <button type="button" id="sidebarCollapse" class="btn btn-danger">
                <i class="glyphicon glyphicon-th-large"></i>
            </button>
        </div>

        <a id="item" style="font-weight: bolder" class="navbar-brand" href="#">Ultra Contabilidade</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a id="item" class="nav-link" href="#">Item 1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a id="item" class="nav-link" href="#">Item 2</a>
                </li>
                <li class="nav-item">
                    <a id="item" class="nav-link" href="#">Item 3</a>
                </li>
              </ul>



            <img src="../_imagem/perfilexample.png" style="margin-right: 1%">
						<div style="color: white; font-weight: bolder"><?php

            echo "Olá, " . $_SESSION["usuarioLogin"];
            ?><b class="caret"></b></a>
            <div style="color: grey; font-weight: lighter; margin-right: 1%"><?php
            if ($_SESSION['usuarioID'] == 1) {
              echo "@Admin";
            } elseif ($_SESSION['usuarioID'] == 2) {
              echo "@Usuario";
            }

            ?>
           </div>
           </div>


            <a class="nav-link" href="../controller/logout.php"><span id="logIcon" class='glyphicon glyphicon-off'></span></a>

          </div>
    </nav>

</head>
