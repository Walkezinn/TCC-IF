<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Nome:</label>
        <input type="text" name="nome"><br>

        <label for="">Data de Nascimento:</label>
        <input type="date" name="dt_nasc"><br>

        <label for="">Email:</label>
        <input type="text" name="email"><br>

        <label for="">Telefone:</label>
        <input type="tel" name="telefone"><br>

        <label for="">Endereço:</label>
        <input type="text" name="endereco"><br>

        <button type="submit" name="Cadastrar">Cadastrar</button>
        <button type="reset">Limpar</button>
    </form>
</body>

</html>

<?php
include "Conexao.php";

if (isset($_POST["Cadastrar"])):
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dt_nasc = $_POST['dt_nasc'];
    $endereco = $_POSt['endereco'];
    $tel = $_POST['telefone'];

    $selectBD = mysqli_query($conexao, "INSERT INTO `tb_alunos` VALUES (Null,'$nome','$email','$tel','$dt_nasc','$endereco',Null)");
endif;
?>