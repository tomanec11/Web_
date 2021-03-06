<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="image/favicon.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.4.0/css/lightgallery-bundle.min.css">
    <title>Vila Taťána</title>
</head>
<body id="home">
<?php
include_once "header.php"
?>

<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Ubytování</h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4 fs-4">Nabízíme ubytování ve vile Taťána, která se nachází na pěší zóně v samém centru lázní
            Luhačovice. Poblíž je supermarket a mnoho dalších obchodů. K dispozici je také parkování.</p>
    </div>
</div>

<div class=" bg-warning">
    <div class="container">

        <div class="row py-5">
            <div class="col-md-9">
                <h2 class="featurette-heading">Ubytování</h2>
                <p class="lead fs-4">Poskytujeme v sedmi dvoulůžkových pokojích a jednom jednolůžkovém. K dispozici je i
                    přistýlka</p>
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
                <p class="lead fs-4">Všechny pokoje jsou vybaveny varnou konvicí, televizí a k dispozici je taktéž
                    lednice. Pokoje bez vlastního sociálního zařízení jsou vybaveny umyvadlem.</p>
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

    <div class="d-flex flex-wrap justify-content-center" id="lightgallery">
        <a href="image/photo1.jpg" class="d-block my-5 mx-4" style="height: 100px">
            <img class="img-fluid" src="image/photo1.jpg" style="height: 150px">
        </a>
        <a href="image/photo2.jpg" class="d-block my-5 mx-4"  style="height: 100px">
            <img class="img-fluid" src="image/photo2.jpg" style="height: 150px">
        </a>
        <a href="image/photo3.jpg" class="d-block my-5 mx-4" style="height: 100px">
            <img class="img-fluid" src="image/photo3.jpg" style="height: 150px">
        </a>
        <a href="image/photo4.jpg" class="d-block my-5 mx-4" style="height: 100px">
            <img class="img-fluid" src="image/photo4.jpg" style="height: 150px">
        </a>
        <a href="image/photo5.jpg" class="d-block my-5 mx-4" style="height: 100px">
            <img class="img-fluid" src="image/photo5.jpg" style="height: 150px">
        </a>
        <a href="image/photo6.jpg" class="d-block my-5 mx-4" style="height: 100px">
            <img class="img-fluid" src="image/photo6.jpg" style="height: 150px">
        </a>
        <a href="image/photo7.jpg" class="d-block my-5 mx-4" style="height: 100px">
            <img class="img-fluid" src="image/photo7.jpg" style="height: 150px">
        </a>
        <a href="image/photo8.jpg" class="d-block my-5 mx-4" style="height: 100px">
            <img class="img-fluid" src="image/photo8.jpg" style="height: 150px">
        </a>
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
                    <h1 class="card-title pricing-card-title">315,-<small class="text-muted fw-light">/osoba-noc</small>
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>TV</li>
                        <li>Umyvadlo</li>
                        <li>Skříně</li>
                        <li>Postele</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal ">Pokoj - vlastní příslušenství</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">365,-<small class="text-muted fw-light">/osoba-noc</small>
                    </h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>TV</li>
                        <li>Koupelna, WC, sprcha</li>
                        <li>Skříně</li>
                        <li>postele</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <h1 class="text-center py-5">Počasí</h1>
        <hr class="mt-2 mb-5">
            <div class="notification"> </div>
            <div class="weather-container mx-auto">
                <div class="weather-icon">
                    <img src="icons/unknown.png" alt="">
                </div>
                <div class="temperature-value">
                    <p>- °<span>C</span></p>
                </div>
                <div class="temperature-description">
                    <p> - </p>
                </div>
                <div class="location">
                    <p>-</p>
                </div>
            </div>
    </div>

    </div>
</div>

<script rel="stylesheet" src="js/bootstrap.min.js"></script>
<script rel="stylesheet" src="js/index.bundle.min.js"></script>
<script src="api.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.4.0/lightgallery.min.js"></script>

<script>
    // $(document).ready(function () {
    lightGallery(document.getElementById('lightgallery'));

    // $("#lightgallery").lightGallery();
    // }
</script>


<?php
include_once "footer.php"
?>

</body>
</html>