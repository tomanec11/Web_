<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script rel="stylesheet" src="js/bootstrap.min.js"></script>
    <script rel="stylesheet" src="js/index.bundle.min.js"></script>

    <title>Ubytovani</title>
</head>
<body>
<?php
include_once "header.php"
?>

<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Ubytování</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4 fs-4">Nabízíme ubytování ve vile Taťána, která se nachází na pěší zóně v samém centru lázní Luhačovice. Poblíž je supermarket a mnoho dalších obchodů. K dispozici je také parkování.</p>
    </div>
</div>

<div class=" bg-warning">
    <div class="container">

        <div class="row py-5">
            <div class="col-md-9">
                <h2 class="featurette-heading">Ubytování</h2>
                <p class="lead fs-4">Poskytujeme v sedmi dvoulůžkových pokojích a jednom jednolůžkovém. K dispozici je i přistýlka</p>
            </div>
            <div class="col-md-3 px-5">
                <img src="image/bed-icon-png-29.jpg" alt="wifi" width="250" height="200">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row py-5">
            <div class="col-md-5">
                <img src="image/2148429.png" alt="wifi" width="250" height="200">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Vybavení pokojů</h2>
                <p class="lead fs-4">Všechny pokoje jsou vybaveny varnou konvicí, televizí a k dispozici je taktéž lednice. Pokoje bez vlastního sociálního zařízení jsou vybaveny umyvadlem.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row py-5">
            <div class="col-md-9">
                <h2 class="featurette-heading">Free WI-FI</h2>
                <p class="lead fs-4">Máme také WI-FI zdarma. Heslo je na každém pokoji.</p>
            </div>
            <div class="col-md-3 px-5">
                <img src="image/WIFI.png" alt="wifi" width="300" height="200">
            </div>
        </div>
    </div>
</div>

<div class="container pt-5">
    <h1 class="text-center py-5" id="galerie">Galerie</h1>
    <hr class="mt-2 mb-5">

    <div class="row" id="lightgallery">
        <div class="col-lg-3 col-md-4 col-6">
            <a href="image/pokoj2.jpg" class="d-block mb-4 h-100">
                <img class="img-fluid" src="image/pokoj2.jpg">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="image/pokoj2.jpg" class="d-block mb-4 h-100">
                <img class="img-fluid" src="image/pokoj2.jpg">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="image/pokoj2.jpg" class="d-block mb-4 h-100">
                <img class="img-fluid" src="image/pokoj2.jpg">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="image/pokoj2.jpg" class="d-block mb-4 h-100">
                <img class="img-fluid" src="image/pokoj2.jpg">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="image/pokoj2.jpg" class="d-block mb-4 h-100">
                <img class="img-fluid" src="image/pokoj2.jpg">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="image/pokoj2.jpg" class="d-block mb-4 h-100">
                <img class="img-fluid" src="image/pokoj2.jpg">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="image/pokoj2.jpg" class="d-block mb-4 h-100">
                <img class="img-fluid" src="image/pokoj2.jpg">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="image/pokoj2.jpg" class="d-block mb-4 h-100">
                <img class="img-fluid" src="image/pokoj2.jpg">
            </a>
        </div>
    </div>

</div>


<div class="container pt-5">
    <h1 class="text-center py-5" id="cenik">Ceník</h1>
    <hr class="mt-2 mb-5">
    <div class="row row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Pokoj - společné příslušenství</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">315,-<small class="text-muted fw-light">/osoba-noc</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>TV</li>
                        <li>Umyvadlo</li>
                        <li>Skříně</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Pokoj - vlastní příslušenství</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">365,-<small class="text-muted fw-light">/osoba-noc</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>TV</li>
                        <li>Koupelna, WC, sprcha</li>
                        <li>Skříně</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="LightGallery/lightgallery.min.js"></script>
<script src="LightGallery/lg-fullscreen.min.js"></script>
<script src="LightGallery/lg-thumbnail.min.js"></script>
<script src="LightGallery/lg-video.min.js"></script>
<script>
    $(document).ready(function () {
        $("#lightgallery").lightGallery();
    }
</script>


<?php
include_once "footer.php"
?>

</body>
</html>