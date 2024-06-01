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

    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    // Criando perfis de usuários
    $perfis = [
        1 => 'Administrador',
        2 => 'Usuário',
    ];

    $usuarios_app = [
        ['id' => 1, 'email' => 'adm@adm.com', 'senha' => 'adm1234', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'teste@teste.com', 'senha' => '1234', 'perfil_id' => 2],
        ['id' => 3, 'email' => 'maria@teste.com', 'senha' => '1234', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'jose@teste.com', 'senha' => '1234', 'perfil_id' => 2],
    ];

    foreach ($usuarios_app as $user) {
        if (
            $user['email'] == $_POST['email'] &&
            $user['senha'] == $_POST['senha']
        ) {
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    };

    // header() -> Força o redirecionamento de uma página
    // ?login=erro -> adicionando a chave login e valor erro ao array $_GET

    // elemento de controle | $_SESSION

    if ($usuario_autenticado) {
        echo "Login efetuado!";
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: ../pages/home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: ../pages/index.php?login=erro');
    }

?>