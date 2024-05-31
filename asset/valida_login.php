<?php

    // session_start -> Indica o inicio de uma seção e permite o
    // dialogo entre back end e front end (resgate de dados)
    // seções PHP duram em média 3 horas

    session_start();

    // super global $_SESSION (array)

    // print_r($_SESSION);

    // super global GET | type array
    // Captura parâmetros dos campos name= (input) com o método GET

    // echo '<pre>';
    //     print_r($_GET);
    // echo '</pre>';

    // super global POST | type array
    // Captura parâmetros dos campos name= (input) com o método POST

    // echo '<pre>';
    //     print_r($_POST);
    // echo '</pre>';


    // Validando usuários | testes

    $usuarios_app = [
        ['email' => 'teste@teste.com', 'senha' => '123456'],
        ['email' => 'adm@adm.com', 'senha' => 'adm123'],
    ];

    $usuario_autenticado = false;

    foreach ($usuarios_app as $user) {
        if (
            $user['email'] == $_POST['email'] &&
            $user['senha'] == $_POST['senha']
        ) {
            $usuario_autenticado = true;
        }
    };

    // header() -> Força o redirecionamento de uma página
    // ?login=erro -> adicionando a chave login e valor erro ao array $_GET

    // elemento de controle | $_SESSION

    if ($usuario_autenticado) {
        echo "Login efetuado!";
        $_SESSION['autenticado'] = 'SIM';
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: ../pages/index.php?login=erro');
    }

?>