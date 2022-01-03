<?php
//esse primeiro if e session_start vao em todas as paginas restritras ao adm.
session_start();
if (!isset($_SESSION['loginfuncionario']))
{
    header("location: loginfuncionario.html");
    session_destroy();
    
}
if (isset($_GET["deslogar"])){
    session_destroy();
    header("location: loginfuncionario.html");
}
//if (isset($_GET["consultar"]))
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="utf-8" />
        <!--Icone na Aba do navegador------------------------------------------------->
        <link rel="apple-touch-icon" sizes="76x76" href="../styles/img/ic_group_48px.png">
        <link rel="icon" type="image/png" href="../styles/img/ic_group_48px.png">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!--Titulo Aba do navegador-->
        <title>ECOBRAINS</title>
        <!-- CSS  -->
        <link href="../styles/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../styles/css/light-bootstrap.css?v=2.0.0 " rel="stylesheet" />
    </head>

        <!-------Arquivos JavaScript------>
        <script src="../styles/js/core/jquery.3.5.1.min.js" type="text/javascript"></script>
        <script src="../styles/js/core/bootstrap.min.js" type="text/javascript"></script>
        <script src="../styles/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>

<body>

    <!--Inicio-----Abas da esquerda------------>
    <div class="wrapper">       <!--Cor e imagem do lado, Abas da esquerda-->
        <div class="sidebar" data-color="green" data-image="../styles/img/sidebar-5.jpg">
            <div class="sidebar-wrapper" >
                <div class="logo">
                    <a class="simple-text">
                        ECOBRAINS
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="painelfuncionario.php">
                            <i class="nc-icon nc-tv-2"></i>
                            <p>Painel Funcionario</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./pedidos.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Pedidos</p>
                        </a>
                    </li>
                    <li>
                </ul>
            </div>
        </div>
    <!--Fim-----Abas da esquerda------------>

            <!--Inicio------Aba superior------------>
        <div class="main-panel">                         
             <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" > Fazer Pedido </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href=?deslogar>
                                    <span class="no-icon">Sair</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
           <!--Fim------Aba superior------------>

<!--Inicio-----Card central---------------------->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4>
                        <p class="card-category"></p>
                    </div>
                        <div class="card-body all-icons">
                            <form action="indexfuncionario.php" method="POST" ><!--------------------------------------------Formulario--------------------------------->
                            <div class="row">
                                <div class="col-md-2 r-1">
                                    <div class="form-group">
                                        <label for="">Codigo Funcionario</label>
                                        <input type="text" class="form-control" name="codfunc">
                                    </div>
                                </div>
                            </div>
                                
                                <div class="row">
                                    <div class="col-md-2 pr-1">
                                        <div class="form-group">
                                            <label>CPF Cliente</label>
                                            <input type="text" class="form-control" name="cpf">
                                        </div>
                                    </div>
        
                                    <div class="col-md-3 pl-1">
                                        <div class="form-group">
                                            <label>Nome Produto</label>
                                            <input type="text" class="form-control" name="nome">
                                        </div>
                                    </div>
        
                                    <div class="col-md-2 pl-1">
                                        <div class="form-group">
                                            <label for="">Peso</label>
                                            <input type="text" class="form-control" name="peso">
                                        </div>
                                    </div>
                                </div>

                           
                            </div>
                                     
                                    <div class="col-md- pl-3">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary"  name="botao" value="finalizar" ></input>                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--Fim-----Card central--------------------->
</body>
</html>