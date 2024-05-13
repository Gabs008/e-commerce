<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastre-se</title>
</head>
<body>
    <nav class=" navbar menu mb-5 ">
        <div class="container">
          <a class="navbar-brand" href="../Index.html">
            <img src="../img/logo.png" alt="" width="80" height="80" >
          </a>
          <h1 class="logo">Carinhos em Fios</h1>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link text-dark" aria-current="page" href="../quemSomos.html">Quem somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="../cadasto.html">Cadastre-se</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="../login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark"href="#">Sair</a>
            </li>
          </ul>
          <a class="" href="./carrinho.html">
            <img src="../img/carrinho-de-compras-rapido.png" alt="" width="30" height="30" >
          </a>
        </div>
      </nav>


      <div class="card mb-5 mt-5 mx-auto" style="max-width: 900px; max-height: 1000px; ">
        <h1 class="logo  mx-auto mt-2">Cadastro</h1>
        <div class="row g-0">
          <div class="col-md-4 mt-3">
            <img src="../img/undraw_undraw_sign_up_ln1s_-1-_ofs1.svg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <form action="../../Back/controlador/cadastroUsuario.php"  method="post" id="cadastroForm">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" aria-describedby="inputGroupPrepend2" required>
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend2" required>
                    <label for="inputPassword5" class="form-label">Senha</label>
                  <input type="password" id="senha" class="form-control" name="senha" aria-describedby="passwordHelpBlock">
                  <label for="inputPassword5" class="form-label">Confirmar Senha</label>
                  <input type="password" id="confirmarSenha" class="form-control" aria-describedby="passwordHelpBlock">
                  <button type="submit" class="btn btn-outline-success mt-2" onclick="validacao()">Cadastre-se</button>
                </form>
            </div>
          </div>
        </div>
      </div>


      <footer class="footer">
        <p>&copy; Carinho em fios</p>
      </footer>

      <script src="../js/validacaoCadastro.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>