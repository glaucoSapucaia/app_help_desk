<!-- verificações com SEÇÃO -->
<?php
    session_start();

    if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
        header('Location: ../pages/index.php?login=erro2');        
    }
?>