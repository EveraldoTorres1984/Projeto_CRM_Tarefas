<?php 
$servidor = "localhost";
$user = "root";
$pass = "123456";
$db = "db_lista_tarefas";

$conexao = mysqli_connect($servidor, $user, $pass, $db);
if (!$conexao) {
    die ("Conexão Falhou!".mysqli_connect_error());
}

?>