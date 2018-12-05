<?php require_once("../../model/conexao.php");  //Conexao com o banco ?>
<?php include ("../seguranca.php"); //INCLUIR FUNÇÕES DE SEGURANÇA E CHAMA-LAS ABAIXO ?>

<?php
//PEGA O VALOR NAME="txtLogin" do tipo _POST DO FORM CADASTRO_FUNCIONARIO
$login = filter_input(INPUT_POST, 'txtLogin', FILTER_SANITIZE_STRING);


if (!$conecta) {
      die("Connection failed: " . mysqli_connect_error());
}
else {
  echo "Connected successfully <br>";

//realizando teste
  $sql = "INSERT INTO usuarios (id, login, senha, id_cargo) VALUES ('null', '$login', '2', '1')";

  if(mysqli_query($conecta, $sql)){
    echo "New record created successfully";
  } else {
    echo "Erro <br>" . $sql . "<br>" . mysqli_error($conecta);
  }
  mysqli_close($conecta);
}
?>
