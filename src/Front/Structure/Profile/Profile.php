<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS connection -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Local CSS connection -->
    <link rel="stylesheet" href="/PerJobs/src/Front/Structure/Profile/src/style.css">

    <title>PerJobs - Perfil</title>

</head>

<body>
<nav class="navbar navbar-expand-lg sticky-top bg-light">
    <div class="container-fluid">
        <a class="navbar-brand tittleFont fs-3" href="/PerJobs/src/Front/Structure/Home/Home.php" role="button">
            PerJobs
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="d-flex me-auto" role="search">
                <input class="form-control me-1 rounded-pill" type="search" placeholder="Pesquisar..."
                    aria-label="Search">
                <button class="btn btn-outline-success rounded-pill" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </form>
            <div class="dropdown" data-bs-toggle="dropdown" aria-expanded="false" style="width:10vh;">
                <button class="btn p-1 dropdow-toggle tt" type="button" id="perfil" role="button">
                    <img src="/PerJobs/src/Front/Images/Profile/amaimon.jpeg" class="img-fluid float-end img-thumbnail rounded-circle"
                        alt="Sua foto de perfil" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-custom-class="custom-tooltip" title="Opções">
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="perfil">
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li><a class="dropdown-item" href="#">Configurações</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sair</a></li>

                </ul>
            </div>

        </div>
    </div>
</nav>
<article class="container-fluid">
    <header class="row">
        <aside class="col-sm-2 col-md-2"></aside>
        <section class="col-sm-8 col-md-8 bg-dark ">
            <div class="coverBackgroundPositioning img-fluid" style="background-image: url('/PerJobs/src/Front/Images/Cover/jojo.jpeg');"></div>
        </section>
    </header>

    <section class="row">
        <aside class="col-sm-2 col-md-2"></aside>
        <section class="col-sm-3 col-md-3 bg-info">
            <div class="d-flex justify-content-around">
                <img src="/PerJobs/src/Front/Images/Profile/amaimon.jpeg" alt="Sua foto de perfil..." 
                class="img-thumbnail rounded-circle">
            </div>
            <p class="tittleFont fs-4 text-break">Douglas Guilherme</p>
            <span class="subTextFont fs-6 d-block ms-4">dados</span>            
            <span class="subTextFont fs-6 d-block ms-4">dados</span>
        </section>
        <section class="col-sm-5 col-md-5 bg-danger"> 

        </section>
    </section>
</article>

<!-- Bootstrap JavaScript connection -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>

<!--Local JS-->
<script src="/PerJobs/src/Front/jQuery/jquery.min.js"></script>
<script src="/PerJobs/src/Front/Structure/Home/src/js/bootstrapScripts.js"></script>
<script src="/PerJobs/src/Front/Structure/Home/src/js/script.js"></script>

</body>
