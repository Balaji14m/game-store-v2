               
<?php
    //códigos htmls ou php que são usados varias vezes ao lado do cliente;
    
    function header_client($path, $notHome){
        echo('     
        

        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
        <!--organizar os elementos em um container-->
        <div class="container">


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">


                <span class="navbar-toggler-icon"></span>

            </button>


            <div class="collapse navbar-collapse" id="navbarSite">


                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>


                    <li class="nav-item">

                        <li class="nav-item dropdown">
                            <a class="nav-link" dropdown="toggle" href="#" data-toggle="dropdown" id="navDrop">Games</a>

                            <div class="dropdown-menu">
                                <h6 class="dropdown-header">Gênero de jogos</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item  search">Adventure</a>
                                <a class="dropdown-item  search">Action</a>
                                <a class="dropdown-item  search">Race</a>
                                <a class="dropdown-item  search">Sports</a>
                                <a class="dropdown-item  search">Strategy</a>
                                <a class="dropdown-item  search">Indian</a>
                                <a class="dropdown-item  search">Multiplayer</a>
                                <a class="dropdown-item  search">RPG</a>
                                <a class="dropdown-item  search">Simulation</a>
                            </div>
                        </li>
                    </li>


                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link" dropdown="toggle" href="#" data-toggle="dropdown" id="navDrop">Consoles</a>

                        <div class="dropdown-menu">

                            <h6 class="dropdown-header">Tipos de Consoles</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item  search" href="#">Playstation</a>
                            <a class="dropdown-item  search" href="#">Xbox</a>
                            <a class="dropdown-item  search" href="#">Nintendo</a>
                            <a class="dropdown-item  search" href="#">Mobile</a>
                            <a class="dropdown-item  search" href="#">Pc Gamer</a>
                        </div>
                    </li>
                    </li>');
                    if(!$notHome){
                        echo ('
                    <li class="nav-item">

                        <a class="nav-link modale" href="cart.php">
                            Cart
                        </a>
                    </li>
                    ');
                    }
              echo
                    '
                </ul>
                
                <div class="reponsive">
                    <form action="'.$path.'src/search.php"class="form-inline ml-0 ml-lg-2">

                        <input class="form-control ml-0 mr-2" name="searchgame" type="search" placeholder="Search in Store">

                        <button class="btn btn-default-color d-none d-md-block" type="Submit">Search</button>
                    </form>
                </div>
                <div class="login">
                <a href="register.php">Login</a>
                </div>

                ';

                if(!$notHome){
                    echo ('
                    <a href="../logout.php">
                        <img class="logout" src="'.$path.'public/img/logout.svg" alt="" width="30p">
                    </a>
                ');
                }
                

            echo("
                    </div>
                </div>
            </div>
            </nav>
                "
            );


    }


    function listProducts($path, $product){
        require_once($path."src/global.php");
        $queryAllProducts = $product;

        foreach($queryAllProducts as $product){
                if (session_status() == PHP_SESSION_NONE) {
                    echo ("
                    <div class='corzinha'>
                        <div class='row'>
            
                            <div class='col-sm'>
                                <img src='".$path."public/".$product['fotoproduto']."' class='img-dentro img-fluid ' alt=''>
                            </div>
                            
                            <div class='col-sm'>
                                <h2 class='titulo-jogos'>".$product['descproduto']."</h2>
                            </div>
            
                            <div class='col-sm'>
                            <div class='login'>
                                <a href='register.php'>BUY</a>
                            </div>   
                            </div>
                        </div>
                    </div>
                
                    ");
                } 
                else{
                    echo("
                    <div class='corzinha'>
                    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'></script>
                    <form action='' method='get' class='submit-form'>    
                        <div class='row'>
            
                            <div class='col-sm'>
                                <img src='".$path."public/".$product['fotoproduto']."' class='img-dentro img-fluid ' alt=''>
                            </div>
                            
                            <div class='col-sm'>
                                <h2 class='titulo-jogos'>".$product['descproduto']."</h2>
                            </div>
            
                            <div class='col-sm'>
                                <p class='preco'>Cart<button type='button' id='".$product['idproduto']."' onclick='reply_click();' class='btn btn-default-color'>$ ".number_format($product['valorproduto'], 2, ',', '.')."</button></p>
                            </div>
                        </div>
                        </form>
                    </div>
                    <script>
                    function reply_click()
                    {
            
                    $('.submit-form').click(function(e){
                        console.log('sdfadf')
                        window.location.href = '../../src/controller/register-cart.php?id='+event.srcElement.id;
                    });
                   }
                    
                    </script>
                
                    ");
                }
        }
    }
    
    function listCart($path, $cart){
        require_once($path."src/global.php");
        $queryAllProducts = $cart;

        foreach($queryAllProducts as $cart){
                echo ("
                <div class='card mb-3 mb-lg-0'>
                <div class='card-body'>
                  <div class='d-flex justify-content-between'>
                    <div class='d-flex flex-row align-items-center'>
                      <div>
                        <img
                          src='../../public/".$cart['game_img']."'
                          class='img-fluid rounded-3' alt='Shopping item' style='width: 200px; margin-right: 30px;'>
                      </div>
                      <div class='ms-3'>
                        <h5>".$cart['game_name']."</h5>
                        <p class='small mb-0'>".$cart['game_id']."</p>
                      </div>
                    </div>
                    <div class='d-flex flex-row align-items-center'>
                      
                      <div style='width: 80px;'>
                        <h5 class='mb-0'>$".$cart['game_price']."</h5>
                      </div>
                      <a href='?id=".$cart['game_id']."' style='color: #cecece;'>delete</a>
                    </div>
                  </div>
                </div>
              </div>
            
                ");
            } 

    }

    function footer_client(){
        echo('
                
        
        ');
    }


    function contact_modal($email=''){
        echo('
                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Preencha o formulário
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Endereço de E-mail</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="'.$email.'"
                                            placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Mensagem</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Digite aqui sua mensagem "></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default-color">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
        ');
    }

    function scripts($path){
        echo('
            <script src="'.$path.'node_modules/jquery/dist/jquery.js"></script>
            <script src="'.$path.'node_modules/popper.js/dist/umd/popper.js"></script>
            <script src="'.$path.'node_modules/bootstrap/dist/js/bootstrap.js"></script>
            <script src="'.$path.'public/js/dropdown.js"></script>
        ');
    }

?>
                