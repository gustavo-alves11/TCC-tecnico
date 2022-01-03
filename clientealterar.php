<?php

include "conexao.php";
if(isset($_POST["nome"])){$nome=$_POST["nome"];}
if(isset($_POST["email"])){$email=$_POST["email"];}
if(isset($_POST["celular"])){$celular=$_POST["celular"];}
if(isset($_POST["senha"])){$senha=$_POST["senha"];}
$senhamd=md5($senha);

try
    {
        $Comando=$conexao->prepare("UPDATE tb_cliente SET email_cliente=?, celular_cliente=?, senha_cliente=? WHERE nome_cliente=?");

        $Comando->BindParam(1,$email);
        $Comando->BindParam(2,$celular);
        $Comando->BindParam(3,$senhamd);
        $Comando->BindParam(4,$nome);
        
        if($Comando->execute())
        {
        	if($Comando->rowCount()>0)
        	{
        		echo "<script> alert('Alteração feita com sucesso')</script>";
        		echo ('<meta http-equiv="refresh"content=0;"clientealterar.html">');
        	}
        	else
        	{
        		echo "Erro ao tentar alterar";
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

?>