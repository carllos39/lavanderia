<?php 
include("conectar.php");
include("lavanderia-controle.php");
?>

<?php 
$nome=$_POST['nome'];
$email=$_POST['email'];
$dataNascimento=$_POST['dataNascimento'];
$result=explode('/',$dataNascimento);
$dia=result[0];
$mes=result[1];
$ano=result[2];
$dataNascimento=[$ano.'-'.$mes.'-'.$dia ] ;
$cep=$_POST['cep'];
$endereco=$_POST['endereco'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];
$telefone=$_POST['telefone'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];
if(inserirCliente($conexao,$nome,$email,$dataNascimento,$cep,$endereco,$bairro,$cidade,$estado,$telefone,$assunto,$mensagem)){
    echo"Cadastrado com sucesso!";
}else{
    echo"Não cadastrou!";
}
?>