<!-- verificações com SEÇÃO -->
<?php
    require_once 'partials/valida_acesso.php';
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Abrir Chamado - Help Desk</title>
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
            .card-abrir-chamado {
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
                <div class="card-abrir-chamado">
                    <div class="card">
                        <!-- head -->
                        <div class="card-header">
                            Abertura de chamado
                        </div>

                        <!-- body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">

                                    <!-- form -->
                                    <form action="../asset/registra_chamado.php" method='post'>
                                        <!-- titulo -->
                                        <div class="form-group mb-2">
                                            <label for="">Título</label>
                                            <input name='titulo' type="text" class="form-control" placeholder='Título'>
                                        </div>

                                        <!-- categoria -->
                                        <div class="form-group mb-2">
                                            <label for="">Categoria</label>
                                            <select name="categoria" id="" class="form-control">
                                                <option value="">-- Categorias --</option>
                                                <option value="Criacao_Usuario">Criação Usuário</option>
                                                <option value="Impressora">Impressora</option>
                                                <option value="Hardware">Hardware</option>
                                                <option value="Software">Software</option>
                                                <option value="Rede">Rede</option>
                                            </select>
                                        </div>

                                        <!-- descricao -->
                                        <div class="form-group mb-2">
                                            <label for="">Descrição</label>
                                            <textarea name="descricao" id="" class="form-control" rows='3'></textarea>
                                        </div>

                                        <!-- btn -->
                                        <div class="row mt-5">
                                            <div class="col-6 d-grid">
                                                <a class="btn btn-lg btn-warning" href='home.php' >Voltar</a>
                                            </div>

                                            <div class="col-6 d-grid">
                                                <button class="btn btn-lg btn-info" type='submit'>Abrir</button>
                                            </div>
                                        </div>
                                    </form>
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
