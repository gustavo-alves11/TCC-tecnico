<html>
<head>
    <meta charset="utf-8">
    <title>Login funcionario</title>
</head>
<body>
    <h1>  <a href="loginfuncionario.html" >Tentar novamente.</a></h1>
</body>
</html>




<?php
session_start();
if (isset($_SESSION['loginfuncionario']))
{
   header("location: painelfuncionario.php");
    die();
}
include "conexao.php";


if(isset($_POST["login"])){$login=$_POST["login"];};
if(isset($_POST["senha"])){$senha=$_POST["senha"];};
$senhamd = md5($senha);

var_dump($senhamd);

$comando=$conexao->prepare("select * from tb_funcionario where cpf_funcionario = ? AND senha_funcionario = ? ");
$comando->bindParam(1, $login);
$comando->bindParam(2, $senhamd);

$comando->execute();
//var_dump ($comando);
$linha=$comando->fetchAll();

if($comando->rowCount() > 0)
{
    $_SESSION['loginfuncionario'] = true;
    header("location: painelfuncionario.php");
}
else
{
   echo "Login ou senha incorretos.";
   
}
//print_r($_SESSION);
?>
