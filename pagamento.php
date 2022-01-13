<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="css/custom.css" />
        <title>Sistema de 3  telas</title>
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

      <!-- Corpo -->
      <div class="container">
      <hr class="my-4">
        <div class="row g-5">
          <div class="align-items-center">
            
              <div class="d-flex justify-content-center dm-12">
                <h4 class="ad-flex justify-content-center dm-12">Formas de pagamento</h4>
              </div> 

    
              <form method="POST" action="CadPag.php">

                <div class="my-3">
                  <div class="form-check">
                    <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                    <label class="form-check-label" for="credit">Credito</label>
                  </div>
                  <div class="form-check">
                    <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                    <label class="form-check-label" for="debit">Debito</label>
                  </div>
                </div>

                <div class="row gy-3">
                  <div class="col-md-6">
                    <label for="cc-name" class="form-label">Nome no cartão</label>
                    <input type="text" class="form-control" name="nomeCartao" id="cc-name" placeholder="" required>
                    <small class="text-muted">Nome completo conforme exibido no cartão</small>
                  </div>

                  <div class="col-md-6">
                    <label for="cc-number" class="form-label">Número do Cartão</label>
                    <input type="text" class="form-control" name="numeroCartao" id="cc-number" placeholder="" required>
                  </div>

                  <div class="col-md-3">
                    <label for="cc-expiration" class="form-label">Vencimento</label>
                    <input type="text" class="form-control" name="vencimento" id="cc-expiration" placeholder="" required>
                  </div>

                  <div class="col-md-3">
                    <label for="cc-cvv" class="form-label">CVC</label>
                    <input type="text" class="form-control" name="cvc" id="cc-cvc" placeholder="" required>
                  </div>
      
                  <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" name="btnCadDados" value="Guardar dados" class="btn btn-primary">
                  </div>
                  
              </form>
          </div>
        </div>  
      </div>

            <!-- footer -->

              <hr class="my-4">
                <footer class="my-5 pt-5 text-muted text-center text-small">
                  <p class="mb-1">&copy; Um rodapé aleatório, só pra falar que tem</p>
                  <ul class="list-inline">
                    <li class="list-inline-item"><a href="http://www.batata.com">Não clique aqui</a></li>
                    <li class="list-inline-item"><a href="https://po.ta.to/">Aqui também não</a></li>
                  </ul>
              </footer>
          </div>

      <script src="js/validator.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" 
      crossorigin="anonymous">
      </script>
      <script src="js/bootstrap.bundle.min.js" 
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
      crossorigin="anonymous">
      </script>

    </body>
</html>
