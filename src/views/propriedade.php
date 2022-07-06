<?php
$v->layout("_theme", [
    "title" => $title
]);
?>

<section class="fabrx-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4><?= $imovel->rua ?> <?= $imovel->numero ?></h4>
                <br>
                <h6><?= $imovel->cidade ?>, <?= $imovel->estado ?> <?= $imovel->cep ?> #<?= $imovel_id ?></h6>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12 col-sm-8">
                <div class="swiper-container single-swiper text-center">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($imovel->imagens as $img) {
                            echo "<div class='swiper-slide'><img src='{$img}' alt='Galleries' style='max-height: 500px;'></div>";
                        }
                        ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="row my-2">
                    <div class="card shadow-40">
                        <div class="card-body">
                            <small class="card-subtitle mb-2 text-muted">A Venda</small>
                            <h6 class="card-title font-weight-normal">R$ <?= $imovel->valor ?></h6>
                            <hr>
                            <div>
                                    <a href="" class="btn-lg btn-primary"><span class="btn-text">Contato</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-8">
                <div class="row mt-5 mb-2">
                    <div class="col-4">
                        <i class="fa-solid fa-bed"></i> Dormitório · <?= $imovel->caracteristicas->cama ?>
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-shower"></i> Banheiros · <?= $imovel->caracteristicas->banheiro ?>
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-car"></i> Garagem · <?= $imovel->caracteristicas->garagem ?>
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-layer-group"></i> <?= $imovel->caracteristicas->area ?> m²
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-map-location-dot"></i> Localization
                    </div>
                </div>
                <div class="row mb-5">
                    <p><?= $imovel->descricao ?></p>
                </div>
                <div class="row">
                    <h6 class="mb-3">Caracteristicas</h6>
                    <?php
                    foreach ($imovel->detalhes as $detalhe) { ?>
                        <div class="col-4"><?= $detalhe ?>
                            <hr>
                        </div>
                        <?php }  ?>
                </div>
            </div>
        </div>
    </div>
</section>









