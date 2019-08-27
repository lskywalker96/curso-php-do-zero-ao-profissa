<?php
    require 'config_bd.php';
    
    if (isset($_GET['ordem']) && !empty($_GET['ordem'])) {
        $ordem = addslashes($_GET['ordem']);
        $sql = "SELECT * FROM usuarios ORDER BY :ordem";
    } else {
        $ordem = '';
        $sql = "SELECT * FROM usuarios";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenação de Resultados - Módulo PHP Intermediário</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <form method="get">
        <select name="ordem" id="ordem" onchange="this.form.submit()">
            <option value=""></option>
            <option value="nome" <?php echo ($ordem=="nome")?'selected="selected"':''; ?>>Por nome</option>
            <option value="idade" <?php echo ($ordem=="idade")?'selected="selected"':''; ?>>Por idade</option>
        </select>
    </form>
    <table id="t01">
        <tr>
            <th>Nome</th>
            <th>Email</th> 
        </tr>
        <?php
            $sql = $pdo->prepare($sql);
            $sql->bindParam(':ordem', $ordem, PDO::PARAM_STR);
            $sql->execute();

            if ($sql->rowCount() > 0){
                foreach ($sql->fetchAll() as $usuario):?>
                    <tr>
                        <td><?php echo $usuario['nome'];?></td>
                        <td><?php echo $usuario['idade'];?></td>
                    </tr>
                <?php endforeach;
            }
        ?>
    </table>
</body>
</html>