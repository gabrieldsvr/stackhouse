<?php

use Source\Controllers\ImovelController;

$v->layout("_theme", [
    "title" => $title
]);
?>

<section class="fabrx-section">
    <div class="container">
        <div class="row">
            <?php
                $controller = new ImovelController();
                echo $controller->listCardsDestaque($imoveis);
            ?>
        </div>
    </div>
</section>
