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

        <label for="">Email:</label>
        <input type="text" name="email"><br>

        <label for="">Telefone:</label>
        <input type="tel" name="telefone"><br>

        <label for="">CREF:</label>
        <input type="text" name="CREF"><br>

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
    $tel = $_POST['telefone'];
    $cref = $_POST['CREF'];


    $selectBD = mysqli_query($conexao, "INSERT INTO `tb_personais` VALUES (Null,'$nome','$email','$tel','$cref')");
endif;


?>