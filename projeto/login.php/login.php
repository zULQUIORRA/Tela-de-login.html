<?php
    session_start();
    extract($_POST);
    if ($usuario == "Administrador" && $senha == "123"){
        $_SESSION['usuario'] = [
            'nome' => $usuario;
            'senha' => $senha;
        ]
        header("Location: restrito.php");
        echo ('{"Mensagem":"OK"}');
    }else{
        echo "Usuário e Senha invalidos";
    }
    
