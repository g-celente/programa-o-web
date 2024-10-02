function validarForm () {
    const name = document.getElementById['name'];
    const telefone = document.getElementById['telefone'];
    const email = document.getElementById['email'];


    if (!name.value || !telefone.value || !email.value) {
        alert('Por Favor, insira todos os Campos');
        return false
    }

    return true
}