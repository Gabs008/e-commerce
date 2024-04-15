function validacao(){
    const email = document.getElementById('email').value.trim();
    const senha = document.getElementById('senha').value.trim();

    console.log(email + senha)

    let mensagemErro = ''; 
    //.trim() retira os espaços em branco 
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

    // Exibe mensagem de erro ou envia o formulário
    if (mensagemErro === '') {
        alert('Cadastro realizado com sucesso!');
    } else {
        alert(mensagemErro);
    }
}