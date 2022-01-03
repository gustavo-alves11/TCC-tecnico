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
            </div>
        </div>
    
    <!--Fim-----Abas da esquerda------------>

            <!--Inicio------Aba superior------------>
        <div class="main-panel">                       
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" > Produtos </a>
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
                        <?php
session_start();
include "conexao.php";

if(isset($_POST["cod_produto"])){$codigo=$_POST["cod_produto"];};
if(isset($_POST["nome_produto"])){$nome=$_POST["nome_produto"];};
if(isset($_POST["preco_produto"])){$preco=$_POST["preco_produto"];};
if(isset($_POST["Botao"])){$Botao=$_POST["Botao"];};

//===============================================Incluir===============================================================
if ($Botao == "Incluir")
{
    try
    {
         $comando=$conexao->prepare("insert into tb_produto (cod_produto, nome_produto, preco_produto) values (?, ?, ?)");
         $comando->bindParam(1, $codigo);
         $comando->bindParam(2, $nome);
         $comando->bindParam(3, $preco);

         $comando->execute();
         // var_dump ($comando);
          if ($comando->rowCount() > 0)
            {
       
                echo "<script language=javascript>alert( 'Cadastrado com sucesso!' );</script>";
                
            }
            else
            {
              echo "<script language=javascript>alert( 'Erro ao efetuar cadastro!' );</script>";
    
            }
        }
        catch (PDOException $erro)
        {
        echo "erro: " . $erro->getMessage();   
        }
}
//===============================================Excluir===============================================================
if ($Botao == "Excluir")
{
    try
    {
        $comando=$conexao->prepare("delete from tb_produto where cod_produto = ?");
        $comando->bindParam(1, $codigo);

        if($comando->execute())
        {
            $codigo = null;

            echo "<script>alert('Exclusao feita!')</script>";
            echo ('<meta http-equiv="refresh"content=0;"produtos.php">');
        } 
        else
        {
            throw new PDOException("Erro: Não foi possivel executar o comando SQl");
        }
    }
    catch (PDOException $erro)
    {
        echo "Erro: ".$erro->getMessage();
    }
}

//===============================================Alterar==============================================================-
if ($Botao == "Alterar")
{
    try
    {
        $comando = $conexao->prepare("update tb_produto set nome_produto=?, preco_produto=? where cod_produto=?");
        $comando->bindParam(1, $nome);
        $comando->bindParam(2, $preco);
        $comando->bindParam(3, $codigo);

        if ($comando->execute())
        {
            $codigo= null;
            $nome= null;
            $preco= null;

            echo "<script>alert('Alteracao feita!')</script>";
            echo ('<meta http-equiv="refresh"content=0;"produtos.php">'); 
        }
        else
        {
            throw new PDOException ("Erro: Não foi possivel executar o comando SQL");
        }
    }
    catch(PDOException $erro)
    {
        echo "Erro: ".$erro->getMessage();
    }
}

//===============================================Consulta_por_Bloco====================================================
if ($Botao == "Consultar")
{
    try
    {
        if($codigo == '')
        {
            $matriz= $conexao->prepare("select * from tb_produto");
        }
        else
        {
            $matriz = $conexao->prepare("select * from tb_produto where cod_produto = ?");
            $matriz->bindParam(1, $codigo);
        }

        if($matriz->execute())
        {
            while($linha = $matriz->fetch(PDO::FETCH_OBJ))
            {
                echo 'Codigo: '.$linha->cod_produto.'<br>';
                echo 'Nome: '.$linha->nome_produto.'<br>';
                echo 'Preco: '.$linha->preco_produto.'<br>';
                echo '=========================================='.'<br>';
            }
        }
        else
        {
            echo "<script>alert('Não foi possivel fazer a consulta!')</script>";
            echo ('<meta http-equiv="refresh"content=0;"produtos.php">');
        }
    }
    catch (PDOException $erro)
    {
        echo "Erro: ".$erro->getMessage();
    }
}

?>
                    </div>
                        <div class="card-body">
                   
<!--Fim-----Card central--------------------->
</body>
</html>

