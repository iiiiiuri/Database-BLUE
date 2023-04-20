<?php
    //Verifica se o submit (Botão Login) do formulário de Login foi pressionado
        if(isset($_POST['submit']))
        {
                
    
            include_once('connect.php'); //Faz a conexão com o banco de dados
    
            //Instancia as variaveis dos campos 
            $email = $_POST['email']; 
            $senha = $_POST['senha'];
    
            //Executa a Query sql de consulta (verifica se o usuario está no banco de dados.)
            $sql = "SELECT * FROM `dados` WHERE `email` = '$email' and `senha` = '$senha'";
            $result = $conn->query($sql);
           
            //Caso apareça algum registro, permite o login
            if(mysqli_num_rows($result)==1){
    
    
        
               header('Location: explorer.php');
         
            }
           
    
            
            //caso contrario, volta para a pagina de login
            else{
    
           echo "<script>
             function incorreto()
             {
             alert('Email ou Senha incorretos, tente novamente!!');
          }
             incorreto()
             </script>";
             
    }
    
    
    
    }
    
    
    
    
    ?>
<!DOCTYPE html>
<html lang="pt-Br" >
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DB-BLUE-Login</title>
    </head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet/stylesLogin.css">
    <body>
        <script src="js/script.js"></script>
        <form id = "form" action="index.php" method = "POST" >
            <div class = main >
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
                    <img src="docs/Padlock.svg" class = "padlock"></img>
                    <div class = "div_login">
                        <h3>
                            Welcome!
                        </h3>
                        
                        <label for="email"></label>
                        <input type="text" id="email" name = "email" placeholder = "Email" required>
                        <label for="senha" ></label>
                        <input type="password" id="senha" name="senha" placeholder = "Password"  required>
                        
                        <div class = "boxBotoes">
                            <input type="submit" name = "submit" value="Login"  id = "login" onclick>
                            <a href="signup.php"><input type="button" value="Sign-Up" id = "signup"></a>
                            </div>  
                       
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
