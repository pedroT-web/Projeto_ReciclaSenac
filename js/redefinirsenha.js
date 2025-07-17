function abrirRedefinicao(){
    const redefinir = document.getElementById('redefinicao_senha');
    redefinir.classList.add('abrir')

    redefinir.addEventListener('click', (e) => {
    if (e.target.id == 'fechar_botao' || e.target.id == 'redefinicao_senha'){
        redefinir.classList.remove('abrir')
    }
})
}   

