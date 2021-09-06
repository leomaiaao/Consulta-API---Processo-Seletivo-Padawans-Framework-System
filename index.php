<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Desafio Framework</title>

    <link rel="shortcut icon" type="imagem/x-icon" href="../img/image.jpg" />

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href=".//css/estilo.css">

</head>

<body>
    <section id="home">
        <div class="container" id="home">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex">
                    <div class="align-items-center">
                        <h2 class="display-3 ">Consulte arquivos de forma Simples!</h2>
                        <p>
                            Faça o seu Login abaixo e inicie a pesquisa.
                        </p>

                        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold">Faça seu Login</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST">

                                        <div class="modal-body mx-3">
                                            <div class="md-form mb-5">
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <label data-error="wrong" data-success="right" for="orangeForm-name"> Nome</label>
                                                <input type="text" id="orangeForm-name" class="form-control validate" name="nome" placeholder="Digite seu nome aqui" autocomplete="off" style="display: none;">
                                                <!-- Atualmente os navegadores ignoram o auocomplete: off, portanto criar uma tag invisível parece solucionar o problema -->
                                                <input type="text" id="orangeForm-name" class="form-control validate" name="nome" placeholder="Digite seu nome aqui" autocomplete="off" required>

                                            </div>
                                        </div>

                                        <div class="modal-footer d-flex justify-content-center">
                                            <button name="entre" class="btn bnt-dark" style="background-color: #343a40; color:white;">Entre</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="text-left">
                            <a href="" class="btn btn-danger btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Faça o seu login aqui</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-none d-md-block margem-imagem">
                    <img src=".//img/imagem.png" width="650">
                </div>
            </div>
        </div>
    </section>

    <?php

    if (isset($_POST['entre'])) {
        $_SESSION['nome'] = $_POST['nome'];
        exit(header("Location: .//pages/home.php"));
    }
    ob_end_flush();
    ?>


</body>

</html>