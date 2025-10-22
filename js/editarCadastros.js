function editarCadastrosPeso(id){
    fnReload()

     const url = new URL(window.location); // pega a URL atual

    url.searchParams.set('id', id); // adiciona ou substitui o parâmetro ?id=123

    // Atualiza a URL no navegador sem recarregar a página
    window.history.pushState({}, '', url);
}

function fnReload(){
    let botao = document.getElementById("fechar_botao")

    botao.addEventListener('click', function(){
        const url = new URL(window.Location)

        url.searchParameters.delete('id');

        window.history.pushState({}, '', url);
        
        window.location.reload()
        
    })
}