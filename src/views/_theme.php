<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <!-- Primary Meta Tags -->
     <title>Starkhouse</title>
     <meta name="description" content="Imóveis que encantam em Florianópolis">
     <meta name="keywords" content="imovel, florianópolis, alugel, compra, apartamento">
     <meta name="email" content="contato@starkhouse.com.br">
     <meta http-equiv="Content-Language" content="pt-br">
     <meta name="Charset" content="UTF-8">
     <meta name="Rating" content="General">


    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Starkhouse">
    <meta property="og:description" content="Imóveis que encantam em Florianópolis">
    <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Starkhouse">
    <meta property="twitter:description" content="Imóveis que encantam em Florianópolis">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?= $title ?></title>
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
    <link rel="stylesheet" href="<?= url("assets/css/jquery-toast-plugin/jquery.toast.min.css") ?>">


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css' rel='stylesheet'/>

    <link href="<?= url("assets/plugin/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet" type="text/css"
          media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/brands.min.css"
          integrity="sha512-OivR4OdSsE1onDm/i3J3Hpsm5GmOVvr9r49K3jJ0dnsxVzZgaOJ5MfxEAxCyGrzWozL9uJGKz6un3A7L+redIQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css"
          integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link href="<?= url("assets/css/estilo.css") ?>" rel="stylesheet" type="text/css" media="all">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YKSXBCN6S1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', <?=getenv('GOOGLE_ANALYTICS')?>);
    </script><!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YKSXBCN6S1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', <?=getenv('GOOGLE_ANALYTICS')?>);
    </script>
</head>
<body>

<?php require __DIR__ . "/partials/_navbar.phtml" ?>

<main>
    <?= $v->section("content"); ?>
</main>

<div class="float-nav action-whatsapp ">
    <a href="https://wa.me/5548991137174" id="icon-whatsapp" target="_blank" class="icon-whatsapp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</div>

<?php require __DIR__ . "/partials/_footer.phtml" ?>



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
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

<script src="<?= url("assets/css/jquery-toast-plugin/jquery.toast.min.js") ?>"></script>

<?= $v->section("js"); ?>
</body>
</html>