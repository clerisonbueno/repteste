<?php 

  session_start();

  if (isset($_SESSION['nome'])){

    //echo "Usuario logado";

  } else {

    echo "<script> alert('Usuário não logado! Faça o login para ter acesso a página solicitada.')</script>";
    echo "<script>window.location.href = 'login.php'</script>";

  }

 ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Ensina Kids - Menu</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logos/logo_vfinal.png" alt="Logo" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ml-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="meuespaco.php">Meu Espaço</a></li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="meuperfil.php">Meu Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="quemsomos.php">Quem somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead
  <header class="masthead" id="login">
    <div class="container"></div>
  </header>-->


  <!-- produtos-->
  <section class="page-section bg-light" id="portfolio">
    <div class="container">
      <div>
        <form>
          <div class="row mb-5">
            <div class="col-md-6">
              <a type="" href="pesquisa.php?id=0" class="btn btn-info btn-xl text-uppercase js-scroll-trigger"><i class="bi bi-search"></i> Pesquisa Avançada</a>
                
            </div>

            <div class="col-md-0">
              <div class="form-group mb-md-0">
                <a type="" href="cadobjetos.php" class="btn btn-success btn-xl text-uppercase js-scroll-trigger"><i class="fas fa-plus mr 1"></i> Cadastrar Objeto de Aprendizagem</a>
              </div>
            </div>
          </div>
          
        </form>
      </div>


      <!-- #### itens do menu  #####-->
      <div class="row ">
        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="portfolio-item ">
            <a class="portfolio-link" href="pesquisa.php?id=1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="bi bi-search fa-5x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/logos/jogos.png" alt="" /></a>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="portfolio-item">
            <a class="portfolio-link" href="pesquisa.php?id=2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="bi bi-search fa-5x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/logos/musicas.png" alt="" />
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4">
          <div class="portfolio-item">
            <a class="portfolio-link" href="pesquisa.php?id=3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="bi bi-search fa-5x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/logos/imagens.png" alt="" />
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="portfolio-item">
            <a class="portfolio-link"  href="pesquisa.php?id=4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="bi bi-search fa-5x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/logos/pinturas.png" alt="" />
            </a>
          </div>
        </div>
      
    

    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="portfolio-item">
            <a class="portfolio-link" href="pesquisa.php?id=5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="bi bi-search fa-5x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/logos/videos.png" alt="" />
            </a>
          </div>
        </div>
    

    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="portfolio-item">
            <a class="portfolio-link" href="pesquisa.php?id=6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="bi bi-search fa-5x"></i>
                </div>
              </div>
              <img class="img-fluid" src="assets/img/logos/textos.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Footer-->
  <footer class="footer py-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-4 text-lg-left">
          Copyright © Ensina Kids 2022
        </div>
        <div class="col-lg-4 my-3 my-lg-0">
          <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <div class="col-lg-4 text-lg-right">
          <a class="mr-3" href="#!">Privacy Policy</a>
          <a href="#!">Terms of Use</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Contact form JS-->
  <script src="assets/mail/jqBootstrapValidation.js"></script>
  <script src="assets/mail/contact_me.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <script></script>
</body>

</html>