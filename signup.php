<?php
  //Código para verificar se o usuario ou email já se encontra na base de dados.
  
  
  if(isset($_POST['submit'])){
  
  //Variáveis para pegar os valores dos campos de input.
  
  $email = $_POST['email'];
  $user= $_POST['user'];
  $senha = $_POST['senha'];
  
  //Chamando a variavel 'conn' para fazer as Querys e inserir ou consultar dados do BD.
  include_once('connect.php');
  
  
  //Criando a primeira verificação e aplicando a função "Cadastro" caso o Email já se encontre 
  //na base de dados.
  
  $verf = mysqli_query($conn, "SELECT * FROM `dados` WHERE `email` OR `usuario` = '$email' OR '$user'");
  if(mysqli_num_rows($verf) >=1 ){
  
      echo "<script>
      function cadastrado()
      {
      alert('Email Já cadastrado.');
      }
      cadastrado()
      </script>";
      
  
  //Criando a segunda verificação e aplicando a função "nCadastrado" caso o Email não se encontre 
  //na base de dados.
  }else{
          $result = mysqli_query($conn,"INSERT INTO `dados`(`email`, `usuario`,`senha`) VALUES ('$email', '$user','$senha') ");
          echo "<script>
          function nCadastrado()
          {
          alert('Usuário Cadastrado com Sucesso!.');
       }
          nCadastrado()
          </script>";
      }
      
     
  }
  ?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB-BLUE-SignUp</title>
  </head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="stylesheet/stylesCad.css"  />
  <body>
    <form action="signup.php" method = "POST">
      <div class = main>
      <div class = "div_left">
        <div class = "imagem">
          <div class="titulo">
            <h1>DB-</h1>
            <h2>BLUE</h2>
          </div>
          <img src="docs/server-animate.svg"></img>
        </div>
      </div>
      <div class= "div_right">
        <img src="docs/Padlock.svg" class = "padlock">
        <div class = "div_login">
          <h3>Create Account:</h3>
          <label for="email"></label>
          <input onclick = "disable()" oninput = "emailValidate() " type="text" id="email" name = "email" placeholder = "Email" required > 
          <span class = "error" id = "erroEmail">Enter a valid email address.</span>
          <label for="user"></label>
          <input onclick = "disable()" oninput="userValidate()" type="text" id="user" name="user" placeholder = "User" required required minlength="4" maxlength="10"> 
          <span class = "error"  id = "erroUser">Enter a user with 4 characters.</span>
          <label for="senha"></label>
          <input onclick = "disable()" oninput="senhaValidate()" type="password" id="senha" name="senha" placeholder = "Password" required minlength="8"> 
          <span class = "error"  id = "erroPass">Enter an 8 digit password. </span>
          <div>
            <input type="submit" name = "submit" value="SignUp"  id = "signup">
            <a href="index.php"><input type="button" value="Login" id = "login"></a>
          </div>
        </div>
      </div>
    </form>
  </body>
  <script src="Js/script.js"></script>
</html>
