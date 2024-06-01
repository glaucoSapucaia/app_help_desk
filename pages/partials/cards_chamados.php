<?php
    foreach ($chamados as $chamado) {
?>

    <?php
        $chamado_dados = explode('#', $chamado);
        // print_r($chamado_dados);

        // checando prfil de usuario | adm ou user
        if ($_SESSION['perfil_id'] == 2) {
            if ($_SESSION['id'] != $chamado_dados[0]) {
                continue;
            }
        }

        // ignorando array VAZIO
        if (count($chamado_dados) < 4) {
            continue;
        };
    ?>

    <!-- cards dinamicos -->
    <div class="card mb-3 bg-light">
        <div class="card-body">
            <h5 class="card-title"><?=$chamado_dados[1]?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h6>
            <p class="card-text"><?=$chamado_dados[3]?></p>
        </div>
    </div>
                            
<?php } ?>