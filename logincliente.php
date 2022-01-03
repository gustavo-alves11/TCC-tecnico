<html>
<head>
    <meta charset="utf-8">
    <title>Login ADM</title>
</head>
<body>
    <h1>  <a href="login.html" >Tentar novamente.</a></h1>
    
</body>
</html>



<?php
session_start();
if (isset($_SESSION['logincliente']))
{
    header("location: usuario.php");
    die();
}
include "conexao.php";


if(isset($_POST["email"])){$email=$_POST["email"];};
if(isset($_POST["senha"])){$senha=$_POST["senha"];};
$senhamd = md5($senha);
//var_dump($senhamd);

$comando=$conexao->prepare("select * from tb_cliente where email_cliente = ? and senha_cliente = ?");
$comando->bindParam(1, $email);
$comando->bindParam(2, $senhamd);
$comando->execute();

if($comando->rowCount() > 0)
{
    $_SESSION['logincliente'] = true;
    header("location: usuario.php");
    
}
if($comando->execute())
{
while($Linha = $comando->fetch(PDO::FETCH_OBJ))
    {
    $_SESSION['nomeCliente'] = $Linha->nome_cliente;
    $_SESSION['cpfCliente'] = $Linha->cpf_cliente;
    $_SESSION['emailCliente'] = $Linha->email_cliente;
    $_SESSION['celularCliente'] = $Linha->celular_cliente;
    $_SESSION['pontosCliente'] = $Linha->pontos_cliente;
    }
}
else
{
   echo "Login ou senha incorretos.<br>";
   
}
//print_r($_SESSION);


?>

