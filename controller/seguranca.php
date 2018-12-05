<?php
// VOLTA PRA PÁGINA DE LOGIN CASO OS DADOS NÃO BATEREM
$_SG['paginaLogin'] = '../login/login.php'; // Redirecionar usuário para tela de Login
$_SG['telaInicio'] = '../view/inicio.php'; // Redirecionar usuário para tela de Inicio.php



//=====================================================================================================================
//            FUNÇÕES DE PROTEÇÃO DE PÁGINA (CHAMAR FUNÇÕES DE REDIRECIONAMENTO) - !Usar para proteções internas!
//============================================================================================================

//=====================================================================================
// CONFERIR OS DADOS DE LOGIN, CASO NÃO LOGADO EXPULSA VISITANTE DAS PÁGINAS INTERNAS
//=====================================================================================

function protegePagina(){
  global $_SG;
  //Caso usuário tente entrar no Sistema com o link sem a Sessão iniciada
  if (!isset($_SESSION["usuarioID"]) or !isset($_SESSION['usuarioLogin'])) {
    expulsaVisitante();
    // Verifica se os dados salvos na sessão batem com os dados do banco de dados
  } else if (!($_SESSION['usuarioLogin']) && !($_SESSION['usuarioSenha'])){
      // Se os dados não batem, manda pra tela de login
      expulsaVisitante();
  }
}

function usuarioConectado(){
  global $_SG;
  //Se usuário estiver com sessão aberta e tentar voltar para a pagina de login
  if (isset($_SESSION['loginOK'])) {
    //Há usuário conectado: Chama a função "TelaInicio()"
    telaInicio();
  }
}

//=====================================================================================================================
//                       FUNÇÕES DE REDIRECIONAMENTO DE PÁGINAS ABAIXO !(Usadas apenas para funções acima)!
//=====================================================================================================================

//=======================================
// EXPULSA VISITANTES(SESSÃO NÃO LOGADA)
//=======================================
function expulsaVisitante() {
  global $_SG;
  // Remove as variáveis da sessão (caso elas existam)
  unset($_SESSION['usuarioID'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'], $_SESSION['usuarioCodCargo']);
  header("Location: ". $_SG['paginaLogin']);
}

function telaInicio(){
  global $_SG;
  //Manda para a tela de inicio.php
  header("Location: ". $_SG['telaInicio']);
}

?>
