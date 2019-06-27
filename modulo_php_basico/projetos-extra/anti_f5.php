<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="">
</head>
<body>
    <?php
        if (isset($_POST['nome'])){
            $nome=$_POST['nome'];
            file_put_contents("teste.txt", $nome, FILE_APPEND);
            header("Location: anti_f5.php");
        }
    ?>
    <form method="POST">
        <input type="text" name="nome" id="nome">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>