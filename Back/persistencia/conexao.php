<?php
$dbHost = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'loja';



try {
    
    $conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

    
    if ($conexao->connect_errno) {
        throw new Exception("Failed to connect to database: " . $conexao->connect_error);
    }

} catch (Exception $e) {
    
    echo "Error: " . $e->getMessage();
}






// $conexao = new mysqli($dbHost,$dbUserName,$dbPassword,$dbName);

// if($conexao->connect_errno)
// {
//     echo "Erro";
// }
// else
// {
//     echo "Conexão efetuada com sucesso";
// }




// /**
//  *
//  */
// class conexao
// {
//     private $link;

//     function __construct()
//     {
//         $this->conectar();
//     }

//     /**
//      * @return false|mysqli|null
//      * @throws Exception
//      */
//     public function conectar()
//     {
//         $this->link = null; // Initialize link to null

//         try {
//             $this->link = new mysqli('127.0.0.1', 'root', '', 'loja');
//             $this->link->set_charset('utf8');
//         } catch (mysqli_sql_exception $e) {
//             // Handle connection error
//             $errorMessage = "Failed to connect to MySQL: " . $e->getMessage();
//             error_log($errorMessage); // Log error message
//             throw new Exception($errorMessage); // Rethrow the exception
//         }

//         return $this->link;
//     }

//     public function getConnection()
//     {
//         return $this->link;
//     }

//     public function desconectar($conexao)
//     {
//         mysqli_close($conexao);
//     }

//     $conexao = new conexao();

//     $link = $conexao->conectar();

//     if ($link) {
//         echo "Conectado ao banco de dados MySQL com sucesso!";
//     } else {
//         echo "Falha ao conectar ao banco de dados MySQL.";
//     }
   
// }



