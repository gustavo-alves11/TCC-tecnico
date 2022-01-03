<html>
<head>
    <meta charset="utf-8">
    <title>Login ADM</title>
</head>
<body>
    <h1>  <a href="loginadm.html" >Tentar novamente.</a></h1>
</body>
</html>




<?php
session_start();
if (isset($_SESSION['loginadm']))
{
   header("location: paineladm.php");
    die();
}
include "conexao.php";


if(isset($_POST["login"])){$login=$_POST["login"];};
if(isset($_POST["senha"])){$senha=$_POST["senha"];};
$senhamd = md5($senha);

//var_dump($senhamd);

$comando=$conexao->prepare("SELECT * FROM tb_adm where login_adm = ? AND senha_adm = ? ");
$comando->bindParam(1, $login);
$comando->bindParam(2, $senhamd);

$comando->execute();
//var_dump ($comando);
$linha=$comando->fetchAll();

if($comando->rowCount() > 0)
{
    $_SESSION['loginadm'] = true;
    header("location: paineladm.php");
}
else
{
   echo "Login ou senha incorretos.";
   
}
//print_r($_SESSION);
?>
