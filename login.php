<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Ensina Kids - Login</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body id="page-top">
        
        <!-- Masthead-->
        <header class="masthead" id="login">
            <div class="">
                    <br/>
                    <img src="../Repositorio/assets/img/logos/logo_vfinal.png" alt="Ensina Kids" width="400">
                </div>
                <form method="post">
                    <div class="row justify-content-md-center mb-0 text-center">
                        <div class="col-md-12 align-self-center text-center">
                            <div class="form-group input-login mx-auto">
                                <input  name="email" class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Insira seu e-mail cadastrado." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0 input-login mx-auto">
                                <input name="senha" class="form-control" id="phone" type="password" placeholder="Senha *" required="required" data-validation-required-message="Insira sua senha." />
                                <p class="help-block text-danger"></p>
                            </div>

                           <?php 

                                if (isset($_POST['entrar'])) {

                                    $email = $_POST['email'];
                                    $senha = $_POST['senha'];

                                     // ########## RECUPERAÇÃO DE DADOS NO BANCO #############
                                    $pdo = new PDO('mysql:host=localhost;dbname=repositorio','root','');

                                    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email=? and senha=?");
                                    $sql->execute(array($email, $senha));
                                    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

                                    
                                    if (!empty($info)) {
                                        
                                        // #### Inicializa uma sessão e carrega os dados persistentes #####
                                        session_start();
                                        $_SESSION['nome'] = $info[0]['nome'];
                                        $_SESSION['foto'] = $info[0]['foto'];
                                        $_SESSION['id'] = $info[0]['id'];
                                        $_SESSION['email'] = $info[0]['email'];

                                        echo "<pre>";
                                        echo print_r($info);
                                        echo "</pre>";

                                        echo "<script>window.location.href = 'produtos.php'</script>";

                                    } else {
                                        echo "<br />";
                                        echo "<div class='container alert alert-danger' role='alert'>";
                                        echo "Usuário ou senha não encontrados.";
                                        echo "</div>";
                                    } 
                                }


                           ?>
                        </div>

                        <div class="container">
                            <br />
                            <input type="submit" name="entrar" value="Entrar" class="btn btn-success btn-xl text-uppercase js-scroll-trigger" required="required"/>
                            <span>&nbsp&nbsp</span>
                            <button onclick="window.location.href='cadastrar.php'" class="btn btn-info btn-xl text-uppercase js-scroll-trigger">Cadastre-se</button>

                    </div>
                    </div>
                    
                </form>
                
            </div>
        </header>
       
    
        <!-- Footer-->
        <footer class="footer py-2">
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
    </body>
</html>
