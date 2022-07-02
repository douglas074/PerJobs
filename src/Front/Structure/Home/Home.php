<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS connection -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Local CSS connection -->
    <link rel="stylesheet" href="/PerJobs/src/Front/Structure/Home/src/style.css">

    <title>Minha página de teste</title>

</head>

<body>
<nav class="navbar navbar-expand-lg sticky-top bg-light">
    <div class="container-fluid">
        <a class="navbar-brand tittleFont fs-3" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
            aria-controls="offcanvasExample">
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
            <button class="btn p-1 tt" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
                aria-expanded="false" aria-controls="collapseExample">

                <svg xmlns=" http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg"
                    viewBox="0 0 16 16" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-custom-class="custom-tooltip" title="Criar Postagem">
                    <path fill-rule="evenodd"
                        d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                </svg>


            </button>
            <div class="dropdown" data-bs-toggle="dropdown" aria-expanded="false" style="width:10vh;">
                <button class="btn p-1 dropdow-toggle tt" type="button" id="perfil" role="button">
                    <img src="/PerJobs/src/Front/Images/Profile/amaimon.jpeg" class="img-fluid float-end img-thumbnail rounded-circle"
                        alt="Sua foto de perfil" data-bs-toggle="tooltip" data-bs-placement="left"
                        data-bs-custom-class="custom-tooltip" title="Opções">
                </button>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="perfil">
                    <li><a class="dropdown-item" href="/PerJobs/src/Front/structure/Profile/Profile.php">Perfil</a></li>
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

<div class="container-fluid">
    <div class="row mt-1 collapse" id="collapseExample">

        <div class="col-sm-1 col-md-2">
            <!-- Side spacing -->
        </div>
        
        <form class="col-sm-10 col-md-8 needs-validation" action="./script.php" id="postForm" method="POST" novalidate>
            <p class="tittleFont fs-4">Criar postagem</p>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="titlePost" name="title" placeholder="Insira o título aqui..."
                            value="" maxlength="50" required>
                        <label for="titlePost" class="tittleFont">Título da postagem</label>
                        <div class="valid-feedback">
                            Parece bom.
                        </div>
                        <div class="invalid-feedback">
                            O campo não pode estar vazio
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <label for="titlePost" class="tittleFont">Tipo de trabalho</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="typeJob" id="typeJob1" required>
                        <label class="form-check-label subTextFont" for="typeJob1">
                            Freelance
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="typeJob" id="typeJob2" required>
                        <label class="form-check-label subTextFont" for="typeJob2">
                            Carteira assinada
                        </label>
                        <div class="valid-feedback">
                            Parece bom.
                        </div>
                        <div class="invalid-feedback">
                            Selecione algum dos dois.
                        </div>
                    </div>

                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-floating">
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Insira o título aqui..."
                            value="" maxlength="250" required></textarea>
                        <label for="description" class="tittleFont">Descrição</label>
                        <div class="valid-feedback">
                            Parece bom.
                        </div>
                        <div class="invalid-feedback">
                            O campo não pode estar vazio
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="number" name="NmrVagas" class="form-control" id="titlePost" placeholder="Insira o título aqui..."
                            value="" maxlength="3" required>
                        <label for="titlePost" class="tittleFont">Número de vagas</label>
                        <div class="valid-feedback">
                            Parece bom.
                        </div>
                        <div class="invalid-feedback">
                            Tipo de incoerência.
                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-primary float-end mt-1" type="submit">Enviar</button>
        </form>

        <div class="col-12">
            <div id="mensagem_erro"></div>
            <div id="insere_aqui"></div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1 col-md-2 ">
            <!-- Side spacing -->
        </div>
        <div class="col-sm-10 col-md-4 bg-info p-2">
            <div class="card">
                <div class="card-header">
                    <a href="/PerJobs/src/Front/Structure/Profile/Profile.php" class="text-decoration-none text-dark text-capitalize fs-5 fw-bolder">
                        <img src="/PerJobs/src/Front/Images/Profile/amaimon.jpeg" class="img-fluid float-start img-thumbnail rounded-circle"
                            style="width: 8vh" alt="Sua foto de perfil">
                        user name</a>
                    <p>data</p>
                </div>
                <div class="card-body">
                    <h5 class="card-title tittleFont">Special title treatment</h5>
                    <p class="card-text subTextFont">With supporting text below as a natural lead-in to additional
                        content.</p>
                    <a href="#" class="btn btn-primary">Se candidatar</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Bootstrap JavaScript connection -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>
<script src="/PerJobs/src/Front/jQuery/jquery.min.js"></script>
<script src="/PerJobs/src/Front/Structure/Home/src/js/bootstrapScripts.js"></script>
<script src="/PerJobs/src/Front/Structure/Home/src/js/script.js"></script>

</body>

</html>