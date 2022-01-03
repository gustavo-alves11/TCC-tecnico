<?php
session_start();
include "conexao.php";

if(isset($_POST["cpf_cliente"])){$cpf=$_POST["cpf_cliente"];};
if(isset($_POST["nome_cliente"])){$nome=$_POST["nome_cliente"];};
if(isset($_POST["data_nasc_cliente"])){$nascimento=$_POST["data_nasc_cliente"];};
if(isset($_POST["sexo_cliente"])){$sexo=$_POST["sexo_cliente"];};
if(isset($_POST["cep_cliente"])){$cep=$_POST["cep_cliente"];};
if(isset($_POST["cidade_cliente"])){$cidade=$_POST["cidade_cliente"];};
if(isset($_POST["bairro_cliente"])){$bairro=$_POST["bairro_cliente"];};
if(isset($_POST["endereco_cliente"])){$endereco=$_POST["endereco_cliente"];};
if(isset($_POST["numero_cliente"])){$numero=$_POST["numero_cliente"];};
if(isset($_POST["complemento_cliente"])){$complemento=$_POST["complemento_cliente"];};
if(isset($_POST["email_cliente"])){$email=$_POST["email_cliente"];};
if(isset($_POST["celular_cliente"])){$celular=$_POST["celular_cliente"];};
if(isset($_POST["residencial_cliente"])){$residencial=$_POST["residencial_cliente"];};
if(isset($_POST["senha_cliente"])){$senha=$_POST["senha_cliente"];};
$senhamd=md5($senha);

try
{
    $comando=$conexao->prepare("insert into tb_cliente (cpf_cliente, nome_cliente, data_nasc_cliente, sexo_cliente, cep_cliente, cidade_cliente, bairro_cliente, endereco_cliente, numero_cliente, complemento_cliente, email_cliente, celular_cliente, residencial_cliente, senha_cliente) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $comando->bindParam(1, $cpf);
    $comando->bindParam(2, $nome);
    $comando->bindParam(3, $nascimento);
    $comando->bindParam(4, $sexo);
    $comando->bindParam(5, $cep);
    $comando->bindParam(6, $cidade);
    $comando->bindParam(7, $bairro);
    $comando->bindParam(8, $endereco);
    $comando->bindParam(9, $numero);
    $comando->bindParam(10, $complemento);
    $comando->bindParam(11, $email);
    $comando->bindParam(12, $celular);
    $comando->bindParam(13, $residencial);
    $comando->bindParam(14, $senhamd);

    $comando->execute();
   // var_dump ($comando);
    if ($comando->rowCount() > 0)
    {
       
        echo "<script language=javascript>alert( 'Cadastradro com sucesso!' );</script>";
      
        
        header("location: login.html");
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


?>





    
   