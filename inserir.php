<?php

   include("conexao.php");
   $tarefas = $_POST['tarefas'];
   
   $sql = "INSERT INTO tbl_tarefas (tarefas) VALUES('$tarefas')";

   if (mysqli_query($conexao, $sql)) {
       echo $sql;
   }
   header("location:index.php");
   
?>

