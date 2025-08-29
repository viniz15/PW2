<?php
session_start();

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
    echo "Oi $nome, Bem Vindo";
} else {
    echo "Que pena, voce não esta logado!";
}