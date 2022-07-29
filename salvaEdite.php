<?php



if(isset($_POST['update'])){

    include_once("conexao.php");
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $filiação = $_POST['filiação'];
    $número_do_bi = $_POST['número_do_bi'];
    $Residência = $_POST['Residência'];
    $natural = $_POST['nat'];
    $sexo = $_POST['sexo'];
    $estado_civil = $$_POST['estado_civil'];
    $data =$_POST['data'];

    $sqlUpdate = "UPDATE usuarios SET nome='$nome',senha='$senha',email='$email', filiação= '$filiação', número_do_bi= '$número_do_bi', Residência='$Residência',nat='$natural',sexo='$sexo',estado_civil = '$estado_civil', data = '$data' WHERE id = '$id'";


    $result = $conexao->query($sqlUpdate);
}
header('location: editar.php');
?>