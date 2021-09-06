<?php
ob_start();
session_start();
$nome = $_SESSION['nome'];
if ($nome == null || $nome == "") {
    header("location: ../index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Desafio FrameWork</title>

    <link rel = "shortcut icon" type = "imagem/x-icon" href = "../img/image.jpg"/>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../css/estilohome.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Consulta de Arquivos</h3>
            </div>

            <ul class="list-unstyled components">
                <?php echo "<p>Olá $nome, consulte os Arquivos no menu abaixo!</p>"; ?>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Menu</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="../pages/post.php">Posts</a>
                        </li>
                        <li>
                            <a href="../pages/todos.php">To-dos</a>
                        </li>
                        <li>
                            <a href="../pages/albuns.php">Álbuns</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <form method="POST">
                        <div class="d-flex justify-content-center">
                            <button name="logout" class="btn btn-dark">Log Out</button>
                        </div>
                    </form>
                </li>
            </ul>

        </nav>
        <!-- Page Content -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                </div>
            </nav>
        </div>


    </div>

    <div class="position-relative margens">
        <div class="position-absolute">
            <section id="home">
                <div class="container margem-imagem" id="home">
                    <div class="row align-items-right">
                        <div class="col-md-6 d-flex">
                            <div class="align-items-right">
                                <h2 class="  display-3 ">Consulte aquivos de forma Simples!</h2>
                            </div>
                        </div>
                        <div class="col-6 d-none d-md-block">
                            <img src="../img/imagem.png" width="500">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <?php

    if (isset($_POST['logout'])) {
        session_destroy();
        header("location: ../index.php");
    }

    ?>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

</body>

</html>