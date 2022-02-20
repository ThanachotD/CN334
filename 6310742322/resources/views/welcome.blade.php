<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Thanchot</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&family=Roboto:wght@700&display=swap"
          rel="stylesheet">
    <!-- Styles -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('box.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{asset('box.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <style>

        body {
            font-family: 'Kanit', sans-serif;
        }

        a {
            color: black;
        }

    </style>
</head>
<body>


<nav class="navbar" style="height: 80px;padding-left: 1%;position: fixed;">
    <a class="navbar-brand" href="#">
        <img src="{{asset('logofinal.svg')}}" width="65%" alt="">
    </a>
</nav>

<header id="header" class="d-flex flex-column justify-content-center" style="padding-left: 1%">
    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd"
                              d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                    </svg>
                    <span>My home</span></a></li>
            <li><a href="#about" class="nav-link scrollto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    <span>My self</span></a></li>
            <li><a href="#resume" class="nav-link scrollto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-file-earmark-fill" viewBox="0 0 16 16">
                        <path
                            d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3z"/>
                    </svg>
                    <span>My Resume</span></a></li>
            <li><a href="#portfolio" class="nav-link scrollto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                        <path
                            d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z"/>
                        <path
                            d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
                    </svg>
                    <span>My work</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->

</header><!-- End Header -->

<section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <center style="padding-right: 150px">
                <div class="col">
                    <h1 style="font-size: 100px;font-weight: bold;color: #3F3F3F">DESIGN<span
                            style="color: #FFA800;font-weight: bold;">.</span></h1>

                    <p style="color: #C4C4C4;font-size: 20px;">EVERYTHING YOU NEED TO KNOW IN MY PERSONAL PORTFOLIO
                        <span
                            class="typed"
                            data-typed-items="Designer, Developer, Freelancer, Photographer"></span>
                    </p>
                </div>
                <div class="social-links">
                    <a href="{{url('https://www.figma.com/file/ciQDnMBthX2u9ejuBgnPEP/portfolio?node-id=0%3A1')}}"
                       class="twitter"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-github"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-google"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-instagram"></i></a>
                </div>
            </center>
        </div>
    </div>
</section><!-- End Hero -->

<section id="about" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-5">
                <img src="{{asset('profile.jpg')}}">
            </div>
            <div class="col-3" style="margin-top: 6%;">
                <h1 style="font-size: 65px;font-weight: bold;color: #3F3F3F;padding-left: 10%;">
                    My<br><span
                        style="color: #FFA800;font-weight: bold;">Story</span></h1>
                <p style="text-align: justify;padding-left: 10%;"> Lorem Ipsum is simply dummy text of the printing
                    and
                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                    1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen bookLorem
                    Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown </p>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<section id="resume" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="row">
            <div class="col-6">
                <h1 style="font-size: 65px;font-weight: bold;color: #3F3F3F">Skill&<br><span
                        style="color: #FFA800;font-weight: bold;">Experience</span></h1>
                <p style="text-align: justify;">Contrary to popular belief, Lorem Ipsum is not simply random text. It
                    has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the
                    more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of
                    the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                    1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" </p>
            </div>
            <div class="col">
                <br>
                <h6 style="text-transform: uppercase;margin-top: 10px">html css js</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 80%"
                         aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h6 style="text-transform: uppercase;margin-top: 10px">python</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 85%"
                         aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h6 style="text-transform: uppercase;margin-top: 10px">java</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 70%"
                         aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h6 style="text-transform: uppercase;margin-top: 10px">laravel</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 5%"
                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h6 style="text-transform: uppercase;margin-top: 10px">UX/UI</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 100%"
                         aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <h6 style="text-transform: uppercase;margin-top: 10px">Photography</h6>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: 85%"
                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="https://www.modernist.life/">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3"><img src="{{asset('songsue.svg')}}">
                                </div>
                                <div class="col"><br>
                                    <h1 style="font-size: 30px;font-weight: bold;color: #3F3F3F">CONTENT WRITING</h1>
                                    <p class="">Songsue Media Lab พนักงานอิสระ<br>
                                        ต.ค. 2019 - ก.พ.2022 · 2 ปี 5 เดือน</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-6">
                <a href="https://gdsc.community.dev/thammasat-university/">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3"><img src="{{asset('google.svg')}}">
                                </div>

                                <div class="col"><br>
                                    <h1 style="font-size: 30px;font-weight: bold;color: #3F3F3F">UX/UI</h1>
                                    <p class="">Google Developer Student Clubs เต็มเวลา<br>
                                        พ.ย. 2021 - ปัจจุบัน · 4 เดือน</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section><!-- End Hero -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>My work</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('catagory (1).jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="{{asset('catagory (1).jpg')}}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                               data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('catagory (2).jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="{{asset('catagory (2).jpg')}}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                               data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('catagory (3).jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="{{asset('catagory (2).jpg')}}" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                               data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset('catagory (1).jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                               data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('catagory (2).jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                               data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('catagory (3).jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                               data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset('catagory (1).jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                               data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                    <img src="{{asset('catagory (2).jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                               data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                <div class="portfolio-wrap">
                    <img src="{{asset('catagory (3).jpg')}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                               class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="portfolio-details-lightbox"
                               data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Portfolio Section -->

</body>
</html>
