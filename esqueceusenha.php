<!DOCTYPE html>
<html>
    <head>
        <title>Esqueceu a Senha</title>
        <link rel="apple-touch-icon" sizes="76x76" href="paineladm1/styles/img/ic_group_48px.png">
        <link rel="icon" type="image/png" href="paineladm1/styles/img/ic_group_48px.png">

        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
        <style>
            body{background-image:url("images/reciclagem/background6.jpg");
                color:white !important;
                background-repeat:no-repeat;
                background-size:cover;
                background-attachment:fixed;}

            
            form{
                    color:black;
                    border:solid white;
                    border-radius:5px;
                    height:275px;
                    width:370px;
                    background-color:white;
                }

            h4  {

                font-size:23px;
                color:white; 
                background: -webkit-gradient(linear, left top, right top, from(#4FC600), to(#388D01)) no-repeat;
                padding:25px; 
                width:300px !important;
                position: relative;
                top: -25%;

                }

            button{
                    color:green;
                    padding:10px 15px;
                    border-radius: 5px;
                    background: none;
                    border:solid green 1px;
                }

            .conteudo{
                    position:relative; 
                    bottom:20%;
            }

            input{
                    height: 40px
            }

        </style>
    </head>
    <body>
        <center><br><br><br><br><br><br><br><br>
        <form method="POST">
            <h4>Recuperar Senha</h4>

            <div class="conteudo">
                <label><b>Email:</b></label>
                <input type="text" name="email" placeholder=" Email..."/><br><br>
                <label><b>CPF:</b></label> 
                <input type="password" name="cpf" placeholder=" 000.000.000."/><br>
                <p class="text-center text-danger">
                    <?php
                    if(isset($_SESSION['loginErroCliente'])){
                        echo $_SESSION['loginErroCliente'];
                        unset($_SESSION['loginErroCliente']);
                    }
                    ?>
                </p>
                <button type="submit">Entrar</button>
            </div>
        </form>
        <center>
    </body>
</html>

<?php
    include "conexao.php";
    
    session_start();
  

    if(isset($_POST['email']) && isset($_POST['cpf'])){
        $Matriz = $conexao->prepare("SELECT * FROM tb_cliente WHERE email_cliente = ? and cpf_cliente = ? LIMIT 1");
        $Matriz-> bindParam(1, $_POST['email']);
        $Matriz-> bindParam(2, $_POST['cpf']);
        $Matriz->execute();
        $Linha = $Matriz->fetch(PDO::FETCH_OBJ);

        if($Matriz->rowCount() > 0)
        {
            $_SESSION['logincliente'] = true;
            echo '<script>window.location.href = "usuario.php";</script>';
        }
        else{
            $_SESSION['logincliente'] = false;
            $_SESSION['loginErroCliente'] = "Usuario ou Senha Inválida";
            echo '<script>window.location.href = "esqueceusenha.php";</script>';
        }
    }
?>