<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Tarefa</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<?php
$id = $_GET['ID'];
include("conexao.php");
$Rdata = mysqli_query($conexao, "SELECT * FROM tbl_tarefas WHERE id = $id");
$data = mysqli_fetch_array($Rdata);
?>

<body class="bg-info">
    <form action="update.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h2 class="text-center font-monospace fw-bold">Atualizar Tarefas</h2>
                <p class="text-center font-monospace fst-italic fs-4">Aqui você pode atualizar a tarefa selecionada</p>
                <div class="col-8">
                    <input type="text" value="<?php echo $data['tarefas'] ?>" name="tarefas" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-success">Atualizar</button>
                    <input type="hidden" name="Id" value="<?php echo $data['id'] ?>">
                </div>
            </div>
        </div>
    </form>
</body>

</html>