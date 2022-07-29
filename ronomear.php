
<?php

if(!empty($_GET['id'])){
include_once('conexao.php');
$id = $_GET['id'];


$sqlSelect = "SELECT * FROM usuarios WHERE id= $id";

$ressult= $conexao->query($sqlSelect);

 if($ressult -> num_rows > 0){
    while($user_data = mysqli_fetch_assoc($ressult)){
            $nome = $user_data['nome'];
    $senha = $user_data['senha'];
    $email = $user_data['email'];
    $filiação = $user_data['filiação'];
    $número_do_bi = $user_data['número_do_bi'];
    $Residência = $user_data['Residência'];
    $natural =$user_data['nat'];
    $sexo = $user_data['sexo'];
    $estado_civil = $user_data['estado_civil'];
    $data = $user_data['data'];
    }


 } else{
     header('location: editar.php');
 }
/*     var_dump($_REQUEST); */
}
else{
    header('location: editar.php');
}

?>





<?php
session_start();

/* print_r($_SESSION); */

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))

{
    header('location: login.php');
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
}
$logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilo.css">
</head>

<style>
    svg{
        color:white;
    }
 input{
     background-color:red;
 }
</style>

<body>


    <!-- navbar 2 -->

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        

        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img class="imagem"
                    src="imagem/customer_person_people_man_user_client_1629.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">cadastro de cliente<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editar.php">Listar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="sair.php " tabindex="-1" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- formulario -->
    <div class="container">
        <form method="POST" action="salvaEdite.php">
            <h1>Alteração dos Dados</h1>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp"
                    placeholder="nome completo" value="<?php echo $nome?>">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="exampleInputPassword1" name="senha"
                    placeholder="senha" value="<?php echo $senha?>">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputPassword1" name="email"
                    placeholder="Email" value="<?php echo $email?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleInputPassword1" name="filiação"
                    placeholder="Filiação Ex: pai e mãe" value="<?php echo $filiação?>">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="exampleInputPassword1" name="número_do_bi"
                    placeholder="número do BI" value="<?php echo $número_do_bi?>">
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <input type="text" class="form-control" id="exampleInputPassword1" name="Residência"
                        placeholder="Residência: " value="<?php echo $Residência?>">
                </div>
                <div class="mb-3">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputPassword1" name="nat"
                            placeholder="natural de" value="<?php echo $natural?>">
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            sexo:
                            <select class="form-control" name="sexo" id="" value="<?php echo $sexo?>">
                                <option value="masculino">masculino</option>
                                <option value="femenio">femenio</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputPassword1" name="estado_civil"
                                placeholder="estado civil" value="<?php echo $estado_civil?>">

                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Data de nascimento</label>
                                    <input type="date" class="form-control" name="data" id="exampleInputPassword1" value="<?php echo $data?>">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <button type="update" name="update" class="btn btn-danger">Submit</button>
        </form>
    </div>

<script>
    alert('seja bem vindo ao Marques serviços')
</script>
</body>

</html>