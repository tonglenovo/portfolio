<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link href="styles.css" rel="stylesheet" type="text/css"/>
        <title>My First Website</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
            <div class="container">
                <a class="navbar-brand" href="#">Title</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutme">About Me</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="bg-dark text-light p-5 p-lg-0 pt-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div>
                        <h1>I am <span class="text-warning">Koh Yi Tong</span></h1>
                        <p class="lead my-4">Enjoys Development and Design, Programming, Front-end and Back-end, as well as UI and UX.</p>
                        <button class="btn btn-primary btn-lg">Email me</button>
                    </div>
                    <img class="img-fluid w-50 d-none d-sm-block" src="img/bg04.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h3 class="mb-3 mb-md-0">Sent me an offer</h3>

                    <div class="input-group news-inputs">
                        <input type="text" class="form-control" placeholder="Enter email">
                        <button class="btn btn-dark btn-lg" type="button">Button</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-5">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md">
                        <div class="card bg-dark text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-laptop"></i>
                                </div>
                                <h3 class="card-title mb-3">Education</h3>
                                <p class="card-text">
                                    2017-2019 National Service<br>2014-2017 Diploma of Mobile Software Development <br>2012-2013 Nitec of Information Communication
                                </p>
                                <a href="#" class="btn btn-primary">View Cert</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-secondary text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-person-square"></i>
                                </div>
                                <h3 class="card-title mb-3">Work Experience</h3>
                                <p class="card-text">
                                    2019-now Desktop Engineer at Schools<br>2016-2017 Poly Intern in RP
                                    <!--                                    2017-2019 National Service<br>2014-2017 Diploma of Mobile Software Development <br>2012-2013 Nitec of Information Communication-->
                                </p>
                                <a href="#" class="btn btn-dark">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-dark text-light">
                            <div class="card-body text-center">
                                <div class="h1 mb-3">
                                    <i class="bi bi-people"></i>
                                </div>
                                <h3 class="card-title mb-3">Skill</h3>
                                <p class="card-text">
                                <ui>
                                    <li>PHP</li>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>MySQL</li>
                                    <li>Android Studio</li>
                                </ui>
                                <!--                                    2017-2019 National Service<br>2014-2017 Diploma of Mobile Software Development <br>2012-2013 Nitec of Information Communication-->
                                </p>
                                <a href="#" class="btn btn-primary">View Sample</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="aboutme" class="p-5">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                        <img src="img/bg04.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md p-5">
                        <h2>About me</h2>
                        <p class="lead">Enjoys Development and Design, Programming, Front-end and Back-end, as well as UI and UX.</p>
                        <p>I am a fast learner toward coding and willing to learn more if someone able to guide me or advise me will be better</p>
                        <a class="btn btn-light mt-3" href="#">
                            <i class="bi bi-chevron-right">Read more</i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="portfolio" class="p-5 bg-dark text-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md p-5">
                        <h2>Portfolio</h2>
                        <p class="lead">Enjoys Development and Design, Programming, Front-end and Back-end, as well as UI and UX.</p>
                        <p>I am a fast learner toward coding and willing to learn more if someone able to guide me or advise me will be better</p>
                        <a class="btn btn-light mt-3" href="#">
                            <i class="bi bi-chevron-right">Read more</i>
                        </a>
                    </div>
                    <div class="col-md">
                        <img src="img/bg04.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>