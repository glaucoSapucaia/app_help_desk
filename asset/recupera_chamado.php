<?php
    // criando array
    $chamados = [];

    // abrindo arquivo
    $arquivo = fopen('../../../app_help_desk_help/arquivo.txt', 'r');

    // iterando sobre arquivo
    // feof() -> End Of File -> Indentifica o fim do arquivo e finaliza a iteração.
    // A ultima linha VAZIA também será lida!

    // precisamos usar a negativa '!'
    // feof() -> retorna true apeas quando encontra ofim do arquivo, logo
    // precisamos inverter o retorno para percorrer o arquivo.
    while (!feof($arquivo)) {
        // recuperando linhas
        // fgets() -> retorna uma linha do arquivo
        $registro = fgets($arquivo);
        
        // adicionando dados ao array
        $chamados[] = $registro;
    }

    // fechando arquivo
    fclose($arquivo);

    // echo '<pre>';
    //     print_r($chamados);
    // echo '</pre>';

?>