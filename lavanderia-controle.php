<?php 
include("conectar.php");
?>

<?php
function inserirCliente($conexao,$nome,$email,$nascimento,$cep,$endereco,$bairro,$cidade,$estado,$telefone,$assunto,$mensagem){
    $query="INSERT INTO cliente(nome,email,nascimento,cep,endereco,bairro,cidade,estado,telefone,assunto,mensagem) values('{$nome}','{$email}','{$nascimento}','{$cep}','{$endereco}','{$bairro}','{$cidade}','{$estado}','{$telefone}','{$assunto}','{$mensagem}')";
    mysqli_query($conexao,$query) or die(mysqli_error($conexao));

}
function listaCliente($conexao){
    $clientes=array();
    $resultado=mysqli_query($conexao,"SELECT * FROM  cliente");
    while($cliente=mysqli_fetch_assoc($resultado)){
        array_push($clientes,$cliente);
    }
    return $clientes;
}

function removeCliente($conexao,$id){
    $query=("DELETE FROM cliente WHERE id={$id}");
    return mysqli_query($conexao,$query);
}
function alteraCliente($conexao,$id,$nome,$email,$nascimento,$cep,$endereco,$bairro,$cidade,$estado,$telefone,$assunto,$mensagem){
    $query=("UPDATE cliente SET nome='{$nome}',email='{$email}',nascimento='{$nascimento}',cep='{$cep}',endereco='{$endereco}',bairro='{$bairro}',cidade='{$cidade}',estado='{$estado}',telefone='{$telefone}',assunto='{$assunto}',mensagem='{$mensagem}' WHERE id={$id}");
    return mysqli_query($conexao,$query);
}
?>
