
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
                    <a class="navbar-brand" > Cupons </a>
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



if(isset($_POST["cod_cupom"])){$cod=$_POST["cod_cupom"];};
if(isset($_POST["nome_cupom"])){$nome=$_POST["nome_cupom"];};
if(isset($_POST["preco_cupom"])){$preco=$_POST["preco_cupom"];};
if(isset($_POST["botao"])){$botao=$_POST["botao"];};


if($botao == "cadastrar")
{
    try
    {
        $comando=$conexao->prepare("insert into tb_cupom (cod_cupom, nome_cupom, preco_cupom ) values (?, ?, ?)");
        $comando->bindParam(1, $cod);
        $comando->bindParam(2, $nome);
        $comando->bindParam(3, $preco);

        $comando->execute();
            // var_dump ($comando);
        if ($comando->rowCount() > 0)
        {
        echo "<script language=javascript>alert( ' Cadastrado!' );</script>";
        
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
if($botao == "consultar")
{
    try
    {
        if($cod == '')
        {
            $comando = $conexao->prepare("select * from tb_cupom");
           
        }
        else
        {
            $comando = $conexao->prepare("select * from tb_cupom where cod_cupom = ? ");
            $comando->bindParam(1, $cod);
        }
        if($comando->execute())
        {
            while($linha = $comando->fetch(PDO::FETCH_OBJ))
            {   
                echo 'Codigo: ' . $linha->cod_cupom . '<br>'.'<br>';
                echo 'Nome: ' . $linha->nome_cupom . '<br>'.'<br>';
                echo 'Preço: ' . $linha->preco_cupom . '<br>'.'<br>';
                
                
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
    if($botao == "excluir")
    {   
        try
        {
                if($cod == ' ')
                {
                $comando =$conexao->prepare("delete from tb_cupom");
                }
                else
                {
                    $comando = $conexao->prepare("delete from tb_cupom where cod_cupom = ? ");
                    $comando->bindParam(1, $cod);
                }
            if($comando->execute())
            {
                echo "cupom deletado ";
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
            $comando =$conexao->prepare("update tb_cupom set nome_cupom=?, preco_cupom=? where cod_cupom=?" );
            $comando->bindParam(1, $nome);
            $comando->bindParam(2, $preco);
            $comando->bindParam(3, $cod);
             if ( $comando->execute())
             {
             $nome = null;
             $preco = null;
             $cod = null;
                
                echo "<script language=javascript>alert( ' Dados alterados!' );</script>";
                echo('<meta http-equiv="refresh" content=0;"cuponsadm.html">');
             
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
