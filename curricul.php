<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Currículo</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <style>
        
   .curriculo{
    margin-left: 35%;
    width: 400px;
    padding: 30px;
    border:1px solid #ccc;
    background-color: #00DDFF;
}
.curriculo p{
    width: 50%;
    font-size: 1.6em;
    background-color: #FFFFE0;
    margin-left: 25%;
}
.field{
    width: 100%;
    margin: 17px 0;

}
.field label, 
.field span{
    padding-left: 10px;
    font-size: 1.2em;
    display: block;
    width: 100%;
}
.radiobox label{
    width: auto;
    display: inline-block;
}
input[type=text],
input[type=email],
textarea{
    width: 100%;
    padding-left: 10px;
    height: 30px;
    line-height: 30px;
    border-radius: 15px;
    border: 1px solid #ccc;
    outline: none;
    background-color: white;
}
input#nao{
    margin-left: 30px;
}
textarea{
    line-height: 20px;
    padding: 10px;
    height: 90px;
    resize: none;
}
input[type=submit]{
    display: block;
    background-color: #ccc;
    height: 35px;
    border: none;
    outline: 0;
    cursor: pointer;
    width: 100px;
    margin: 0 auto;
    text-align: center;
    border-radius: 15px;
    background-color: #FFFFE0;
}

body{

    text-align: center;
    

}

#love{
    background-color:yellowgreen ;
 
}
#ove{
     background-color:yellowgreen ;
   

}


    </style>


</head>
<body>
    <div id="ove">
            <h1>Faça seu currículo agora!!</h1>

</div>
</div>


  
</div>


    <form class="curriculo" method="POST"> 
        <p> Currículo:</p>
        
        <div class="field">
            <label for="nome">Seu Nome:</label>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome*" required>
        </div>
        
        <div class="field">
            <label for="data">Data de Nascimento:</label>
            <input type="date" id="data" name="data">
        </div>

        <div class="field">
            <label for="telefone">Seu Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="Digite seu Telefone">
        </div>

        <div class="field">
            <label for="email">Seu E-Mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu E-Mail*" required>
        </div>        
        <div class="field radiobox">
            <span>Você já trabalhou alguma vez?</span>
            <input type="radio" name="novidades" id="sim" value="sim" checked><label for="sim">Sim</label>
            <input type="radio" name="novidades" id="nao" value="nao"><label for="nao">Não</label>
        </div>
             <div class="field">
            <label for="mensagem">Escreva livremente sobre as suas habilidades como profissional:</label>
            <textarea name="mensagem" id="mensagem" placeholder="Mensagem*" required></textarea> 
        </div>

        <input type="submit" name="acao" value="Enviar"> 
    </form>
<div>

<div id="love">
            <h1>O seus dados vão aparecer logo abaixo!!</h1>

</div>

</body>
</html>

<?php
    if (isset($_POST["acao"])){
        $nome=$_POST["nome"];
        $telefone=$_POST["telefone"];
        $email=$_POST["email"];
        $radio=$_POST["novidades"];
        $msg=$_POST["mensagem"];

        echo "<p>Querido(a), ".$nome."</p>";
        echo "<p>Seu email é: ".$email."</p>";
        echo "<p>Seu telefone é: ".$telefone."</p>";
        if ($radio=="sim"){
            echo "<p>Eu já trabalhei</p>";
        }elseif ($radio=="nao") {
            echo "<p>Eu nunca trabalhei</p>";
        }
        echo "<p>Sua mensagem é:<br/>".$msg."</p>";
    }
?>


