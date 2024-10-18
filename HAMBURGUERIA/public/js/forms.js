const form = document.getElementById('form')

function verifyContent(ev) {
    console.log('Cheguei na função');

    ev.preventDefault();

    const name = document.getElementById('txtName');
    const email = document.getElementById('txtEmail');
    const telefone = document.getElementById('txtPhone');
    const problema = document.getElementById('selecao');

    if (!name.value) {
        alert('Por favor, insira o nome');
        name.focus();
        return false
    }
    else if (!email.value) {
        alert('Por favor, insira seu email');
        email.focus();
        return false
    }
    else if (!telefone.value) {
        alert('Por favor, insira seu telefone');
        telefone.focus();
        return false // Correção: mudar para telefone
    }
    else if (!problema.value) {
        alert('Por favor, insira o motivo de contato');
        problema.focus();
        return false
    }
    
    // Se tudo estiver OK, o formulário pode ser enviado
    form.submit(); // Envia o formulário manualmente
}

form.addEventListener('submit', verifyContent)

