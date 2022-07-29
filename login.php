
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    input:hover{
        border: 1px solid red;
        transition: 0s;
    }

    .container{
        margin-top: 7em;
        width:30em;
        border: 1px solid rgba(234, 234, 234, 0.727);
        padding:10px;
        background-color:rgba(234, 234, 234, 0.727);
    }
    svg{
 font-size:40px;
    }

    .submit{
        width:100%;
        background-color:red;
        color:white;
        height: 3em;
        border: 1px solid rgba(234, 234, 234, 0.727);
        border-radius: 5px;
    }
</style>
<body>
    
</body>
</html>



<div class="container">
        <form method="POST" action="testlogin.php">
            <h1>Cadastro de funcionários</h1>
            <h2>Admin: <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-incognito" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m4.736 1.968-.892 3.269-.014.058C2.113 5.568 1 6.006 1 6.5 1 7.328 4.134 8 8 8s7-.672 7-1.5c0-.494-1.113-.932-2.83-1.205a1.032 1.032 0 0 0-.014-.058l-.892-3.27c-.146-.533-.698-.849-1.239-.734C9.411 1.363 8.62 1.5 8 1.5c-.62 0-1.411-.136-2.025-.267-.541-.115-1.093.2-1.239.735Zm.015 3.867a.25.25 0 0 1 .274-.224c.9.092 1.91.143 2.975.143a29.58 29.58 0 0 0 2.975-.143.25.25 0 0 1 .05.498c-.918.093-1.944.145-3.025.145s-2.107-.052-3.025-.145a.25.25 0 0 1-.224-.274ZM3.5 10h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Zm-1.5.5c0-.175.03-.344.085-.5H2a.5.5 0 0 1 0-1h3.5a1.5 1.5 0 0 1 1.488 1.312 3.5 3.5 0 0 1 2.024 0A1.5 1.5 0 0 1 10.5 9H14a.5.5 0 0 1 0 1h-.085c.055.156.085.325.085.5v1a2.5 2.5 0 0 1-5 0v-.14l-.21-.07a2.5 2.5 0 0 0-1.58 0l-.21.07v.14a2.5 2.5 0 0 1-5 0v-1Zm8.5-.5h2a.5.5 0 0 1 .5.5v1a1.5 1.5 0 0 1-3 0v-1a.5.5 0 0 1 .5-.5Z"/>
</svg></h2>
            <div class="mb-2">
                <input type="email" class="form-control" id="exampleInputPassword1" name="email"
             placeholder="E-mail">
            </div>
        <div class="mb-3">
            <div class="mb-2">
             <label for="exampleInputPassword1" class="form-label"></label>
        <input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="password">
     </div>
                                
<button type="submit" class="submit" name="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>


         
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php

$a = @$_POST['cor'];
$b = "#66CDAA"; //cor inicial

?>

<style>
    body{
background-color: <?php switch ($a) {case "": echo $b; break; default: echo $a; break;}?>;
    }
</style>
</head>
<body>
    <form method="POST" action="login.php">
        <input type="color" name="cor" id="">
        <input type="submit" value="alterar">
    </form>
</body>
</html>