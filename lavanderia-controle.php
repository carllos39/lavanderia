<?php 
include("conectar.php");
?>

<?php
function inserirCliente($conexao,$nome,$email,$telefone){
    $query("INSERT INTO cliente(nome,email,telefone) values('{$nome}','{$mail}','{$telefone}'");
    return mysqli_query($conexao,$query);

}
function listaCliente(){
    $clientes=array();
    $resultado=mysqli_query=($conexao,"SELECT * FROM  cliente;");
    while($cliente=mysqli_fetch_assoc($resultado)){
        array_push($clientes,$cliente);
    }
    return $clientes;
}

function removeCliente($conexao,$id){
    $query=($conexao,"DELETE FROM cliente WHERE id=$id");
    return mysqli_query($conexao,$query);
}
function alteraCliente($conexao,$id,$nome,$email,$telefone){
    $query=($conexao,"UPDATE cliente SET nome='{$nome}',email='{$email}',telefone='{$telefone}' WHERE id=$id");
    return mysqli_query($conexao,$query);
}
?>
