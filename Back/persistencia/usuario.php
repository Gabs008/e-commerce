<?php
// require "conexao.php";
// class Usuario{

//     public function cadastro($nome, $email, $senha){

//          $connection;

//          function __construct($connection) {
//             $this->connection = $connection;
//         }

//          function createUser($nome, $email, $senha) {
//             $sql = "INSERT INTO users (nome, email, senha) VALUES (null,?, ?, ?)";
//             $stmt = $this->connection->prepare($sql);
//             $stmt->bind_param('sss', $nome, $email, $senha);
//             $stmt->execute();

//             if ($stmt->error) {
//                 echo "Error creating user: " . $stmt->error;
//                 return false;
//             }
            
//             echo 'Usuário inserido com sucesso!';
//             return true;
//         }
//     }

