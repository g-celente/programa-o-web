function validateForm (event) {

    const rendimentoMensal = document.getElementById('rendimentoMensal')
    const dependentes = document.getElementById('dependentes')
    const pensao = document.getElementById('pensao')
    const deducao = document.getElementById('deducao')
    
    if (!rendimentoMensal.value) {
        alert('Por favor, insira o rendimento mensal')
        rendimentoMensal.focus()
        event.preventDefault();
        return false
    }
    else if (!dependentes.value) {
        alert('Por favor, insira o número de dependentes')
        dependentes.focus()
        event.preventDefault();
        return false
    }
    else if (!pensao.value) {
        alert('Por Favor, insira o valor da pensão') 
        pensao.focus()
        event.preventDefault();
        return false
    }
    else if (!deducao.value) {
        alert("Por Favor, insira o valor da dedução")
        deducao.focus()
        event.preventDefault();
        return false
    }

    return true
}