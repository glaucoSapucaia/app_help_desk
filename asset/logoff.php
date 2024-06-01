<?php
    // remover indies especificos
    // unset() -> caso o indice não exiosta, não HAVERÁ ERRO
    // EXEMPLO
    // unset($_SESSION['autenticado']);

    // destruir o array (seção) por COMPLETO
    // session_destroy()
    // é importante forçar o rediresionamento da página
    // após destruir uma seção. Assim, uma nova requisão é feita
    // atualizando valores e destruindo a seção.

    session_start();
    session_destroy();
    
    header('Location: ../pages/index.php');

?>