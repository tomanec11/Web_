<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light bg-opacity-75 p-3">
        <div class="container-fluid ">
            <a class="navbar-brand text-dark" href="#">Ubytování</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fs-5 justify-content-end" id="navbarCollapse">
                <ul class="navbar-nav me-5 mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link px-3 text-dark" href="index.php">Domů</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link  text-dark" href="#">Galerie</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link  text-dark" href="#">Ceník</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link  text-dark" href="#">Kontakt</a>
                    </li>
                    <li class="nav-item px-3">
                        <a  class="nav-link btn btn-dark text-light fs-5" href="pokoje.php">Rezervace</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--CARUSEL-->
    <div id="myCarousel" class="carousel slide m" data-bs-ride="carousel">
        <div class="carousel-indicators ">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="mb-5" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="mb-5"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active mb-5" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">

                <img class="bd-placeholder-img" style="margin-top: -50px" width="100%" height="100%"  src="image/main_photo.jpg" alt="z"><rect width="100%" height="100%"></rect>
                <div class="container">

                    <div class="carousel-caption text-end mb-lg-5">
                        <h1>Vila Taťána</h1>
                        <p>Ubytování v srdci Luhačovic</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="bd-placeholder-img" style="margin-top: -50px" width="100%" height="100%"  src="image/main_photo.jpg" alt="z"><rect width="100%" height="100%"></rect>

                <div class="container">
                    <div class="carousel-caption text-end mb-lg-5">
                        <h1>Levné ubytování</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img class="bd-placeholder-img" style="margin-top: -50px" width="100%" height="100%" src="image/main_photo.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"></img>

                <div class="container">
                    <div class="carousel-caption text-end mb-lg-5">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-warning" href="contact.php">Contact</a></p>
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