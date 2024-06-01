<?php
    foreach ($chamados as $chamado) {
?>

    <?php
        $chamado_dados = explode('#', $chamado);
        // print_r($chamado_dados);

        // ignorando array VAZIO
        if (count($chamado_dados) < 3) {
            continue;
        };
    ?>

    <!-- cards dinamicos -->
    <div class="card mb-3 bg-light">
        <div class="card-body">
            <h5 class="card-title"><?=$chamado_dados[0]?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[1]?></h6>
            <p class="card-text"><?=$chamado_dados[2]?></p>
        </div>
    </div>
                            
<?php } ?>