<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-Commerce - Cadastrar</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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
        </header> -->


        <!-- cadastrar-->
        <section class="page-section bg-light" id="cadastrar">
            <br /> <br /> <br />
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cadastre-se</h2>
                    <h3 class="section-subheading text-muted">Crie seu Cadastro Gratuitamente</h3>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" name="cadastro">
                    <div class="row justify-content-md-center mb-5 text-center">
                        <div class="col-md-12 align-self-center text-center">

                            <div class="form-group input-login mx-auto">
                                <input class="form-control" id="file" type="file" name="foto" placeholder="Nome completo *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group input-login mx-auto">
                                <input class="form-control" id="email" type="text" name="nome" placeholder="Nome completo *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group input-login mx-auto">
                                <input class="form-control" id="email" type="email" name="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group input-login mx-auto">
                                <input class="form-control" id="cidade" type="text" name="cidade" placeholder="Cidade *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group input-login mx-auto">
                                <input class="form-control" id="cidade" type="text" name="endereco" placeholder="Endereço completo *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group input-login mx-auto">
                                <input class="form-control" id="rg" type="rg" name="rg" placeholder="RG *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group input-login mx-auto">
                                <input class="form-control" id="cpf" type="cpf" name="cpf" placeholder="CPF *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>

                             <div class="form-group input-login mx-auto">
                                <input class="form-control" id="cidade" type="text" name="instituicao" placeholder="Instituição de ensino *" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group input-login mx-auto">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Assinatura do termo de responsabilidade:
                                </label>
                                <input class="form-control" id="cidade" type="checkbox" name="termoresponsabilidade" value="Concordo" required="required" data-validation-required-message="Please enter your email address." />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Concordo
                                </label>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group input-login mx-auto">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Assinatura do termo LGPD:
                                </label>
                                <input class="form-control" id="cidade" type="checkbox" name="termolgpd" value="Concordo" required="required" data-validation-required-message="Please enter your email address." />
                                <label class="form-check-label" for="flexCheckDefault">
                                    Concordo
                                </label>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group input-login mx-auto">
                                <input class="form-control" id="phone" type="password" name="senha" placeholder="Senha *" required="required" data-validation-required-message="Insira sua senha." />
                                <p class="help-block text-danger"></p>
                            </div>

                             <div class="form-group input-login mx-auto">
                                <input class="form-control" id="phone" type="password" name="confirmasenha" placeholder="Confirme a sua senha *" required="required" data-validation-required-message="Insira sua senha." />
                                <p class="help-block text-danger"></p>
                            </div>

                            <input type="submit" name="salvar" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#cadastrar" value="Cadastrar" />
                        </div> 
                    </div>
                    
                </form>

                 <?php 

    if (isset($_POST['salvar'])) {

        $nome = $_POST['nome'];
        $foto = $_FILES['foto'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $instituicao = $_POST['instituicao'];
        $termoResp = $_POST['termoresponsabilidade'];
        $termoLgpd = $_POST['termolgpd'];
        $senha = $_POST['senha'];
        $confirmasenha = $_POST['confirmasenha'];
        $data = date('Y-m-d H:i:s');

        if ($senha == $confirmasenha) {

            // Se a foto estiver sido selecionada
            if (!empty($foto["name"])) {
                
                // Largura máxima em pixels
                $largura = 1500;
                // Altura máxima em pixels
                $altura = 1800;
                // Tamanho máximo do arquivo em bytes
                $tamanho = 64000;
                $error = array();

                // Verifica se o arquivo é uma imagem
                if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
                    $error[1] = "Isso não é uma imagem.";
                    } 
            
                // Pega as dimensões da imagem
                $dimensoes = getimagesize($foto["tmp_name"]);
            
                // Verifica se a largura da imagem é maior que a largura permitida
                if($dimensoes[0] > $largura) {
                    $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
                }
                // Verifica se a altura da imagem é maior que a altura permitida
                if($dimensoes[1] > $altura) {
                    $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
                }
                
                // Verifica se o tamanho da imagem é maior que o tamanho permitido
                if($foto["size"] > $tamanho) {
                        $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
                }

                // Se não houver nenhum erro
                if (count($error) == 0) {
                
                    // Pega extensão da imagem
                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
                    // Gera um nome único para a imagem
                    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
                    // Caminho de onde ficará a imagem
                    $caminho_imagem = "Fotos/" . $nome_imagem;
                    // Faz o upload da imagem para seu respectivo caminho
                    move_uploaded_file($foto["tmp_name"], $caminho_imagem);


                    // ########## GRAVAÇÃO NO BANCO DE DADOS #############
                    $pdo = new PDO('mysql:host=localhost;dbname=repositorio','root','');

                    $sql = $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)");
                    $sql->execute(array($nome_imagem, $nome, $email, $cidade, $endereco, $rg, $cpf, $instituicao, $termoResp, $termoLgpd, $senha, $data));

                    echo "<div class='alert alert-success text-uppercase' role='alert'>";
                            echo "Cadastro realizado com sucesso";
                    echo "</div>";

                    echo "<script> alert('Cadastro realizado com sucesso!')</script>";
                    echo "<script>window.location.href = 'login.php'</script>";

                }

            //header('Location:login.php');

        } else {

                //echo "<div class='container'>";
                echo "<div class='alert alert-danger text-uppercase' role='alert'>";
                    echo "Senhas não conferem! Verifique e digite novamente.";
                echo "</div>";
                //echo "</div>";

        }

    }     

    }

?>
            </div>
        </section>


    
        <!-- Footer-->
        <footer class="footer py-4">
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
        <script>

        </script>
    </body>
</html>
