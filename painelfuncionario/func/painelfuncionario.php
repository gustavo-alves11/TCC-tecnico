<!DOCTYPE html>
<html lang="pt-BR">

  <style>

    .link{
      padding-left: 75px;
      color: rgb(0, 88, 37) !important;
      }

    p{
      color: rgb(0, 88, 37) !important;
      padding-left: 55px;
      } 

    body{
      background-image:url("../styles/img/fundo.jpg");
      color:rgb(119, 128, 0) !important;
      background-repeat:no-repeat;
      background-size:cover;
      background-attachment:fixed;
      }

    .card-login .card-header {
      margin-left: 20px;
      margin-right: 20px;
      margin-top: -40px;
      padding: 20px 0;
      margin-bottom: 15px;
      box-shadow: 4px 5px 15px rgba(0,0,0,0.5);
      }
  
    h3{
      color:white !important;
      background-repeat:no-repeat;
      background-size:cover;
      background-attachment:fixed;
      padding: 0.75rem 1.25rem;
      margin-bottom: 1.75rem;
      font-family: "Roboto Slab", "Times New Roman", serif;
      }

    .tamanho-icone {
      font-size: 47px;
      text-align: center; 
      }

    .card .card-header-primary{
      background: linear-gradient(60deg, #04bb32, #04ad2e);
      }

    .ecobrains{
      color:white;
      font-weight: 700;
      margin-top: 10px;

      }
    
    .title,.card-title {
      font-weight: 700;
      font-family: "Roboto Slab", "Arial", serif;
      }

    .form-group{
      padding-left: 60px;
    }

    
  </style>

<head>
    <meta charset="utf-8" />
    <!--Icone na Aba do navegador------------------------------------------------->
    <link rel="apple-touch-icon" sizes="76x76" href="../styles/img/ic_group_48px.png">
    <link rel="icon" type="image/png" href="../styles/img/ic_group_48px.png">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--Titulo Aba do navegador-->
    <title>ECOBRAINS</title>
    <!-- CSS  -->
    <link href="../styles/css2/bootstrap.min.css" rel="stylesheet" />
    <link href="../styles/css2/light-bootstrap.css?v=2.0.0 " rel="stylesheet" />
</head>

    <!-------Arquivos JavaScript------>
    <script src="../styles/js/core/jquery.3.5.1.min.js" type="text/javascript"></script>
    <script src="../styles/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="../styles/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300"> 

    <!--Inicio-----Card central------------>
      <br><br><br><br>
        <i class="ecobrains">
          <div class="text-center">
            <img src="../styles/img/logo.png" alt="IMG">
        </i>
          </div>
            <br><br><br>

          <div class="container">
            <div class="col-lg-4 col-md-1 ml-auto mr-auto">
              <div class="card card-login">
                <div class="card-header card-header-primary text-center">
                  <h3 class="card-title">Funcionário</h3>
                </div><br>

                <a class="link" href="./pedidos.php">
                  <div class="col-md-2 pl-2">
                    <div class="tamanho-icone">
                      <div class="form-group">
                        <i class="nc-icon nc-notes"></i>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-15 pl-2">
                      <p>Pedidos</p>
                    </div>
                </a> 
              </div>
            </div>
          </div>
        </div>
<!--Fim-----Card central--------------------->
</body>
</html>