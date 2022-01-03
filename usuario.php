<?php
session_start();
if (!isset($_SESSION['logincliente']))
{
    header("location: login.html");
    session_destroy();
    
}
if (isset($_GET["deslogar"])){
  session_destroy();
  header("location: login.html");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>ECOBRAINS</title>

  <style>
    .esquerda{margin-left:17%;
      text-align:left;
    float:left;}

    .progresso{margin-right:20%;
      text-align:right;
    float: right;
    width: 350px;}

    .intro{ background-image:url("images/reciclagem/background5.jpg");
        background-repeat:no-repeat;
        background-size:cover;}

    body{background-color: white !important;}
    .nav-link:hover{color: green !important;}
  </style>
  <meta charset="utf-8">
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

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-color:#ECE4CF;">
  <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body">
        </div>
      </div>

     
<div class="intro">
      <header class="main_menu_area">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html"><img src="images/reciclagem/logo.png" height="64px;" width="64px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="produtos.html">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="?deslogar">Sair</a></li>
                </ul>
            </div>
        </nav>
    </header><br><br><br><br>


        <br><h2 style="font-size:50px; color:white; margin-left:12%; height: 1px;">Perfil</h2><br>
       
        <br><br><br><br><br>
  
</div><br><br>
    <div class="circle">
      <div class="esquerda">
        <h1>Dados</h1><br>
        <label><b>Nome:</b> <?=$_SESSION['nomeCliente']?></label><br>
        <label><b>CPF:</b> <?=$_SESSION['cpfCliente']?></label><br>
        <label><b>E-mail:</b> <?=$_SESSION['emailCliente']?></label><br>      
        <label style="margin-bottom: 20px;"><b>Celular:</b> <?=$_SESSION['celularCliente']?></label><br>
        <a href="alterar.html" style="border-radius:5px; border: solid 1px green; color: green; padding: 9px;">Alterar dados</a>
        </div>
    </div>
      <div class="progresso">
      <label style="font-size: 24px;"><b><i>Seus pontos:</i></b> <?=$_SESSION['pontosCliente']?></label><br>
      

       
      <form method="POST" action="gerarcupons.php" >
        <br>
          <button type="submit" style="border: margin-left: 600px !important; border:solid green 1px; padding: 10px; color:black; border-radius: 5px;">Gerar cupom <img src="images/reciclagem/presente.png" height="20px" width="20px"></button><br><br>
          <div id="cupom">
        </div>  
    </div>
    </form>
   





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
          jQuery(document).ready(function($) {
   $(".scroll").click(function(event){
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);
   });
  });


          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-23581568-13');
        </script>
        
        <!--===============================================================================================-->
          <script src="js2/main.js"></script>
     

  </body>

</html>