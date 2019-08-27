<?php
	session_start();
	require 'config.php';

	if(empty($_SESSION['logado'])) {
		header("Location: login.php");
		exit;
	}

	$email = '';
	$codigo = '';
	$convites = '';

	$sql = "SELECT email, codigo, convites FROM usuarios WHERE id = '".addslashes($_SESSION['logado'])."'";
	$sql = $pdo->query($sql);

	if($sql->rowCount() > 0) {
		$info = $sql->fetch();
		$email = $info['email'];
		$codigo = $info['codigo'];
		$convites = $info['convites'];
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Index - Registro por Convite - Módulo PHP Intermediário</title>
</head>
<body>
	<h1>Área interna do sistema</h1>
	<p>Usuário: <?php echo $email; ?> - <a href="sair.php">Sair</a></p>
	<p>Link: http://phpdozeroaoprofissional.pc/modulo_php_intermed/projetos-aula/registro_convite/cadastrar.php?codigo=<?php echo $codigo; ?></p>
	<p>Convites restantes: <?php echo $result = 5-$convites;?></p>
</body>
</html>