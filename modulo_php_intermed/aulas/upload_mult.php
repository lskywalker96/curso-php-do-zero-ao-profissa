<?php

    if(isset($_FILES['arquivo'])){
        
        if (count($_FILES['arquivo']['tmp_name'])>0) {
            for ($q=0; $q<count($_FILES['arquivo']['tmp_name']); $q++) {

                $ext = explode(".", $_FILES['arquivo']['name'][$q]);
                $nome_arquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,999)).'.'.$ext[1];

                move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], '../arquivos/'.$nome_arquivo);
            }
        }
    }
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo[]" id="arquivo[]" multiple><br><br>
    <input type="submit" value="Enviar arquivos">
</form>