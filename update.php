<?php
include("conexao.php");
$ID = $_POST['Id'];
$Tarefas = $_POST['tarefas'];

mysqli_query($conexao, "UPDATE `tbl_tarefas` SET `tarefas`='$Tarefas' WHERE id ='$ID' ");
header("location:index.php");
?>