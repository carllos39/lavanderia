<?php 
include("conectar.php");
include("lavanderia-controle.php");
?>

<?php 

$id=$_GET['id'];


if(removeCliente($conexao,$id)){
    echo"Removido com sucesso!";

}else{
    echo"Não removeu!";
}
?>