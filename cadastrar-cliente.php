<?php 
include("conectar.php");
include("lavanderia-controle.php");
?>

<?php 
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];
if(inserirCliente($conexao,$nome,$email,$telefone)){
    echo"Cadastrado com sucesso!";
}else{
    echo"Não cadastrou!";
}
?>