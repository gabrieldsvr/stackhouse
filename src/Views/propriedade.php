<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fabrx">
    <meta name="keywords" content="Fabrx">
    <meta name="author" content="Fabrx">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>STACK HOUSE</title>
    <link href="<?= url("assets/images/favicon.ico") ?>" rel="shortcut icon" type="image/x-icon">
    <!-- Fabrx External CSS -->
    <link href="<?= url("assets/css/loading-bar.min.css") ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= url("assets/css/swiper-bundle.min.css") ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= url("assets/css/flatpickr.min.css") ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= url("assets/css/bootstrap-slider.min.css") ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= url("assets/css/dropzone.min.css") ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= url("assets/css/simplebar.min.css") ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= url("assets/css/prism.css") ?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?= url("assets/css/fabrx-styles.css") ?>" rel="stylesheet" type="text/css" media="all">


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css' rel='stylesheet'/>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css" integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header class="fabrx-header bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg has-header-inner">
            <div class="col-2">
                <a class="navbar-brand" href="<?=url_pesquisa("")?>">
                    <img class="img-fluid" src="<?= url("assets/images/logo.png") ?>" alt="UM">
                </a>
            </div>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#menu-5"
                    aria-controls="menu-5" aria-expanded="false" aria-label="Toggle navigation">
                <svg data-name="Icon/Hamburger" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24">
                    <path data-name="Icon Color"
                          d="M1.033,14a1.2,1.2,0,0,1-.409-.069.947.947,0,0,1-.337-.207,1.2,1.2,0,0,1-.216-.333,1.046,1.046,0,0,1-.072-.4A1.072,1.072,0,0,1,.072,12.6a.892.892,0,0,1,.216-.321.947.947,0,0,1,.337-.207A1.2,1.2,0,0,1,1.033,12H22.967a1.206,1.206,0,0,1,.409.069.935.935,0,0,1,.336.207.9.9,0,0,1,.217.321,1.072,1.072,0,0,1,.072.391,1.046,1.046,0,0,1-.072.4,1.206,1.206,0,0,1-.217.333.935.935,0,0,1-.336.207,1.206,1.206,0,0,1-.409.069Zm0-6a1.2,1.2,0,0,1-.409-.069.934.934,0,0,1-.337-.207,1.189,1.189,0,0,1-.216-.333A1.046,1.046,0,0,1,0,6.989,1.068,1.068,0,0,1,.072,6.6a.9.9,0,0,1,.216-.322.947.947,0,0,1,.337-.207A1.2,1.2,0,0,1,1.033,6H22.967a1.206,1.206,0,0,1,.409.068.935.935,0,0,1,.336.207.9.9,0,0,1,.217.322A1.068,1.068,0,0,1,24,6.989a1.046,1.046,0,0,1-.072.4,1.193,1.193,0,0,1-.217.333.923.923,0,0,1-.336.207A1.206,1.206,0,0,1,22.967,8Zm0-6a1.2,1.2,0,0,1-.409-.068.947.947,0,0,1-.337-.207,1.193,1.193,0,0,1-.216-.334A1.039,1.039,0,0,1,0,.988,1.068,1.068,0,0,1,.072.6.892.892,0,0,1,.288.276.934.934,0,0,1,.625.069,1.2,1.2,0,0,1,1.033,0H22.967a1.206,1.206,0,0,1,.409.069.923.923,0,0,1,.336.207A.9.9,0,0,1,23.928.6,1.068,1.068,0,0,1,24,.988a1.039,1.039,0,0,1-.072.4,1.2,1.2,0,0,1-.217.334.935.935,0,0,1-.336.207A1.206,1.206,0,0,1,22.967,2Z"
                          transform="translate(0 5)" fill="#3f3b3b"></path>
                </svg>
            </button>


            <div class="collapse navbar-collapse" id="menu-5">
                <ul class="navbar-nav m-auto pt-3 pt-lg-0">


                    <li class="nav-item active">
                        <div class="dropdown">
                            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" class="nav-link">
                                <span class="me-2 ">Comprar</span>
                                <svg data-name="Icon/Arrows/Chevron/Down" xmlns="http://www.w3.org/2000/svg" width="12"
                                     height="12" viewBox="0 0 24.091 24">
                                    <path data-name="Icon Color"
                                          d="M-2.182,24,0,21.818-9.818,12,0,2.182-2.182,0l-12,12Z"
                                          transform="translate(0.091 4.909) rotate(-90)" fill="#3f3b3b"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?=url_pesquisa("")?>">Propriedades</a>
                                <a class="dropdown-item" href="#0">Mapa</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#0">Informações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=url_pesquisa("contato")?>">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section class="fabrx-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4><?=$imovel->rua?> <?=$imovel->numero?></h4>
                <br>
                <h6><?=$imovel->cidade?>, <?=$imovel->estado?> <?=$imovel->cep?> #<?=$imovel_id?></h6>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-8">
                <div class="swiper-container single-swiper text-center">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($imovel->imagens as $img){
                            echo "<div class='swiper-slide'><img src='{$imovel->imagem_destaque}' alt='Galleries'></div>";
                        }
                        ?>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div class="col-3">
                <div class="row my-2">
                    <div class="card shadow-40">
                        <div class="card-body">
                            <small class="card-subtitle mb-2 text-muted">A Venda</small>
                            <h6 class="card-title font-weight-normal">R$ <?=$imovel->valor?></h6>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#0" class="btn btn-primary "><span class="btn-text">Contato</span></a>
                                </div>
                                <div class="col-2 col-offset-4">
                                    <a href="https://wa.me/5548991137174" class="btn btn-success "><i class="fa-brands fa-whatsapp"></i></a>
                                </div>

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
                        <i class="fa-solid fa-bed"></i> Dormitório · <?=$imovel->caracteristicas->cama?>
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-shower"></i> Banheiros · <?=$imovel->caracteristicas->banheiro?>
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-car"></i> Garagem · <?=$imovel->caracteristicas->garagem?>
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-layer-group"></i> <?=$imovel->caracteristicas->area?> m²
                    </div>
                    <div class="col-4">
                        <i class="fa-solid fa-map-location-dot"></i> Localization
                    </div>
                </div>
                <div class="row mb-5">
                    <p><?=$imovel->descricao?></p>
                </div>
                <div class="row">
                    <h6 class="mb-3">Caracteristicas</h6>
                    <div class="col-4">Year Built: 2022 <hr> </div>
                    <?php
                    foreach($imovel->detalhes as $detalhe){
                        ?>

                        <div class="col-4"><?=$detalhe?><hr> </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>




<footer class="fabrx-footer pt-3 pt-md-5">
    <div class="container">
        <div class="row pb-4 pt-2">
            <div class="col-2 text-center text-sm-start">
                <a href="">
                    <img src="<?= url("assets/images/logo.png") ?>" class="img-fluid" alt="U">
                </a>
            </div>
            <div class="col-10">
                <div class="fabrx-social text-center text-md-right mt-3 mt-sm-0 float-end">
                    <a href="#0">
                        <svg data-name="Icon/Social/OutlineFacebook" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24">
                            <path data-name="Icon Color"
                                  d="M3.525,20.475a11.985,11.985,0,1,1,16.95-16.95,11.985,11.985,0,1,1-16.95,16.95ZM1.5,12A10.5,10.5,0,1,0,12,1.5,10.512,10.512,0,0,0,1.5,12Zm9.262,5.625V12.488H9V10.5h1.8V9a2.424,2.424,0,0,1,2.625-2.625A11.921,11.921,0,0,1,15,6.45v1.8H13.912c-.862,0-1.012.412-1.012.975V10.5h2.025l-.262,1.987H12.9v5.137Z"
                                  fill="#3f3b3b"></path>
                        </svg>
                    </a>
                    <a href="#0">
                        <svg data-name="Icon/Social/OutlineInstagram" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24">
                            <path data-name="Icon Color"
                                  d="M3.525,20.475a11.985,11.985,0,1,1,16.95-16.95,11.985,11.985,0,1,1-16.95,16.95ZM1.5,12A10.5,10.5,0,1,0,12,1.5,10.512,10.512,0,0,0,1.5,12Zm8.137,6.338a4.248,4.248,0,0,1-1.612-.3,3.941,3.941,0,0,1-1.237-.825,3.116,3.116,0,0,1-.825-1.237,5.11,5.11,0,0,1-.3-1.613c-.038-.637-.038-.833-.038-2.363s0-1.724.038-2.363a4.248,4.248,0,0,1,.3-1.612,3.926,3.926,0,0,1,.825-1.237,3.123,3.123,0,0,1,1.237-.825,5.1,5.1,0,0,1,1.612-.3c.638-.038.834-.038,2.363-.038s1.725,0,2.363.038a4.256,4.256,0,0,1,1.613.3,3.945,3.945,0,0,1,1.237.825,3.135,3.135,0,0,1,.825,1.237,5.133,5.133,0,0,1,.3,1.612c.038.638.038.834.038,2.363s0,1.725-.038,2.363a4.256,4.256,0,0,1-.3,1.613,3.977,3.977,0,0,1-.825,1.237,3.135,3.135,0,0,1-1.237.825,5.124,5.124,0,0,1-1.613.3c-.637.038-.833.038-2.363.038S10.275,18.375,9.637,18.337Zm-.971-11-.041.014A2.153,2.153,0,0,0,7.387,8.588a2.907,2.907,0,0,0-.225,1.125c-.037.6-.037.791-.037,2.287v2.25a3.7,3.7,0,0,0,.211,1.083l.014.042a2.146,2.146,0,0,0,1.237,1.237,2.894,2.894,0,0,0,1.125.225c.6.038.791.038,2.287.038h2.25a3.727,3.727,0,0,0,1.078-.21l.047-.015a2.153,2.153,0,0,0,1.237-1.237,2.894,2.894,0,0,0,.225-1.125c.038-.6.038-.792.038-2.288V9.75a3.742,3.742,0,0,0-.21-1.079l-.015-.046a2.16,2.16,0,0,0-1.237-1.238,2.907,2.907,0,0,0-1.125-.225c-.6-.037-.792-.037-2.288-.037H9.75A3.746,3.746,0,0,0,8.666,7.336ZM8.7,12A3.307,3.307,0,1,1,12,15.3,3.264,3.264,0,0,1,8.7,12Zm1.5,0A1.8,1.8,0,1,0,12,10.2,1.824,1.824,0,0,0,10.2,12Zm4.274-3.188a.713.713,0,1,1,.713.712A.713.713,0,0,1,14.475,8.813Z"
                                  fill="#3f3b3b"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="container text-center">
            <span class="text-secondary ms-2">© 2022 Stack House</span>
        </div>
    </div>
</footer>


<!-- Fabrx Scripts -->
<script src="<?= url("assets/js/bootstrap.bundle.min.js") ?>"></script>
<script src="<?= url("assets/js/lodash.min.js") ?>"></script>
<script src="<?= url("assets/js/html5.min.js") ?>"></script>
<script src="<?= url("assets/js/highcharts.min.js") ?>"></script>
<script src="<?= url("assets/js/highcharts-more.min.js") ?>"></script>
<script src="<?= url("assets/js/solid-gauge.min.js") ?>"></script>
<script src="<?= url("assets/js/flatpickr.min.js") ?>"></script>
<script src="<?= url("assets/js/swiper-bundle.min.js") ?>"></script>
<script src="<?= url("assets/js/loading-bar.min.js") ?>"></script>
<script src="<?= url("assets/js/dropzone.min.js") ?>"></script>
<script src="<?= url("assets/js/simplebar.min.js") ?>"></script>
<script src="<?= url("assets/js/countUp.umd.js") ?>"></script>
<script src="<?= url("assets/js/masonry.min.js") ?>"></script>
<script src="<?= url("assets/js/bootstrap-slider.min.js") ?>"></script>
<script src="<?= url("assets/js/prism.min.js") ?>"></script>
<script src="<?= url("assets/js/charts-light.js") ?>"></script>
<script src="<?= url("assets/js/fabrx-scripts.js") ?>"></script>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FicmllbGRzdnIiLCJhIjoiY2w0bjg1aXo0MDBqcTNrcGhlcnhvbnUwZSJ9.OzSQkTNC9a0McnRrm6tyJQ';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-48.56, -27.59],
        zoom: 11.15
    });

    map.on('load', () => {
        map.addSource('places', {
            'type': 'geojson',
            'data': {
                'type': 'FeatureCollection',
                'features': [
                    {
                        'type': 'Feature',
                        'properties': {
                            'description':
                                '<div class="row"><h1>$700,000</h1><br>Single Family Residence<br>8936 PRAGUE Way<br>KISSIMMEE, FL 34747<br>6bd 5 ba 3,142 sqft<br>MLS #O6022852</div>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-48.53647164621381, -27.663999610115688]
                        }
                    },
                    {
                        'type': 'Feature',
                        'properties': {
                            'description':
                                '<strong>Mad Men Season Five Finale Watch Party</strong><p>Head to Lounge 201 (201 Massachusetts Avenue NE) Sunday for a Mad Men Season Five Finale Watch Party, complete with 60s costume contest, Mad Men trivia, and retro food and drink. 8:00-11:00 p.m. $10 general admission, $20 admission and two hour open bar.</p>'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-48.50109340783084, -27.561705750954495]
                        }
                    },
                ]
            }
        });
// Add a layer showing the places.
        map.addLayer({
            'id': 'places',
            'type': 'circle',
            'source': 'places',
            'paint': {
                'circle-color': '#4264fb',
                'circle-radius': 6,
                'circle-stroke-width': 2,
                'circle-stroke-color': '#ffffff'
            }
        });

// Create a popup, but don't add it to the map yet.
        const popup = new mapboxgl.Popup({
            closeButton: false,
            closeOnClick: false
        });

        map.on('mouseenter', 'places', (e) => {
// Change the cursor style as a UI indicator.
            map.getCanvas().style.cursor = 'pointer';

// Copy coordinates array.
            const coordinates = e.features[0].geometry.coordinates.slice();
            const description = e.features[0].properties.description;

// Ensure that if the map is zoomed out such that multiple
// copies of the feature are visible, the popup appears
// over the copy being pointed to.
            while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
            }

// Populate the popup and set its coordinates
// based on the feature found.
            popup.setLngLat(coordinates).setHTML(description).addTo(map);
        });

        map.on('mouseleave', 'places', () => {
            map.getCanvas().style.cursor = '';
            popup.remove();
        });
    });
</script>
</body>
</html>