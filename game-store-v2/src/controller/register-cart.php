<?php
session_start();
require_once '../global.php';

try{
     header("Location: ../../private/client/cart.php");


    $product = new Product;
    $list=$product->list_one($_GET['id']);
   
    $cart = new Cart();
    foreach($list as $l){
        $cart->setgame_id($l['idproduto']);
        $cart->setuser_id($_SESSION['id']);
        $cart->setgame_name($l['descproduto']);
        $cart->setgame_price($l['valorproduto']);
        $cart->setgame_img($l['fotoproduto']);
        $cart->register($cart);
    }
     
 
  
}

catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>