<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Recebendo dados do formulário</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="">
    <style>
        body{
            display:flex;
            justify-content: center;
        }
        form{
            width: 400px;
            height: 400px;
            padding: 20px;
            display: flex;
            background-color: lightgray;
            flex-direction: column;
        }
        label{padding-top: 20px;}

        input{padding: 5px;}

        input[type="submit"]{margin-top: 30px;}
    </style>
</head>
<body>
    <?php
        if (isset($_POST['nome']) && !empty($_POST['nasc']) && !empty($_POST['cidade'])){
            $nome=$_POST['nome'];
            $nasc=$_POST['nasc'];
            $cidade=$_POST['cidade'];
            echo "Nome: ".$nome;
            echo "<br/> Data de nascimento: ".$nasc;
            echo "<br/> Cidade: ".$cidade;
        }
    ?>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="nasc">Data de nascimento:</label>
        <input type="date" name="nasc" id="nasc">
        <label for="cidade">Cidade:</label>
        <input type="text" name="cidade" id="cidade">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>