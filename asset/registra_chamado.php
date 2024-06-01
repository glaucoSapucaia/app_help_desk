<?php
    // Verificando retorno
    // echo '<pre>';
    //     print_r($_POST);
    // echo '</pre>'

    // formatando array

    // como usaremos '#' para separar o conteudo, devemos nos certificar
    // de que os dados originais (mandados pelo usuario) não tenho esse caractere.
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    // array to str
    // constante PHP_EOL -> adiciona uma quebra de linha
    // independente do sistema operacional!
    $texto = "$titulo#$categoria#$descricao" . PHP_EOL;

    // CRUDE file.txt

    // abrir | criar arquivo
    // 'a' -> indica o acumulo de linhas (escrita ao final do arquivo)
    $arquivo = fopen('../data/arquivo.txt', 'a');

    // editando arquivo
    fwrite($arquivo, $texto);

    // fechando arquivo
    fclose($arquivo);

    // echo $texto;

    // redirecionando usuário
    header('Location: ../pages/home.php');
?>