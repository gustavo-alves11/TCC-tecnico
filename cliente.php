<html>
    <head>
        <title>index</title>
        <script src="jquery.2.1.3.min" type="text/javascript"></script>
        <?php include("cadastrocliente.php");?>
    </head>
    <body>

        <label>CPF:</label><br>
        <input type="number" id="cpf_cliente"/>
        <br>

        <span>nome:</span><br>
        <input type="text" id="nome_cliente"/>
        <br>

        <span>Data de nascimento:</span><br>
        <input type="date" id="data_nasc_cliente"/>
        <br>

        <span>Sexo:</span><br>
        <input type="text" id="sexo_cliente"/>
        <br>

        <span>Cep:</span><br>
        <input type="number" id="cep_cliente"/>
        <br>

        <span>Cidade:</span><br>
        <input type="text" id="cidade_cliente"/>
        <br>

        <span>Bairro:</span><br>
        <input type="text" id="bairro_cliente"/>
        <br>

        <span>endereco:</span><br>
        <input type="text" id="endereco_cliente"/>
        <br>

        <span>numero:</span><br>
        <input type="number" id="numero_cliente"/>
        <br>

        <span>complemento:</span><br>
        <input type="text" id="complemento_cliente"/>
        <br>

        <span>Email:</span><br>
        <input type="email" id="email_cliente"/>
        
        <br>

        <span>Celular:</span><br>
        <input type="number" id="fone_cel_cliente"/>
        <br>

        <span>Tefone fixo:</span><br>
        <input type="number" id="fone_res_cliente"/>
        <br>

        <span>senha:</span><br>
        <input type="password" id="senha_cliente">
        <br>


        <button id="enviar"> Enviar</button>
        <br>
        <br>
        <div id="mensagens">  </div>
    </body>
</html>  