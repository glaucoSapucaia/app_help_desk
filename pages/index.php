<!doctype html>
<html lang="en">
    <head>
        <title>App Help Desk</title>
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
            .card-login {
                padding: 30px 0 0 0;
                width: 350px;
                margin: 0 auto;
            }
        </style>

    </head>

    <body>
        <!-- nav -->
        <nav class="navbar navbar-dark bg-dark">
            <a href="#" class="navbar-brand p-3">
                <img src="../img/logo.jpg" width='30' height='30' alt="" class="d-inline-block align-top me-2">
                App Help Desk
            </a>
        </nav>

        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- card login -->
                <div class="card-login">
                    <div class="card">
                        <!-- card head -->
                        <div class="card-header">
                            Login
                        </div>

                        <!-- card body -->
                        <div class="card-body">
                            <!-- form -->

                            <!-- action='' | Indica o envio de informações -->
                            <!-- method='post' | Indicando o método POST, temos mais segurança, -->
                            <!-- já que os dados não aprecem na URL -->

                            <form action="../asset/valida_login.php" method='post'>
                                <div class="form-group mb-2">
                                    <input name='email' type="email" class="form-control" placeholder='E-mail'>
                                </div>

                                <div class="form-group mb-2">
                                    <input name='senha' type="password" class="form-control" placeholder='Senha'>
                                </div>

                                <!-- recperando parametros de erro do array $_GET -->
                                
                                <?php
                                    // isset() -> Verifica se determinada chave existe no array
                                    if (isset($_GET['login']) && $_GET['login'] == 'erro') {
                                ?>

                                    <div class="text-danger mb-2">
                                        Login inválido!
                                    </div>

                                <!-- Podemos sobrepor tags php -->
                                <!-- Desta forma, conseguimos incluir tags HTML ao fluxo de forma rápida e limpa -->
                                <?php } ?>

                                <?php
                                    if (isset($_GET['login']) && $_GET['login'] == 'erro2') {
                                ?>

                                    <div class="text-danger mb-2">
                                        É necessário fazer o login!
                                    </div>
                                <?php } ?>

                                <!-- btn -->
                                <div class="d-grid">
                                    <button class="btn btn-lg btn-info" type='submit'>Entrar</button>
                                </div>
                            </form>
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
