<?php
// VOLTA PRA PÁGINA DE LOGIN CASO OS DADOS NÃO BATEREM
$_SG['paginaLogin'] = '../login/login.php'; // Redirecionar usuário para tela de Login



//=====================================================================================================================
//            FUNÇÕES DE PROTEÇÃO DE PÁGINA (CHAMAR FUNÇÕES DE REDIRECIONAMENTO) - !Usar para proteções internas!
//============================================================================================================

//=====================================================================================
// CONFERIR OS DADOS DE LOGIN, CASO NÃO LOGADO EXPULSA VISITANTE DAS PÁGINAS INTERNAS
//=====================================================================================

function protegePagina(){
  global $_SG;
  if (!isset($_SESSION["usuarioID"]) or !isset($_SESSION['usuarioLogin'])) {
    //Não há usuário logado, manda pra página de login
    expulsaVisitante();
    // Verifica se os dados salvos na sessão batem com os dados do banco de dados
  } else if (!($_SESSION['usuarioLogin']) && !($_SESSION['usuarioSenha'])){
      // Se os dados não batem, manda pra tela de login
    expulsaVisitante();

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
  unset($_SESSION['usuarioID'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'], $_SESSION['nivelAcesso']);
  // Manda pra tela de login
  header("Location: ".$_SG['paginaLogin']);
}

?>
