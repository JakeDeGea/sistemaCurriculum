<!-- BARRA DE NAVEGAÇÃO HEADER-->
<header>
  <nav class="navbar navbar-expand-lg navbar-light" id="menuAcima">
    <a id="item" class="navbar-brand" href="inicio.php">Ultra Contabilidade</a>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <img src="../_imagem/perfilexample.png" id="fotoUser">
      <div id="infoUsuario">
        <a><?php echo "Olá, " . $_SESSION["usuarioLogin"]; ?> <b class="caret"></b></a>
        <div id="info">
          <?php
            if ($_SESSION['usuarioCodCargo'] == 1) {
              echo "@Admin";
            } elseif ($_SESSION['usuarioCodCargo'] == 2) {
                echo "@Usuario";
              }
          ?>
        </div>
      </div>
      <a class="nav-link" href="../controller/logout.php"><span id="logIcon" class='glyphicon glyphicon-off'></span></a>

    </div>
  </nav>
</header>
