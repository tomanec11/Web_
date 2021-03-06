<header>
    <nav class="navbar navbar-expand-md fs-5 navbar-dark fixed-top bg-light bg-opacity-75 p-3">
        <div class="container-fluid">
            <a class="navbar-brand text-dark fw-bold" href="index.php#home">Vila Taťána</a>
            <button class="navbar-toggler collapsed bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav me-5 mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link px-3 text-dark" href="index.php#home">Domů</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark" href="index.php#galerie">Galerie</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark" href="index.php#cenik">Ceník</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link text-dark" href="kontakt.php">Kontakt</a>
                    </li>
                    <li class="nav-item px-3">
                        <a  class="nav-link btn btn-dark text-light fs-5" href="pokoje.php">Rezervace</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--CARUSEL-->
    <div id="myCarousel" class="carousel slide d-none d-sm-none d-md-block" data-bs-ride="carousel">
        <div class="carousel-indicators ">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="mb-5" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="mb-5"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active mb-5" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">

                <img class="bd-placeholder-img" style="margin-top: -300px" width="100%" height="100%"  src="image/main1.JPG" alt="z">
                <div class="container">

                    <div class="carousel-caption text-end mb-lg-5">
                        <h1>Vila Taťána</h1>
                        <p>Ubytování v srdci Luhačovic</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" style="margin-top: -300px" width="100%" height="100%"  src="image/main2.jpg" alt="z">

                <div class="container">
                    <div class="carousel-caption text-end mb-lg-5">
                        <h1>Levné ubytování</h1>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img class="bd-placeholder-img" style="margin-top: -110px" width="100%" height="100%" src="image/main3.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                <div class="container">
                    <div class="carousel-caption text-end mb-lg-5">
                        <h1>V centru lázní</h1>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</header>