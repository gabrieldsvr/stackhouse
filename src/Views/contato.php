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

<section class="fabrx-section bg-white">
    <div class="container">
        <div class="fabrx-middle-box text-center px-0 px-md-5">
            <div class="hero-caption px-0 px-md-5">
                <h4 class="mb-0">FALE CONOSCO</h4>
                <hr>
                <p class="">Se você tem alguma sugestão, dúvida ou solicitação a fazer, utilize esse espaço para entrar em contato conosco. Teremos satisfação em responde.</p>
            </div>
            <form class="mt-4 px-0 px-lg-5 py-2 mx-0 mx-md-5">
                <div class="form-group">
                    <input type="text" name="nome" placeholder="Nome completo" class="form-control" id="nome" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <input type="tel"  name="telefone" placeholder="telefone" class="form-control" id="email" required>
                </div>
                <div class="col-md-12 form-group ">
                        <div class="quform-input">
                            <textarea class="form-control" id="body" name="body" rows="3" placeholder="Mande uma mensagem" required></textarea>
                        </div>
                <div class="d-grid my-3">
                    <button type="submit" class="btn btn-xl btn-primary">Enviar</button>
                </div>
            </form>
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
</body>
</html>