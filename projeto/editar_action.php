<?php
require 'config.php';

$id = filter_input(INPUT_POST,'id');
$id = filter_input(INPUT_POST,'nome');
$id = filter_input(INPUT_POST,'e-mail', FILTER_VALIDATE_EMAIL);

if($id && $nome && $email){
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email WHERE id = :id");
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->bindValue(':id',$id);
    $sql->ececute();

    header("location: index.php");
    exit;
}else{
    //header("Location: index.php");
    //exit;
    echo "aqui";
}


