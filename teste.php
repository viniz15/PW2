<?php

    require "";
    $exito = $usuario = new Usuario()
    if ($exito){
        $nome = "";
        $email = "";
        $senha = "";

        $usuario-> cadastrar($nome, $email, $senha);

        echo "<script>
        confirm('Usuario cadastrar!')
        </script>":
    } else {
        echo "<script>
            confirm('erro')
            </script>";
    }