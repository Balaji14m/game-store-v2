<?php 

class Cart{

    private $game_id;
    private $user_id;
    private $game_price;
    private $game_name;
    private $game_img;
  



    public function getgame_id(){
        return $this->game_id;
    } 
    public function getgame_price(){
        return $this->game_price;
    }
    public function getgame_name(){
        return $this->game_name;
    }
    public function getuser_id(){
        return $this->user_id;
    }
    public function getgame_img(){
        return $this->game_img;
    }
    public function setgame_id($g_id){
        $this->game_id = $g_id;
    }
    public function setgame_price($g_price){
        $this->game_price = $g_price;
    }
    public function setgame_name($g_name){
        $this->game_name = $g_name;
    }
    public function setuser_id($u_id){
        $this->user_id = $u_id;
    }
    public function setgame_img($game_img){
        $this->game_img = $game_img;
    }


    public function showTest($car){
         echo $car->getgame_id . $car->getgame_name;
    }

    public function register($cart){
        $connection = Connection::getConnection();
        $queryInsert = "INSERT INTO `cart` (game_id,user_id,game_name,game_img,game_price)
         VALUES ('".$cart->getgame_id()."','".$cart->getuser_id()."','".$cart->getgame_name()."','".$cart->getgame_img()."','".$cart->getgame_price()."')";
        $connection->exec($queryInsert);
         return "inserted";
    }
    public function list($id){
        $connection = Connection::getConnection();

        $querySelect = "SELECT * FROM `cart` WHERE user_id = $id ";

        $result = $connection->query($querySelect);

        $list = $result->fetchAll();


        return $list;   
    }
    public function list_all(){
        $connection = Connection::getConnection();

        $querySelect = "SELECT * FROM `cart`";

        $result = $connection->query($querySelect);

        $list = $result->fetchAll();


        return $list;   
    }

    public function delete($cart){
            $connection = Connection::getConnection();
            $queryUpdate = "DELETE FROM `cart` WHERE game_id = '".$cart->getgame_id()."'";
            $connection->exec($queryUpdate);
            return 'Deleted';
        }


}




 ?>