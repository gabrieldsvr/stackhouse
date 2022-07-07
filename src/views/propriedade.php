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
            <div class="col-12">
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
                    <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                    Características do imóvel
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                 aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <div class="row">
                                        <?php
                                        foreach ($imovel->detalhes as $detalhe) { ?>
                                            <div class="col-4"><?= $detalhe ?>
                                                <hr>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ((isset($imovel->condominio) && count($imovel->condominio) > 0)){?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                    Condominio
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                 aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <div class="row">
                                        <?php
                                        foreach ($imovel->condominio as $detalhe) { ?>
                                            <div class="col-4"><?= $detalhe ?>
                                                <hr>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>









