<?php

include("conexao.php");
 $id=$_GET['ID'];
 mysqli_query($conexao, "DELETE FROM `tbl_tarefas`  WHERE id = '$id'");
 header("location:index.php");

?>