<?php
  include_once "../persistencia/conexao.php";
      $email = $_POST["email"];
      $senha = $_POST["senha"];


try {
  
    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($sql);



    if(mysqli_num_rows($result)>0){
        header('location: ../../Front/view/Index.html');
    }
    else{
        $errorMessage = "Login incorreto! Verifique suas credenciais.";
        $shouldRedirect = true;
    }
    
    
    if ($shouldRedirect) {
        echo "<script>alert('$errorMessage');</script>";
        header('refresh: 0; url=../../Front/view/login.php'); 
    }
    

    if (!$result) {
      throw new Exception("Erro ao executar a consulta: " . $conexao->error);
    }
    } catch (Exception $e) {

   echo "Ocorreu um erro: " . $e->getMessage();
}


if ($conexao) {
  $conexao->close();
}
    

// if(isset($_POST))
// {
//     include_once "../persistencia/conexao.php";
//     $email = $_POST["email"];
//     $senha = $_POST["senha"];

//     $sql = "SELECT * FROM usuario where email = $email and senha = $senha";
//     $result = $conexao->query($sql);
// }
// else
// {
//     header('login.php');
// }




