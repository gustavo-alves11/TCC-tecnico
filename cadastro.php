<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    input{margin-left: 3% !important; }
    label{margin-left: 3% !important; }

    .nav-link:hover{color: green !important;}

    body{background-image:url("images/reciclagem/background3.jpg");
		color:white !important;
		background-repeat:no-repeat;
		background-size:cover;
		background-attachment:fixed;}

    select{
      margin-left: 3% !important; 
    }
  </style>
  <title>CADASTRO</title>
  <meta charset="utf-8">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.6" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="icon" type="image/png" href="images/icons/icon1.png"/>
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
    <!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="css2/util.css">
      <link rel="stylesheet" type="text/css" href="css2/main.css">
    <!--===============================================================================================-->


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700i,900|Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Sierra</title>

        <!-- Icon css link -->
        <link href="css1/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css1/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        
        <link href="css1/style.css" rel="stylesheet">
        <link href="css1/responsive.css" rel="stylesheet">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script src="jquery.2.1.3.min" type="text/javascript"></script>

    <?php include("cadastrocliente.php");?>

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="main_menu_area">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                  <span></span>
              </button>
  
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                      <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                      <li class="nav-item"><a class="nav-link" href="produtos.html">Produtos</a></li>
                      <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  </ul>
              </div>
          </nav>
      </header>

      <br><br><br><br><br><br><br><br>
    <div class="section section-signup page-header">
      <div class="container"><br><br><br><br><br><br><br><br><br>
        <div class="row">
          <div class="col-lg-4 col-md-6 ml-auto mr-auto">
            <div class="card card-login">
              <form class="form" method="" action="">
                <div class="card-header card-header-primary text-center">
                  <h4 class="card-title">Cadastro</h4>
                </div>
                <center><p>Coloque seus dados</p>
                </center>
                
                <div class="card-body">
                  
                  <label>CPF</label>
                  <input type="number" id="cpf_cliente" class="form-control" placeholder="Ex.: 000000000-00">

                  <label>Nome</label>
                  <input type="text" id="nome_cliente" class="form-control" placeholder="Nome...">

                  <label>Data De Nascimento</label>
                  <input type="date" id="data_nasc_cliente" class="form-control" style="color: #989898;">
                    
                  <label style="font-size: 15px; margin-left: 3% !important;">Sexo</label><br>

                  <select class="form-control" id="sexo_cliente" style="color: #989898;">
                    <option value="M" selected>Maculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                  </select>

                  <label>CEP</label>
                  <input type="number" id="cep_cliente" class="form-control" placeholder="Ex.: 00000-000">

                  <label>Cidade</label>
                  <input type="text" id="cidade_cliente" class="form-control" placeholder="Cidade..."/>

                  <label>Bairro</label>
                  <input type="text" id="bairro_cliente" class="form-control" placeholder="Bairro...">

                  <label>Endereço</label>
                  <input type="text" id="endereco_cliente" class="form-control" placeholder="Endereço...">
                  
                  <label>Número da Casa</label>
                  <input type="text" id="numero_cliente" class="form-control" placeholder="Ex.: 00000">

                  <label>Complemento</label>
                  <input type="text" id="complemento_cliente" id="email_cliente" class="form-control" placeholder="Complemento...">

                  <label>E-mail</label>
                  <input type="text" id="email_cliente" class="form-control" placeholder="E-mail...">
                  
                  <label>Celular</label>
                  <input type="number" id="fone_cel_cliente" class="form-control" placeholder="Ex.: (00) 00000-0000">
                  
                  <label>Telefone Residencial</label>
                  <input type="number" id="fone_res_cliente" class="form-control" placeholder="Ex.: (00) 0000-0000">

                  <label>Senha</label>
                  <input type="password" id="senha_cliente" class="form-control" placeholder="Senha...">

                </div>
                <div class="footer text-center"><br>
                  <a class="btn btn-primary btn-link btn-wd btn-lg" type="submit" id="enviar">Cadastrar</a><br><br>
                  <div id="mensagens">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
      

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js1/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js1/popper.min.js"></script>
        <script src="js1/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <!-- Extra plugin css -->
        <script src="vendors/counterup/jquery.waypoints.min.js"></script>
        <script src="vendors/counterup/jquery.counterup.min.js"></script> 
        <script src="vendors/counterup/apear.js"></script>
        <script src="vendors/counterup/countto.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
        <script src="js1/smoothscroll.js"></script>
        
        <script src="js1/theme.js"></script>

        <!--===============================================================================================-->
        <script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
          <script src="vendor1/bootstrap/js/popper.js"></script>
          <script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
          <script src="vendor1/select2/select2.min.js"></script>
        <!--===============================================================================================-->
          <script src="vendor1/tilt/tilt.jquery.min.js"></script>
          <script >
            $('.js-tilt').tilt({
              scale: 1.1
            })
          </script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-23581568-13');
        </script>
        
        <!--===============================================================================================-->
          <script src="js2/main.js"></script>
     

  </body>

</html>
