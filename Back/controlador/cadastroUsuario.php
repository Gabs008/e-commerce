<?php
require "../persistencia/conexao.php";

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$result = mysqli_query($conexao, "  INSERT INTO usuario(nome,email,senha) VALUES ('$nome','$email','$senha') ");




// $resposta = $usuarioCadastro->createUser($nome, $email, $senha);
// $resposta ==true?"Verdadeiro":"Falso";
// echo $resposta;


