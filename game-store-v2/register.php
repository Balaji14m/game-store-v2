<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessão</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/style.css">

    <!-- Meus Css -->
    <link rel="stylesheet" href="public/styles/main.css">
    <link rel="stylesheet" href="public/styles/register.css">
    <link rel="stylesheet" href="public/styles/responsive.css">

    <link rel="icon" href="public/img/Icone-novo.png">
    
</head>

<body>

    <?php
        if(isset($_GET['sucess'])){
            if($_GET['sucess'] == 'false'){
            echo "
                <script>  
                    setTimeout(() => {
                        alert('Login ou senha incorretos, Tente novamente.')
                    }, 500)
                </script>";
            }
        }

        require_once('functions/client_functions.php');
        $path='';
        header_client('', true);
        
        
    ?>

    <div class="body">
        <div class="container">

            
            <form class="register" action="src/login_validation.php" method="post">
                <h1>Log In</h1>
                <h3>with an existing maets account</h3>

               


                <div class="form-group">
                    <label for="exampleInputEmail1">Email </label>

                    <div class="form-flex">
                        <input type="email" name="txtemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        required>

                        <select name="perfil" class="form-control" id="exampleFormControlSelect1">
                            <option value="2">Cliente</option>
                            <option value="1">Admin</option>
                        </select>

                    </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="txtsenha" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="action">
                    <button type="submit" class="btn ">Log In</button>
                    <div class="back">
                        <img src="public/img/back.png" alt="voltar" width="25px"> <a href="index.php">To go Back</a>
                    </div>
                </div>

            </form>
        </div>

    </div>


    <div class="trasicion">

    </div>

    <!-- Footer -->
    <?php
        contact_modal();
        scripts($path)
    ?>

</body>

</html>