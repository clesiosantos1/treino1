<?php
session_start();

include_once("conexao.php");

$sql =  "SELECT * FROM  usuarios ORDER BY id DESC";


$result = $conexao ->query($sql);

/* print_r($result) */


/* print_r($_SESSION); */

//verifica se existe o emau«il e senha caso sim loga

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
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
</head>

<style>
    .imagem{
        width:5em;
    }
    .container{
        margin-left:84em;
        margin-top:-5em;
        position:absolute;
    }

    .cor{
        border-radius: 20px; 
        position:absolute;
    }
    .cor:hover{
        background-color: rgba(234, 234, 234, 0.727);
        
    }
    svg{
        color:white;
    }
 
    #afaste{
        margin-left: 4px;
    }
</style>
<body>


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
                        <a class="nav-link active"  aria-current="page" href="index.php"> Cadastrar- cliente<svg id="afaste" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
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

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link"  href="sair.php " tabindex="-1" aria-disabled="true"><svg  onclick="(confirm('Confirma'));" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
</svg></a>
                    </li>
                </ul>
            </div>
        </div>



    </nav>
    
         
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php

$a = @$_POST['cor'];
$b = "white"; //cor inicial

?>

<style>
    body{
background-color: <?php switch ($a) {case "": echo $b; break; default: echo $a; break;}?>;
    }
.cor{
    width: 7em;
    height: 25px;
    background-color: white;
    color:red;
border:none;
}
</style>
</head>
<body>
    <div class="container">
         <form method="POST" action="editar.php">
        <input type="color" name="cor" id="">
        <input class="cor" type="submit" value="cor do fundo">
    </form>  
    </div>
 
</body>
</html>



    <div class="">
    <table class="table">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">nome</th>
        <th scope="col">senha</th>
        <th scope="col">email</th>
        <th scope="col">filiação</th>
        <th scope="col">número do BI</th>
        <th scope="col">Residência</th>
        <th scope="col">natural de</th>
        <th scope="col">sexo</th>
        <th scope="col">estado civil</th>
        <th scope="col">data</th>
        <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($user_data =  mysqli_fetch_assoc($result))
    {
    echo "<tr>";
       echo "<td>". $user_data['id']. "</td>";
      echo "<td>".$user_data['nome']. "</td>";
      echo "<td>". $user_data['senha']. "</td>";
      echo "<td>". $user_data['email']. "</td>";
      echo "<td>". $user_data['filiação']. "</td>";
      echo "<td>". $user_data['número_do_bi']. "</td>";
      echo "<td>". $user_data['Residência']. "</td>";
      echo "<td>". $user_data['nat']. "</td>";
      echo "<td>". $user_data['sexo']. "</td>";
      echo "<td>". $user_data['estado_civil']. "</td>";
      echo "<td>". $user_data['data']. "</td>";
      echo "<td>  
      
      <a class='btn btn-primary btn-sm' href='ronomear.php?id=$user_data[id]'>  
      <svg  xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 1'>
  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
</svg>
</a>
      </td>";
      echo "<td>  
      <a class='btn btn-danger btn-sm' href=''> 
      <svg  xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
      <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z' />
    </svg>
    </a>


      </td>";
       echo "<tr>";
     
    }
    ?>
  </tbody>

</table>
    </div>
</body>
</html>