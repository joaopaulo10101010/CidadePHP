<?php
    
    $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);

    echo("nome do Usuario: $nome <br>O Email do usuario: $email <br>");



?>