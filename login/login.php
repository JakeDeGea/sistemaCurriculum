<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../_css/login.css">

<?php require_once ("../model/conexao.php"); ?>
<?php require_once ("../model/validacaoLogin.php"); ?>

<html>
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
    </head>
    <body>
      <?php  ?>
        <div id="telaLogin" class="container" align="center">
            <div style="margin-left: 3%" class="row">
                <section id="corpo">
                    <div class="col-sm">
                        <h1 style="text-align: left; margin-top: 6%">Login</h1>
                        <div>
                            <form align="center" method="post" action="../view/inicio.php" class="loginForm">
                                <fieldset>
                                  <div class="inputWithIcon">
                                    <input placeholder="Usuário" style="width: 80%" type="text" name="login" class="form-control" id="login"/>
                                        <i style="color: white" class="glyphicon glyphicon-user" aria-hidden="true"></i>

                                    </div>

                                    <div class="inputWithIcon">
                                        <input placeholder="Senha" style="margin-top: 3%; width: 80%" type="password" name="senha" class="form-control" id="txSenha" />
                                        <i style="color: white" class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                                    </div>

                                </fieldset>

                                <!-- Links Esqueceu Senha e Cadastrar-se-->
                                <div style="float: left">
                                    <a href="forgetpassword.php" class="forget-password">
                                        Esqueceu a senha?
                                    </a>

                                    <br>

                                    <input id="cRemember" style="margin-top: 13%" type="radio" name="tRemember" onclick="marcardesmarcar">
                                    <label for="tRemember" style="margin-top: 8%">Lembrar senha</label>
                                    <br>
                                    <button id="submit" style="float:left; width:100%" type="submit" class="btn btn-primary mb-2" name="submit" value="Entrar">Entrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <div class="col-sm">
                    <img width="60%" style="margin-top: 20%" id="icone" src="../_imagem/logoexemplo.png">
                    <div style="display: block">
                        <p style="margin-top: 25%">Desenvolvido por <a href="">Time de Desenvolvimento</a></p>
                      </div>
                </div>
            </div>
        </div>
    </body>
</html>
