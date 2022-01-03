<?php
include "conexao.php";

// Essa rotina abaixo é referente a informaçoes vindas do index.html

if(isset($_POST["nome"])){$nome=$_POST["nome"];};
if(isset($_POST["email"])){$email=$_POST["email"];};
if(isset($_POST["assunto"])){$assunto=$_POST["assunto"];};
if(isset($_POST["mensagem"])){$mensagem=$_POST["mensagem"];};

try
{
    $comando=$conexao->prepare("insert into tb_contato (nome_contato, email_contato, assunto_contato, mensagem_contato) values (?, ?, ?, ?)");
    $comando->bindParam(1, $nome);
    $comando->bindParam(2, $email);
    $comando->bindParam(3, $assunto);
    $comando->bindParam(4, $mensagem);
   

    $comando->execute();
   // var_dump ($comando);
    if ($comando->rowCount() > 0)
    {
        header("location: index.html");
        echo "<script language=javascript>alert( 'Mensagem enviada!' );</script>";
        
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


?>







?>