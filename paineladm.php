<?php
//esse primeiro if e session_start vao em todas as paginas restritras ao adm.
session_start();
if (!isset($_SESSION['loginadm']))
{
    header("location: loginadm.html");
    session_destroy();
    
}
if (isset($_GET["deslogar"])){
    session_destroy();
    header("location: loginadm.html");
}
//if (isset($_GET["consultar"]))
//print_r($_SESSION);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Painel ADM</title>
</head>
<body>
    <h1> Painel do ADM  <a href=?deslogar>Sair.</h1><br><br>
    <h1>  <a href=funcionarioadm.php>Funcionarios.</h1><br>
    <h1>  <a href=clientesadm.php>Clientes.</h1><br>
    <h1> <a href=produtosadm.php>Produtos.</h1><br>
    <h1> <a href=pedidosadm.php>Pedidos.</h1><br>
    <h1> <a href=contato.php?contato>contato</h1><br>
</body>


</html>



