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
    <link rel="stylesheet" href="../../public/styles/register_product.css">
    <link rel="stylesheet" href="../../public/styles/responsive.css">

    <link rel="icon" href="../../public/img/Icone-novo.png">

</head>

<body>


    <?php
        //validate login
        include_once("validate.php");
        
        if(isset($_GET['sucess'])){
            if($_GET['sucess'] == 'true'){
            echo "
                <script>  
                    setTimeout(() => {
                        alert('Produto cadastrado com sucesso!')
                    }, 500)
                </script>";
            }
        }

        require_once('../../functions/adm_functions.php');

        header_adm();
    
    ?>
    <div class="container">
        <div class="body">
            <form action="../../src/controller/register-product.php" enctype="multipart/form-data"  method="post" class="register">
                <h1>Product registration</h1>
                <h2>Register a game in the store.</h2>
    
               
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" name="txtdesc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
        
                    <div class="form-group">
                        <label for="exampleInputEmail1">product value</label>
                        <input type="number" name="txtvalor"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        min="0" step="any" required>
                    </div>
    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity in stock</label>
                        <input type="number" name="txtqtde" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" min="0" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Garena</label>
                        <select required name="slgenero" class="form-control" id="exampleFormControlSelect1">
                                <option value="Aventura">Adventure</option>
                                <option value="Ação">Action</option>
                                <option value="Corrida">Race</option>
                                <option value="Esportes">Sports</option>
                                <option value="Estratégia">Strategy</option>
                                <option value="Indie">Indian</option>
                                <option value="Multiplayer">Multiplayer</option>
                                <option value="RPG">RPG</option>
                                <option value="Simulação">Simulation</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Console</label>
                        <select required name="slconsole" class="form-control" id="exampleFormControlSelect1">
                                <option value="Playstation">Playstation</option>
                                <option value="Xbox">Xbox</option>
                                <option value="Nintendo">Nintendo</option>
                                <option value="Mobile">Mobile</option>
                                <option value="Pc Gamer">Pc Gamer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Photograph</label>

                        <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1 foto" accept="image/*">
                    </div>
    
                
    
                <button type="submit" class="btn btn-primary">Register</button>
    
            </form>
    
    
        </div>
    </div>
 



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>