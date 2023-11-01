<?php 
include("conectar.php");
include("lavanderia-controle.php");
?>

<?php 
$nome=$_POST['nome'];
$email=$_POST['email'];
$nascimento=$_POST['nascimento'];
$cep=$_POST['cep'];
$endereco=$_POST['endereco'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$telefone=$_POST['telefone'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];
if(inserirCliente($conexao,$nome,$email,$nascimento,$cep,$endereco,$bairro,$cidade,$estado,$telefone,$assunto,$mensagem)){
    echo"Cadastrado com sucesso!";
}else{
    echo"Não cadastrou!";
}
?>