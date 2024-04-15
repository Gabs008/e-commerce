
function validacao(){

  const nome = document.getElementById('nome').value.trim();
  const email = document.getElementById('email').value.trim();
  const senha = document.getElementById('senha').value.trim();
  const confirmarSenha = document.getElementById('confirmarSenha').value.trim();

  console.log(nome + email + senha)

  let mensagemErro = ''; // Variável para armazenar mensagens de erro

  // Validação do nome
  if (nome === '') {
    mensagemErro += 'Preencha o campo nome.\n';
  } else if (!/^[a-zA-Z ]+$/.test(nome)) {
    mensagemErro += 'O nome só pode conter letras e espaços.\n';
  }

  // Validação do email
  if (email === '') {
    mensagemErro += 'Preencha o campo email.\n';
  } else if (!/^[\w._%+-]+@[\w.-]+\.[a-zA-Z]{2,}$/.test(email)) {
    mensagemErro += 'Formato de email inválido.\n';
  }

  // Validação da senha
  if (senha === '') {
    mensagemErro += 'Preencha o campo senha.\n';
  } else if (senha.length < 6) {
    mensagemErro += 'A senha deve ter pelo menos 6 caracteres.\n';
  }

  // Validação da confirmação de senha
  if (confirmarSenha === '') {
    mensagemErro += 'Preencha o campo confirmar senha.\n';
  } else if (confirmarSenha !== senha) {
    mensagemErro += 'As senhas devem ser iguais.\n';
  }

  // Exibe mensagem de erro ou envia o formulário
  if (mensagemErro === '') {
    alert('Cadastro realizado com sucesso!');
    // Enviar o formulário para o servidor (opcional)
  } else {
    alert(mensagemErro);
  }

}
 
