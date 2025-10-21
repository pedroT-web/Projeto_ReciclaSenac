function editarCadastrosPeso(id){
     const url = new URL(window.location); // pega a URL atual

    url.searchParams.set('id', id); // adiciona ou substitui o parâmetro ?id=123

    // Atualiza a URL no navegador sem recarregar a página
    window.history.pushState({}, '', url);
}