<?php
ob_start();
session_start();
$nome = $_SESSION['nome'];
if ($nome == null || $nome == "") {
    header("location: ../index.php");
}
$url = "https://jsonplaceholder.typicode.com/todos";
$api = json_decode(file_get_contents($url));
?>


<!DOCTYPE html>
<html lang="pt">

<head>

    <head>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Desafio Framework</title>

        <link rel="shortcut icon" type="imagem/x-icon" href="../img/image.jpg" />

        <!-- Bootstrap CSS and JS -->

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/jquery.smartWizard.min.js"></script>
        <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--  CSS -->
        <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    </head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container-fluid">

                <a href="../pages/home.php" class="navbar-brand">
                    <img src="../img/image.jpg" width="70">
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="containertabs">
                    <div class="componentes">
                        <div class="tabs">
                            <input type="radio" name="radio2" value="3" id="tab-1">
                            <label for="tabs" class="tab___1">
                                <a href="../pages/home.php"> Menu </a>
                            </label>

                            <input type="radio" name="radio2" value="4" id="tab-2">
                            <label for="tab-2" class="tab___2">
                                <a href="../pages/post.php"> Posts </a>
                            </label>

                            <input type="radio" name="radio2" value="5" id="tab-3" checked>
                            <label for="tab-3" class="tab___3">
                                <a href="../pages/todos.php"> To-dos </a>
                            </label>

                            <input type="radio" name="radio2" value="6" id="tab-4">
                            <label for="tab-4" class="tab___4">
                                <a href="../pages/albuns.php"> Álbuns </a>
                            </label>

                            <div class="tab___color"></div>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </nav>

    </header>



    <?php

    echo "

<table id='minhaTabela' class='table table-hover'>
<thead class='thead-dark'>
<tr>
  <th scope='col' style='text-align:center; align-text: center;'>User ID</th>
  <th scope='col' style='text-align:center; align-text: center;'>Id</th>
  <th scope='col' style='text-align:center; align-text: center;'>Title</th>
  <th scope='col' style='text-align:center; align-text: center;'>Completed</th>
</tr>
</thead>
<tbody>";
    foreach ($api as $key => $value) {
        echo "<tr>";
        echo "<td align='center' >$value->userId</td>";
        echo "<td align='center' >$value->id</td>";
        echo "<td align='center' >$value->title</td>";
        $opcao = $value->completed;
        if ($opcao == 1) {
            echo "<td align='center' ><i class='material-icons' style='color:green;'>check_box</i></td>";
        } else {
            echo "<td align='center' ><i class='material-icons' style='color:red;'>close</i></td>";
        }
        echo "</tr>";
    }

    echo "</tbody>
</table>
";

    ?>


</body>
<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#minhaTabela').DataTable({
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)",
                "search": "Pesquisar",
                "previous": "Anterior",
                "next": "Próximo",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Próximo"
                }
            }

        });
    });
</script>

</html>