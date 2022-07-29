


<?php

if(isset($_POST['submit'])){
    include_once('conexao.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $filiação = $_POST['filiação'];
    $número_do_bi = $_POST['número_do_BI'];
    $Residência = $_POST['Residência'];
    $natural = $_POST['nat'];
    $sexo = $_POST['sexo'];
    $estado_civil = $_POST['estado_civil'];
    $data = $_POST['data'];


/*     var_dump($_REQUEST); */


$resultado = mysqli_query($conexao," INSERT INTO  usuarios (nome,senha,email,filiação,número_do_bi,Residência,nat,sexo,estado_civil,data) VALUES ('$nome','$senha','$email','$filiação','$número_do_bi','$Residência','$natural','$sexo','$estado_civil','$data') ");

header('location: index.php');


}

?>
