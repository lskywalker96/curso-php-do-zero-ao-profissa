<?php
    session_start();
    require 'config_bd.php';

    if (isset($_POST['tipo'])) {
        $tipo = $_POST['tipo'];
        $valor = str_replace(",", ".", $_POST['valor']);
        $valor = floatval($valor);

        $sql = $pdo->prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao) VALUES (:id_conta, :tipo, :valor, NOW())");
        $sql->bindValue(":id_conta", $_SESSION['banco']);
        $sql->bindValue(":tipo", $tipo);
        $sql->bindValue(":valor", $valor);
        $sql->execute();

        if ($tipo == '0'){
            //depósito
            $sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
            $sql->bindValue(":valor", $valor);
            $sql->bindValue(":id", $_SESSION['banco']);
            $sql->execute();
        } else {
            $sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
            $sql->bindValue(":valor", $valor);
            $sql->bindValue(":id", $_SESSION['banco']);
            $sql->execute();
        }

        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transações - Caixa Eletrônico - Módulo PHP Intermediário</title>
</head>
<body>
    <form method="post">
        <label for="tipo_transac">Tipo de transação:</label>
        <select name="tipo" id="tipo">
            <option value="0">Depósito</option>
            <option value="1">Saque</option>
        </select>
        <br><br><label for="tipo_transac">Valor:</label>
        <input type="number" name="valor" id="valor" pattern="[0-9.,]{1,}"><br><br>
        <input type="submit" value="adicionar">
    </form>
</body>
</html>