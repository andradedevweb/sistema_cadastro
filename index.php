<?php

    include 'database.php';

    //armazena as informações obtidas do formulario em variaveis
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    //insere os valores obtidos dos formularios no banco de dados
    if(isset($_POST['submit_env'])){
        $insert->execute(array($name, $email, $phone));
    }
    if(isset($_POST['submit_del'])){
        $delete->execute(array($name, $email, $phone));
    }

?>
<!--Codigo HTML-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema cadastro</title>
    <style>
    /*Estilo simples com CSS*/
    *{
        font-family:courier,arial,helvetica;
        color: white;
    }
    body{
        background-color: black;
    }
    .botao{
        margin-top: 5%;
        margin-bottom: 5%;
        border: solid 1px white;
        color: white;
        background-color: #526e75;
        transition: background-color 0.5s ease, color 0.5s ease, transform 0.5s ease;
    }
    .botao:hover{
        background-color: #526e75;
        color: white;
        transform: scale(1.2)
    }
    .box{
        margin-top: 5%;
        margin-left: 30%;
        border-radius: 12%;
        background-color: #526e75;
        height: 48%;
        width: 30%;
        align-items: center;
        text-align: center;
        padding: 5%;
    }
    .input{
        color: black;
        outline: none;
        margin-top: 1%;
        border-radius: 5%;
        border: 0;
    }
    </style>
    <!--Código js para mandar um alerta ao atualizar os dados-->
    <script>
        document.getElementsByName('submit_env').addEventListener("click", function(){
            window.alert("Enviado com sucesso!")
        });

        document.getElementsByName('submit_del').addEventListener("click", function(){
            window.alert("Deletado com sucesso!")
        });
        
    </script>
</head>
<body>
    <div class="box">
    <h3>SISTEMA DE CADASTRO</h3>
    <hr>
    <form method="post">
        <label>NOME:</label>
        <input type="text" name="name" class="input"><br>
        <label>EMAIL:</label>
        <input type="text" name="email" class="input"><br>
        <label>PHONE:</label>
        <input type="text" name="phone" class="input"><br>
        <input type="submit" value="ENVIAR" name="submit_env" class="botao">
        <input type="submit" value="DELETAR" name="submit_del" class="botao"><br>
    </form>
    <div>

    <?php

    //Inserindo os dados no corpo HTML
    $select->execute();

    $info = $select->fetchAll();

    foreach ($info as $key => $value){
        echo 'OS: '.$value['os'].'<br>';
        echo 'Nome: '.$value['nome'].'<br>';
        echo 'Email: '.$value['email'].'<br>';
        echo 'Telefone: '.$value['telefone'].'<br>';
        echo '<hr>';
    }

?>
    
</body>
</html>
