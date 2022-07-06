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

<?php require __DIR__ . "/partials/_navbar.phtml" ?>

<main>
    <?= $v->section("content"); ?>
</main>

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

<?= $v->section("js"); ?>
</body>
</html>