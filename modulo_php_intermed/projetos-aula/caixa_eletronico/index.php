<?php
    session_start();
    require 'config_bd.php';

    if(isset($_SESSION['banco']) && empty($_SESSION['banco']) == false){
        $id = $_SESSION['banco'];

        $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $info = $sql->fetch();
        } else {
            header("Location: login.php");
            exit;
        }
        
    } else{
        header("Location: login.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Home - Caixa Eletrônico - Módulo PHP Intermediário</title>
</head>
<body>
    <h1>Banco Skywalkers</h1>
    <p>Titular: <?php echo $info['titular']; ?></p>
    <p>Agência: <?php echo $info['agencia']; ?></p>
    <p>Conta: <?php echo $info['conta']; ?></p>
    <p>Saldo: R$<?php echo $info['saldo']; ?></p>
    <a href="sair.php">Sair</a>
    <hr>
    <h3>Movimentação/Extrato</h3>

    <a href="add_transacao.php">Adicionar transação</a><br><br>

    <table>
        <tr>
            <th>Data</th>
            <th>Valor</th>
        </tr>
        <?php 
            $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
            $sql->bindValue(":id_conta", $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                foreach ($sql->fetchAll() as $item) { ?>
                    <tr>
                        <td><?php echo date('d/m/Y H:i', strtotime($item['data_operacao'])); ?></td>
                        <td>
                            <?php if($item['tipo'] == '0'): ?>
                                <span style="color:green;">R$ <?php echo $item['valor']; ?></span>
                            <?php else: ?>
                                <span style="color:red;">-R$ <?php echo $item['valor']; ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php    
                }
            }
        
        ?>    
    </table>
</body>
</html>