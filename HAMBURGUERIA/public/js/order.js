function action(ev) {
   ev.preventDefault()
    window.alert('Seu Pedido Foi Reservado Com Sucesso!\n Será Enviado Cerca de 30 - 60 Minutos');
}

const btn = document.getElementById('btn-address')

btn.addEventListener('click', (ev) => {
    action(ev)
})