<?php 
include("conectar.php");
include("lavanderia-controle.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<header>
        
            <h1>Nossa Lavanderia Aliada</h1>
            <nav>
            <h2><a href="">Menu &equiv;</a></h2>
                <ul class="menu">
                    <li><a href="index.html">Início</a></li>
                    <li><a href="lista-cliente.php">Lista de Clientes</a></li>
                    <li><a href="formulario-altera.html">Alterar Cliente</a></li>
                </ul>
            </nav>
        
    </header>
    <h1>Lista de Cliente</h1>
<table border="1">
    <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Ação</th>
    </tr>
    <?php $clientes=listaCliente($conexao);
    foreach( $clientes as $cliente){
    ?>
    <tr>
        <td><?=$cliente['id'] ?></td>
        <td><?=$cliente['nome'] ?></td>
        <td><?=$cliente['email'] ?></td>
        <td><?=$cliente['telefone'] ?></td>
        <td><a href="removeCliente.php? id=<?=$cliente['id']?>">Remover</a></td>
    </tr>
    <?php 
    }
    ?>
</table>
<footer>
        <p>Nossa Lavanderia Aliada &copy;</p>
    </footer>
    <script src="js/menu.js"></script>
</body>
</html>
