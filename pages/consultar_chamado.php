<!-- verificações com SEÇÃO -->
<?php
    require_once 'partials/valida_acesso.php';
?>

<!-- recuperando dados (chamados) -->
<?php
    include '../asset/recupera_chamado.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Consultar Chamado - Help Desk</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <!-- CSS -->
        <style>
            .card-consultar-chamado {
                padding: 30px 0 0 0;
                width: 100%;
                margin: 0 auto;
            }
        </style>
    </head>

    <body>

        <!-- nav -->
        <?php
            include_once 'partials/menu_nav.php';
        ?>

        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- card -->
                <div class="card-consultar-chamado">
                    <div class="card">
                        <!-- head -->
                        <div class="card-header">
                            Consulta de chamado
                        </div>

                        <!-- body -->
                        <div class="card-body">

                            <!-- recuperando chamados -->
                            <?php
                                include 'partials/cards_chamados.php';
                            ?>

                            <!-- btn -->
                            <div class="row mt-5">
                                <div class="d-grid">
                                    <a class="btn btn-lg btn-warning" href='home.php' >Voltar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
