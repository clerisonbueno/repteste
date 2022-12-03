<?php 

  session_start();

  if (isset($_SESSION['nome'])){

    echo "Usuario logado";
    iniciar();

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
        <title>Ensina Kids - Pesquisar Objetos de Aprendizagem</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="css/glyphicon.css" media="all" rel="stylesheet" type="text/css"/>
        <link href="css/fileinput.min.css" media="all" rel="stylesheet" type="text/css"/>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logos/logo.png" alt="Logo" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="categorias.html">Categorias</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="produtos.html#portfolio">Produtos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.html">Login</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cadastrar.html#cadastrar">Cadastrar-se</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead
        <header class="masthead" id="login">
            <div class="container">
               
            </div>
        </header>
    -->
   
        <!-- formproduto-->
        <section class="page-section" id="formproduto">
            <br />
            <br />            
        <div class="container">
            <div class="text-center">
                    <h2 class="section-heading text-uppercase">Pesquisa de objetos de aprendizagem</h2>
                    
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" id="email" type="email" placeholder="Pesquisar.." required="required"
                  data-validation-required-message="Please enter your email address." />
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select class="form-control" id="email" required="required"
                  data-validation-required-message="Please enter your email address.">
                  <option>Habilidades</option>
                  <option>Nome</option>
                  <option>Categoria</option>
                </select>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group mb-md-0">
                <button class="btn btn-primary btn-xl text-uppercase js-scroll-trigger">Pesquisar</button>
              </div>
            </div>
          </div>
          </div>

          <?php 


          //
          function iniciar(){

            if (isset($_GET['id'])) {

                $id = $_GET['id'];
                $tipo = verificarTipo($id);

            } else {

                $id = 0;
                $tipo = verificarTipo($id);
            }


            mostrar($tipo);
          }
          

            function verificarTipo($id){

                if ($id == "jogos") {
                    $tipo = "jogos";

                } elseif ($id == "pinturas") {
                    $tipo = "pinturas";

                } elseif ($id == "videos") {
                    $tipo = "videos";

                } elseif ($id == "textos") {
                    $tipo = "textos";

                } elseif ($id == "musicas") {
                    $tipo = "musicas";

                } elseif ($id == "imagens") {
                    $tipo = "imagens";

                } else {
                    $tipo = 0;

                } return $tipo;

            }

            function mostrar($tipo) {

                //echo 'entrou no mostrar!!!';

                // ########## RECUPERAÇÃO DE DADOS NO BANCO #############
                $pdo = new PDO('mysql:host=localhost;dbname=repositorio','root','');
                $sql = $pdo->prepare("SELECT * FROM `objetoseducacionais` WHERE tipo=?");
                $sql->execute(array($tipo));
                $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                echo "<pre>";
                print_r($info);
                echo "</pre>";

                foreach ($info as $key => $value) {

                    echo "<div class='container rounded mb-03'>";
                      echo "<div class='row border bg-light'>";
                        echo "<div class='col'>";
                          echo "<a href="."$info[0]['link']"."><img src="."$info[0]['imagem']"." class='thumbnail'></img></a>";
                        echo "</div>";
                        echo "<div class='col'>";
                          echo "<h4>".$info[0]['titulo']."</h4>";
                          echo "<p>".$info[0]['conteudo']."<br/>";
                          echo "$info[0]['descricao']"."</p>";
                          echo "<p><a href="."$info[0]['link']"." class='btn btn-success text-uppercase'>Abrir Objeto de aprendizagem</a><br/>";
                          echo "<a href='#' class='btn btn-info text-uppercase'>Mais Detalhes</a></p>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>"; 

                }
            }

           ?>
            
        </section>
    
        <!-- Footer-->
        <footer class="footer py-2 fixed-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Ensina Kids 2022</div>
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
        
        <script src="js/jquery.mask.min.js"></script>
        <script src="js/fileinput/fileinput.min.js" type="text/javascript"></script>
        <script src="js/add-mask.js"></script>
        <script>

        </script>
    </body>
</html>
