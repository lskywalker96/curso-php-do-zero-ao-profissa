<?php
$arquivo = $_FILES['arquivo'];

if (isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false) {
    $ext = explode(".", $arquivo['name']);
    $nome_arquivo = md5(time().rand(0,99)).'.'.$ext[1];
    move_uploaded_file($arquivo['tmp_name'], '../arquivos/'.$nome_arquivo);
    echo 'Arquivo enviado com sucesso!';
}



?>