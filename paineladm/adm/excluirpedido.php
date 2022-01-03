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
                    <a class="navbar-brand" > Pedidos </a>
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

if(isset($_POST["cod_pedido"])){$pedido=$_POST["cod_pedido"];};
if(isset($_POST["botao"])){$botao=$_POST["botao"];};

if($botao=='excluir')
{
    try
    {
        $Comando=$conexao->prepare("delete from tb_pedido where cod_pedido=?");
        $Comando->BindParam(1,$pedido);

        if($Comando->execute())
        {
        	if($Comando->rowCount()>0)
        	{
        		echo "<script> alert('Exclusão feita com sucesso !!!!')</script>";
        		echo ('<meta http-equiv="refresh"content=0;"pedidos.php">');
        	}
        	else
        	{
        		echo "Erro ao excluir";
        	}
        }
        else
        {
        	throw new PDOException("Erro: Não foi possivel executar sql");
        	
        }
    }


catch (PDOException $erro)
{
	echo "Erro:". $erro->getMessage();
}


}

//--- Consulta ---//

if($botao=='consultar')
{
    try
    {
                if($pedido == '')
                {
                    $comando = $conexao->prepare("select * from tb_pedido");
                }
                else
                {
                    $comando = $conexao->prepare("select * from tb_pedido where cod_pedido = ? ");
                    $comando->bindParam(1, $pedido);
                }
        if($comando->execute())
        {
            while($linha = $comando->fetch(PDO::FETCH_OBJ))
            {   
                echo 'Cod pedido: ' . $linha->cod_pedido. '<br>'.'<br>';
                echo 'Codigo do funcionario: ' . $linha->cod_funcionario . '<br>'.'<br>';
                echo 'CPF Cliente: ' . $linha->cpf_cliente . '<br>'.'<br>';
                echo 'Codigo produto: ' . $linha->cod_produto . '<br>'.'<br>';
                echo 'Peso: ' . $linha->peso_pedido . '<br>'.'<br>';
                echo 'Preço produtos: ' . $linha->preco_produto . '<br>'.'<br>';
                echo 'Pontos recebidos: ' . $linha->pontos_cliente . '<br>'.'<br>';
                echo 'Nome produto: ' . $linha->nome_produto . '<br>'.'<br>';
                echo '============================================================================================ <br><br>';
            };
        }
        	else
        	{
        		echo "Erro ao consultar";
        	}
    }
        
    catch (PDOException $erro)
    {
	echo "Erro:". $erro->getMessage();
    }
        
}

?>
                   </div>
                        <div class="card-body">
                   
<!--Fim-----Card central--------------------->
</body>
</html>