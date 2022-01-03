<?php
session_start();
//if (isset($_GET["consultar"]))
//print_r($_SESSION);
include "conexao.php";
if(isset($_POST["nome"])){$nome=$_POST["nome"];};
if(isset($_POST["codfunc"])){$codfunc=$_POST["codfunc"];};
if(isset($_POST["cpf"])){$cpf=$_POST["cpf"];};
if(isset($_POST["peso"])){$peso=$_POST["peso"];};
if(isset($_POST["botao"])){$botao=$_POST["botao"];};


if($botao == "finalizar")
{   
    try
    {
            
            $comando = $conexao->prepare("select * from tb_produto where nome_produto = ? ");
            $comando->bindParam(1, $nome);
            if($comando->execute())
            {
                while($linha = $comando->fetch(PDO::FETCH_OBJ))
                {   
                    $_SESSION['nomeproduto']= $linha->nome_produto;
                    $_SESSION['codproduto']=$linha->cod_produto;
                    $_SESSION['precoproduto']=$linha->preco_produto;
                  
                }
            }
            else
        {
        throw new PDOException("Erro: Não foi possivel executar o comando");

        };    
           
            //if(isset($_SESSION['precoproduto']))
            //{
            
           //
            
           // echo "deu certo parabens";    
            
       
    }
    catch (PDOException $erro)
    {
        echo "Erro; ". $erro->getMessage();
    }
}
$pontos1 = $_SESSION['precoproduto'];
$pontos = $pontos1*$peso;

if($botao == "finalizar")    

{
    try
    {

        $comando = $conexao->prepare("update tb_cliente set pontos_cliente=?+pontos_cliente where cpf_cliente=?");
        $comando->bindParam(1, $pontos);
        $comando->bindParam(2, $cpf);
        $comando->execute();
        {
           $comando =$conexao->prepare("insert into tb_pedido (cod_funcionario, cpf_cliente, cod_produto, peso_pedido, preco_produto, pontos_cliente, nome_produto)
           values (?, ?, ?, ?, ?, ?, ?)");
            
           $comando->bindParam(1, $codfunc );
           $comando->bindParam(2, $cpf);
           $comando->bindParam(3, $_SESSION['codproduto']);
           $comando->bindParam(4, $peso);
           $comando->bindParam(5, $_SESSION['precoproduto']);
           $comando->bindParam(6, $pontos);
           $comando->bindParam(7, $_SESSION['nomeproduto']);
            $comando->execute();
            echo "<script language=javascript>alert( 'Concluido' );</script>";
            echo ('<meta http-equiv="refresh"content=0;"painelfuncionario.php">');
        }

    }
    
    catch (PDOException $erro)
    {
        echo "Erro; ". $erro->getmessage();
    }
}

?>