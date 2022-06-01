<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body class="bg-light">
    <form action="inserir.php" method="POST" onsubmit="return validarOK()">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-transparent mt-3 py-3 col-md-6">
                <h1 class="text-center font-monospace fw-bold">Lista de Tarefas</h1>
                <p class="text-center font-monospace fst-italic fs-4">Insira abaixo as tarefas que pretende realizar</p>
                <div class="col-8">
                    <input type="text" name="tarefas" class="form-control" id="inserirTarefa" placeholder="O que vamos fazer hoje?">
                </div>
                <div class="col-2">
                    <button class="add btn btn-outline-primary">Adicionar</button>
                </div>
            </div>
        </div>
    </form>

    <!-- pegando os dados -->
    <?php
    include("conexao.php");
    $rawData = mysqli_query($conexao, "SELECT * from tbl_tarefas");

    ?>

    <div class="container">
        <div class="col-8 bg-white m-auto mt-3 ">

            <table class="table table-success text-center">
                <thead class="tamanhoFonteth">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tarefa</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                <tbody class="tamanhoFontestb">
                    <?php
                    while ($row = mysqli_fetch_array($rawData)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo ucfirst($row['tarefas']); ?></td>
                            <td style="width: 10%;"><a href="updatePage.php? ID=<?php echo $row['id'] ?>" class="btn btn-success">Atualizar</a></td>
                            <td style="width: 10%;"><a href="delete.php? ID=<?php echo $row['id'] ?>" class="btn btn-danger">Deletar</a></td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
</body>



</html>