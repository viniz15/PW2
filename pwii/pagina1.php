<?php
session_start();

$_SESSION['nome'] = "SeiLa";

header("localhost:pagina2.php");