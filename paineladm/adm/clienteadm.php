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
                    <a class="navbar-brand" > Funcionario </a>
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
include "conexao.php";



if(isset($_POST["cpf"])){$cpf=$_POST["cpf"];};
if(isset($_POST["nome"])){$nome=$_POST["nome"];};
if(isset($_POST["data_nasc"])){$data_nasc=$_POST["data_nasc"];};
if(isset($_POST["sexo"])){$sexo=$_POST["sexo"];};
if(isset($_POST["residencial"])){$residencial=$_POST["residencial"];};
if(isset($_POST["celular"])){$celular=$_POST["celular"];};
if(isset($_POST["cep"])){$cep=$_POST["cep"];};
if(isset($_POST["cidade"])){$cidade=$_POST["cidade"];};
if(isset($_POST["bairro"])){$bairro=$_POST["bairro"];};
if(isset($_POST["endereco"])){$endereco=$_POST["endereco"];};
if(isset($_POST["numero"])){$numero=$_POST["numero"];};
if(isset($_POST["pontos"])){$botao=$_POST["pontos"];};
if(isset($_POST["complemento"])){$complemento=$_POST["complemento"];};
if(isset($_POST["email"])){$email=$_POST["email"];};
if(isset($_POST["senha"])){$senha=$_POST["senha"];};
if(isset($_POST["botao"])){$botao=$_POST["botao"];};
//$senhamd=md5($senha);


if($botao == "consulta")
{
    try
    {
        if($cpf == '')
        {
            $comando = $conexao->prepare("select * from tb_cliente");
        }
        else
        {
            $comando = $conexao->prepare("select * from tb_cliente where cpf_cliente = ? ");
            $comando->bindParam(1, $cpf);
        }
        if($comando->execute())
        {
            while($linha = $comando->fetch(PDO::FETCH_OBJ))
            {   
                echo 'Nome: ' . $linha->nome_cliente . '<br>'.'<br>';
                echo 'CPF: ' . $linha->cpf_cliente . '<br>'.'<br>';
                echo 'Total de pontos: ' . $linha->pontos_cliente . '<br>'.'<br>';
                echo 'Data de nascimento: ' . $linha->data_nasc_cliente . '<br>'.'<br>';
                echo 'sexo: ' . $linha->sexo_cliente . '<br>'.'<br>';
                echo 'Telefone residencial: ' . $linha->residencial_cliente . '<br>'.'<br>';
                echo 'Celular: ' . $linha->celular_cliente . '<br>'.'<br>';
                echo 'Cep: ' . $linha->cep_cliente . '<br>'.'<br>';
                echo 'Cidade: ' . $linha->cidade_cliente . '<br>'.'<br>';
                echo 'Bairro: ' . $linha->bairro_cliente . '<br>'.'<br>';
                echo 'Endereço: ' . $linha->endereco_cliente . '<br>'.'<br>';
                echo 'Numero: ' . $linha->numero_cliente . '<br>'.'<br>';
                echo 'Complemento: ' . $linha->complemento_cliente . '<br>'.'<br>';
                echo 'Email: ' . $linha->email_cliente . '<br>'.'<br>';
                
                echo '============================================================================================ <br><br>';
            };
        }
        else
        {
        throw new PDOException("Erro: Não foi possivel executar o comando");

        };
    }
    catch (PDOException $erro)
    {
        echo "Erro; ". $erro->getMessage();
    }
    
};
    if($botao == "Apagar")
    {   
        try
        {
                    $comando = $conexao->prepare("delete from tb_cliente where cpf_cliente = ? ");
                    $comando->bindParam(1, $cpf);
                
            if($comando->execute())
            {
                echo "Cliente deletado ";
            }
            else
            {
            throw new PDOException("Erro: Não foi possivel executar o comando");
            };
        }
        catch (PDOException $erro)
        {
            echo "Erro: ". $erro->getMessage();
        };
        
    };
    if($botao == "alterar")
    {
        try
        {
            $comando =$conexao->prepare("update tb_cliente set residencial_cliente=?, celular_cliente=?, cep_cliente=?,
             cidade_cliente=?, bairro_cliente=?, endereco_cliente=?, numero_cliente=?, complemento_cliente=?, email_cliente=?" );
             $comando->bindParam(1, $residencial);
             $comando->bindParam(2, $celular);
             $comando->bindParam(3, $cep);
             $comando->bindParam(4, $cidade);
             $comando->bindParam(5, $bairro);
             $comando->bindParam(6, $endereco);
             $comando->bindParam(7, $numero);
             $comando->bindParam(8, $complemento);
             $comando->bindParam(9, $email);
             if ( $comando->execute())
             {
             $residencial = null;
             $celular = null;
             $cep = null;
             $cidade = null;
             $bairro = null;
             $endereco = null;
             $numero = null;
             $complemento = null;
             $email = null;

                
                echo "<script language=javascript>alert( ' Dados alterados!' );</script>";
                echo('<meta http-equiv="refresh" content=0;"clientemenu.php">');
             
             }
             else
             {
             echo "<script language=javascript>alert( 'Erro ao enviar!' );</script>";
         
             }
     
         }
        
         catch (PDOException $erro)
         {
             echo "erro: " . $erro->getMessage();
         
         }
               
    }

?>
        </div>
                        <div class="card-body">
                   
<!--Fim-----Card central--------------------->
</body>
</html>
