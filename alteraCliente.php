<?php 
include("conectar.php");
include("lavanderia-controle.php");
?>

<?php 
$id=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];

if(alteraCliente($conexao,$id,$nome,$email,$telefone)){
    echo"Alterado com sucesso!";
}else{
    echo"Não alterado!";
}

?>