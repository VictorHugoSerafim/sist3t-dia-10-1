<?php
if( $_POST ){
   $mysqli_connection = new MySQLi('uyu7j8yohcwo35j3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'sk219jft4qfiwql9', 'sk219jft4qfiwql9', 'ppmnzoters1z67jj');
   if($mysqli_connection->connect_error){
      echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
   }else{
      echo "Conectado!";
   }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./js/bootstrap.bundle.min.js">
      <link rel="stylesheet" href="./js/popper.min.js">

      <link rel="stylesheet" href="./css/main.css">
      <link rel="stylesheet" href="./css/login.css">
      <link rel="stylesheet" href="./js/mobile-navbar.js">
      <title>Login/Cadastro</title>
   </head>

   <body>

      <!-- Menu -->
      <div class="container">
         <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
               <li class="nav-item"><a href="itens.php" class="nav-link active" aria-current="page">Itens</a></li>
               <li class="nav-item"><a href="index.php" class="nav-link">Cadastro</a></li>
               <li class="nav-item"><a href="pagamento.php" class="nav-link">Formas de Pagar</a></li>
            </ul>
         </header>
         </div> 

         <hr class="my-4">

      <div class="wrapper">
         <div class="title-text">
            <div class="title signup">
               Cadastrar
            </div>
         </div>
            <div class="form-inner">
               <form method="POST" action="index.php" class="signup">
                  <div class="field">
                     <input type="text" name="nome" placeholder="Nome" required>
                  </div>
                  <div class="field">
                     <input type="text" name="email" placeholder="E-mail" required>
                     </div>
                     <div class="field">
                        <input type="password" placeholder="Senha" required>
                     </div>
                     <div class="field">
                        <input type="text" name="telefone" placeholder="Telefone" required>
                     </div>
                     <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="btnCadUsuario" value="Criar">
                  </div>
               </form>
            </div>
         </div>
      </div>

      <hr class="my-4">
         <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; Um rodapé aleatório, só pra falar que tem</p>
            <ul class="list-inline">
               <li class="list-inline-item"><a href="http://www.batata.com">Não clique aqui</a></li>
               <li class="list-inline-item"><a href="https://po.ta.to/">Aqui também não</a></li>
            </ul>
         </footer>

      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login") ;
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
            signupBtn.click();
            return false;
         });
      </script>

   </body>
</html>
