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
      <hr class="my-4">
      <div class="album py-5 bg-light">
        <div class="itens-back">
          <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?PHP
                    // ARRAY ULTIDIMENCIONAL
                    $itens = array(['image'=>'img/placa - zotac.jpg', 'nome'=>'Zotac NVIDIA GeForce RTX 3060 Ti', 'preco'=>'7.058,00'],
                                    ['image'=>'img/placa - asus.jpg', 'nome'=>'Asus NVIDIA GeForce GTX 1650', 'preco'=>'2.823,00'],
                                    ['image'=>'img/placamae - MSI.jpg', 'nome'=>'Placa-mãe MSI MPG Z490 GAMING CARBON', 'preco'=>'2.705,76'],
                                    ['image'=>'img/gabinete - risemode.jpg', 'nome'=>'Gabinete Rise Mode Glass 06', 'preco'=>'1.243,00'],
                                    ['image'=>'img/placamae - asrock.jpg', 'nome'=>'Placa-Mãe ASRock B450M Steel Legend', 'preco'=>'1.478,00'],
                                    ['image'=>'img/teclado - hyperx.jpg', 'nome'=>'Teclado Mecânico Gamer HyperX Alloy Origins', 'preco'=>'1.035,00'],
                                    ['image'=>'img/processador - i9.jpg', 'nome'=>'Processador Intel Core i9-9900K', 'preco'=>'3.059,00'],
                                    ['image'=>'img/monitor gamer - samsung.jpg', 'nome'=>'Monitor Gamer Samsung Odyssey G3', 'preco'=>'2.761,00'],
                                    ['image'=>'img/fonte - asus.jpg', 'nome'=>'Fonte Asus ROG-STRIX-750G', 'preco'=>'1.588,00'],
                    );
                    

                    
                    foreach ($itens as $key => $value){
                    ?>

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="<?php echo $value['image']?>"/>
                                    <div class="card-body">
                                    <p class="card-text"><?php echo $value['nome']?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                        <a href="?adicionar=<?php echo $key ?>" type="button" class="btn btn-sm btn-outline-secondary">Comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                        }
                        ?>

            </div>
          </div>
        </div>
      </div>    
             
      <div class="modal modal-tour position-static d-block py-5" tabindex="-1" role="dialog" id="modalTour">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-6 shadow">
            <div class="modal-body p-5">
                <h2 class="fw-bold mb-0">Seu carrinho</h2>

                <ul class="d-grid gap-4 my-5 list-unstyled">

                <li class="d-flex gap-4">
                    <svg class="bi text-muted flex-shrink-0" width="48" height="48"><use xlink:href="#grid-fill"/></svg>
                    <div>
                        <h2 class="mb-0">Item</h2>

                        <?php 
                        //ADD CARRINHO
                        if(isset($_GET['adicionar'])){
                            $idProduto = (int) $_GET['adicionar'];
                            if(isset($itens[$idProduto])){
                                if(isset($_SESSION['carrinho'][$idProduto])){
                                    $_SESSION['carrinho'][$idProduto]['quantidade']++;
                                }else {
                                    $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1, 'nome'=>$itens[$idProduto]['nome'],
                                    'preco'=>$itens[$idProduto]['preco']); 
                                }
                                // echo '<script>alert("o item foi adicionado ao carrinho.");</script>';
                            }
                        }
                            ?>
                        <div class="carrinho ">
                            <div class="produtos">
                                    <?php 
                                        //Listando os itens
                                        foreach ($_SESSION['carrinho'] as $key => $value){
                                    ?>
                                    <div class="itens">
                                        <div class="nome_preco">
                                            <h4><?php echo $value['nome']?></h4>
                                        </div>
                                        <a href="?remove=<?php echo $key ?>"><button type="button" class="btn btn-lg btn-primary mt-1 w-50" data-bs-dismiss="modal">Remover</button></a>
                                    </div>
                            </div>
                        </div>
                        <?php 
                            }
                        ?>
                        <?php 
                            //Remover do carrinho
                            if(isset($_GET['remove'][$idProduto])) {
                                $idProduto = (int) $_GET['remover'];
                                if(isset($_SESSION['carrinho'][$idProduto]))
                                {
                                    unset($_SESSION['carrinho'][$idProduto]);
                                }
                            }

                            //Esviziar Carrinho
                            if($_GET['finallizar']){
                                unset($_SESSION['carinho']);
                            }
                        ?>
                    </div>
                </li>

                <li class="d-flex gap-4">
                    <svg class="bi text-warning flex-shrink-0" width="48" height="48"><use xlink:href="#bookmark-star"/></svg>
                    <div>
                    <h2 class="mb-0">Subtotal</h2>
                    <h4 class="mb-0"> R$
                    <?php
                        //Subtotal da compra
                        foreach ($_SESSION['carrinho'] as $key => $value){
                            $sub += $value['preco']*$value['quantidade'];
                        }
                        echo number_format($sub,3,'.',',');
                    ?></h4>
                    </div>
                </li>
                
                <li class="d-flex gap-4">
                    <svg class="bi text-primary flex-shrink-0" width="48" height="48"><use xlink:href="#film"/></svg>
                    <div>
                    <h2 class="mb-0">Total</h2>
                    <h4 class="mb-0"> R$
                    <?php
                        //Total da compra
                        foreach ($_SESSION['carrinho'] as $key => $value){
                            $total += $value['preco']*$value['quantidade'];
                        }
                        echo number_format($total,3,'.',',');
                    ?></h4>
                    </div>
                </li>

                </ul>
                <a href="?finalizar=<?php echo $key ?>"><button type="button" class="btn btn-lg btn-primary mt-5 w-100"
                 data-bs-dismiss="modal" onclick="alert('Compra Realizada')">Finallizar Compra</button></a>
            </div>
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
