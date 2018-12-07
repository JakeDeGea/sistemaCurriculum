<?php
require_once ("../../model/conexao.php");  //Conexao com o banco
include ("../seguranca.php"); //INCLUIR FUNÇÕES DE SEGURANÇA E CHAMA-LAS ABAIXO

if(!empty($_GET['m_cpf'])) {

  $cpf = $_GET['m_cpf'];
  // $sql = "SELECT * FROM funcionarios WHERE cpf = '$cpf'";
  // faz o select nas tabelas necessárias
  $sql = "SELECT * FROM FUNCIONARIOS JOIN USUARIOS ON
  FUNCIONARIOS.ID_USUARIO = USUARIOS.ID JOIN ENDERECOS ON
  FUNCIONARIOS.ID_ENDERECO = ENDERECOS.ID WHERE FUNCIONARIOS.CPF = '$cpf'";
  $acesso = mysqli_query($conecta, $sql);

  // transforma essa consulta num objeto MUITO IMPORTANTE
  $resultado = mysqli_fetch_object($acesso);

  // se o objeto não for nulo então:
  if($resultado) {
    echo json_encode([
      // passagem de parâmetros para o código principal
      'success' => true,
      /* MUITO IMPORTANTE
        na passagem de parâmetros do objeto o nome do campo é
        o nome do banco de dados e não da aplicação
      */
      'data' => [
          //Parametros                   Atributo banco de dados
                'nome'=> $resultado->nome,
                'nascimento' => $resultado->data_nas,
                'sexo' => $resultado->sexo,
                'nacionalidade' => $resultado->nacionalidade,
                'naturalidade' => $resultado->naturalidade,
                'estado_civil' => $resultado->estado_civil,
                'rg' => $resultado->rg,
                'data_emissao_rg' => $resultado->data_emissao_rg,
                'orgao_emissor_rg' => $resultado->orgao_emissor_rg,
                'numero_pasep' => $resultado->numero_pasep,
                'numero_pis' => $resultado->numero_pis,
                'cpf'=>$resultado->cpf,
                'nomeda_mae' => $resultado->nomeda_mae,
                'nomedo_pai' => $resultado->nomedo_pai,
                'email' => $resultado->email,
                'telefone' => $resultado->telefone,
                'telefone_celular' => $resultado->telefone_celular,
                'cep' => $resultado->cep,
                'rua' => $resultado->rua,
                'numero' => $resultado->numero,
                'complemento' => $resultado->complemento,
                'bairro' => $resultado->bairro,
                'cidade' => $resultado->cidade,
                'estado' => $resultado->estado,
                'pais' => $resultado->pais,
                'login' => $resultado->login,
                'senha' => $resultado->senha,
                'status' => $resultado->status
              ]
    ]);
    exit;
  }
}
echo json_encode(['success' => false]);

?>
