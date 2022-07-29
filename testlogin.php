<?php
session_start();
?>



<?php
/* print_r($_REQUEST); */

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //acessa
        include_once("conexao.php");

        $email = $_POST['email'];
        $senha = $_POST['senha'];

       /*  print_r("email: " . $email);
        print_r("<br>");
        print_r("senha: " . $senha); */

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        
        $result  = $conexao->query($sql);


/*     print_r($result); */

    if(mysqli_num_rows($result) < 1)
    {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('location: login.php');
}
else{
    print_r('existe');
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('location: index.php');
}

     }
     else
     
  {
    header('location: login.php');
 }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="login.php">voltar</a>
</body>
</html>