<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortalJob</title>
    <!-- Fontawesome CSS -->
    @vite(['resources/librairies/fontawesome-free-6.1.1-web/css/all.min.css'])
    <!-- Bootstrap -->
    @vite(['resources/librairies/bootstrap-5.0.2-dist/css/bootstrap.min.css'])
    <!-- CSS -->
    @vite(['resources/css/global.css'])
</head>

<body>
    <main>
        <header>
            <div class="header fixed-top bg-white">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <div class="container">
                        <a href="index.html" class="logo d-flex">
                            <img src="{{ Vite::asset('resources/images/logo.jpg') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Recruteur
                                        <i class="fas fa-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Deja client</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Recruter sur le site</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Emploi
                                        <i class="fas fa-chevron-down toggle-dropdown"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Offres d'emploi</a></li>
                                        <li><a class="dropdown-item" href="#">Offres de stage</a></li>
                                        <li><a class="dropdown-item" href="#">Deposer mon CV</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Formation</a>
                                </li>
                            </ul>
                            <a href="#" class="btn">Se connecter</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <section class="home">
            <div class="container-fluid">
                <div class="home-img">
                    <h1>Notre job, vous aider à choisir le vôtre parmi <strong>755,827 offres</strong></h1>
                </div>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Quel job vous fait vibrer ?"
                            aria-label="Username">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></i></span>
                        <input type="text" class="form-control" placeholder="Où voulez-vous briller ?"
                            aria-label="Server">
                        <span class="input-group-text"><a href="#" class="btn">Rechercher</a></span>
                    </div>
                </form>
            </div>
        </section>
        <section class="offres">
            <div class="container section-title" data-aos="fade-up">
                <h2>Des entreprises <b class="d-block">qui recrutent</b></h2>
            </div>
            <div class="container">
                <div class="row gy-4 my-2">
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>
                            <div class="post-img">
                                <img src="{{ Vite::asset('resources/images/img1.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <img src="{{ Vite::asset('resources/images/clients/client-3.png') }}" class="img-fluid img-logo" alt="">
                                    <h3 class="post-category"><a href="offres-details.html">Lifegroups</a></h3>
                                    <p class="title">
                                        <a href="offres-details.html">100 jobs</a>
                                    </p>
                                </div>
                                <div class="col-3 d-flex justify-content-center align-items-center icons">
                                    <a href="offres-details.html"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>
                            <div class="post-img">
                                <img src="{{ Vite::asset('resources/images/img2.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <img src="{{ Vite::asset('resources/images/clients/client-1.png') }}" class="img-fluid img-logo" alt="">
                                    <h3 class="post-category"><a href="offres-details.html">myob</a></h3>
                                    <p class="title">
                                        <a href="offres-details.html">10 jobs</a>
                                    </p>
                                </div>
                                <div class="col-3 d-flex justify-content-center align-items-center icons">
                                    <a href="offres-details.html"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>
                            <div class="post-img">
                                <img src="{{ Vite::asset('resources/images/img3.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <img src="{{ Vite::asset('resources/images/clients/client-2.png') }}" class="img-fluid img-logo" alt="">
                                    <h3 class="post-category"><a href="offres-details.html">Belimo</a></h3>
                                    <p class="title">
                                        <a href="offres-details.html">20 jobs</a>
                                    </p>
                                </div>
                                <div class="col-3 d-flex justify-content-center align-items-center icons">
                                    <a href="offres-details.html"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row gy-4 my-2">
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>
                            <div class="post-img">
                                <img src="{{ Vite::asset('resources/images/img1.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <img src="{{ Vite::asset('resources/images/clients/client-4.png') }}" class="img-fluid img-logo" alt="">
                                    <h3 class="post-category"><a href="offres-details.html">Grabyo</a></h3>
                                    <p class="title">
                                        <a href="offres-details.html">90 jobs</a>
                                    </p>
                                </div>
                                <div class="col-3 d-flex justify-content-center align-items-center icons">
                                    <a href="offres-details.html"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>
                            <div class="post-img">
                                <img src="{{ Vite::asset('resources/images/img2.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <img src="{{ Vite::asset('resources/images/clients/client-5.png') }}" class="img-fluid img-logo" alt="">
                                    <h3 class="post-category"><a href="offres-details.html">Citrus</a></h3>
                                    <p class="title">
                                        <a href="offres-details.html">70 jobs</a>
                                    </p>
                                </div>
                                <div class="col-3 d-flex justify-content-center align-items-center icons">
                                    <a href="offres-details.html"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <article>
                            <div class="post-img">
                                <img src="{{ Vite::asset('resources/images/img3.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <img src="{{ Vite::asset('resources/images/clients/client-6.png') }}" class="img-fluid img-logo" alt="">
                                    <h3 class="post-category"><a href="offres-details.html">Trustly</a></h3>
                                    <p class="title">
                                        <a href="offres-details.html">120 jobs</a>
                                    </p>
                                </div>
                                <div class="col-3 d-flex justify-content-center align-items-center icons">
                                    <a href="offres-details.html"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <a href="#" class="btn mt-4">Voir toutes les entreprises</a>
            </div>
        </section>
        <section class="job">
            <div class="container section-title" data-aos="fade-up">
                <h2>Trouver un job ?<b class="d-block">Simple comme Hello</b></h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center job-img">
                        <img src="{{ Vite::asset('resources/images/img1.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center flex-column job-content">
                        <h3>Suivez votre candidature</h3>
                        <p>Enfin de la visibilité en direct étape par étape. Postulez et dès que nous avons du nouveau
                            sur l'avancement de votre candidature, vous êtes prévenu !</p>
                        <a href="#" class="btn-link align-self-start">Voir les offres</a>
                    </div>
                </div>
                <div class="row my-8">
                    <div class="col-lg-6 d-flex justify-content-center flex-column job-content">
                        <h3>Des offres qui ne cachent rien</h3>
                        <p>Salaire, télétravail … N’avancez plus dans l’inconnu pour choisir votre futur job.</p>
                        <a href="#" class="btn-link align-self-start">Trouver mon job</a>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center job-img">
                        <img src="{{ Vite::asset('resources/images/img2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center job-img">
                        <img src="{{ Vite::asset('resources/images/img3.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center flex-column job-content">
                        <h3>Des entreprises transparentes</h3>
                        <p>Process de recrutement, délai de réponse, avantages… Vous méritez de vraies réponses, pas de
                            perdre du temps.</p>
                        <a href="#" class="btn-link align-self-start">Voir les entreprises</a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ Vite::asset('resources/images/im1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/images/im1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ Vite::asset('resources/images/im1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </section>
        <footer></footer>
    </main>
    @vite(['resources/librairies/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js'])
</body>

</html>