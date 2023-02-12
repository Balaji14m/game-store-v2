<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css">

        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/style.css">

    <!-- Meus Css -->
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link rel="stylesheet" href="../../public/styles/responsive.css">

    <link rel="icon" href="../../public/img/Icone-novo.png">

</head>

<body>


    <?php
        //validate login
        include_once("validate.php");


        require_once('../../src/global.php');
        require_once('../../functions/adm_functions.php');

        header_adm();


        $cart = new Cart();
        $queryAll = $cart->list_all();
       
    
    ?>

    <div class="container">
        <div class="body">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($queryAll as $q){
                            echo ("
                            <tr>
                                <th scope='row'>".$q['game_id']."</th>
                                <td>".$q['game_name']."</td>
                                <td>".$q['game_price']."</td>
                            </tr>
                        ");
                    }
                    
                    ?>
                </tbody>
            </table>


            


        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>