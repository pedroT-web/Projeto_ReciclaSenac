function fnVisualisarSenha() {
    const inputSenha = document.getElementById("input_senha")
    const botaoOlho = document.getElementById("botaoOlho")

    if (inputSenha.type == "password") {
        inputSenha.type = "text"
        botaoOlho.classList.remove("bi-eye")
        botaoOlho.classList.add("bi-eye-slash")
    } else {
        inputSenha.type = "password"
        botaoOlho.classList.remove("bi-eye-slash")
        botaoOlho.classList.add("bi-eye")
    }
}

function fnVisualisarSenhaAtual() {
    const inputSenhaAtual = document.getElementById("inputSenhaAtual")
    const botaoOlho = document.getElementById("botaoSenhaAtualOlho")

    if (inputSenhaAtual.type == "password") {
        inputSenhaAtual.type = "text"
        botaoOlho.classList.remove("bi-eye")
        botaoOlho.classList.add("bi-eye-slash")
    } else {
        inputSenhaAtual.type = "password"
        botaoOlho.classList.remove("bi-eye-slash")
        botaoOlho.classList.add("bi-eye")
    }
}

function fnVisualisarConfirmarSenha() {
    const inputConfirmarSenha = document.getElementById("input_confirmar_senha")
    const botaoOlho = document.getElementById("conf_senha_olho")

    if (inputConfirmarSenha.type == "password") {
        inputConfirmarSenha.type = "text"
        botaoOlho.classList.remove("bi-eye")
        botaoOlho.classList.add("bi-eye-slash")
    } else {
        inputConfirmarSenha.type = "password"
        botaoOlho.classList.remove("bi-eye-slash")
        botaoOlho.classList.add("bi-eye")
    }
}

function fnVisualisarNovaSenha() {
    const inputNovaSenha = document.getElementById("input_nova_senha")
    const botaoOlho = document.getElementById("nova_senha_olho")

    if (inputNovaSenha.type == "password") {
        inputNovaSenha.type = "text"
        botaoOlho.classList.remove("bi-eye")
        botaoOlho.classList.add("bi-eye-slash")

    } else {
        inputNovaSenha.type = "password"
        botaoOlho.classList.remove("bi-eye-slash")
        botaoOlho.classList.add("bi-eye")
    }
}


function fnVisualisarSenhaCadastro() {
    const inputSenhaCadastro = document.getElementById("inputSenhaCadastro")
    const botaoOlho = document.getElementById("botaoSenhaCadastroOlho")

    if (inputSenhaCadastro.type == "password") {
        inputSenhaCadastro.type = "text"
        botaoOlho.classList.remove("bi-eye")
        botaoOlho.classList.add("bi-eye-slash")
    } else {
        inputSenhaCadastro.type = "password"
        botaoOlho.classList.remove("bi-eye-slash")
        botaoOlho.classList.add("bi-eye")
    }
}

function fnVisualisarConfirmarSenhaCadastro() {
    const inputConfirmarSenhaCadastro = document.getElementById("inputConfirmarSenhaCadastro")
    const botaoOlho = document.getElementById("botaoConfirmarSenhaCadastroOlho")

    if (inputConfirmarSenhaCadastro.type == "password") {
        inputConfirmarSenhaCadastro.type = "text"
        botaoOlho.classList.remove("bi-eye")
        botaoOlho.classList.add("bi-eye-slash")
    } else {
        inputConfirmarSenhaCadastro.type = "password"
        botaoOlho.classList.remove("bi-eye-slash")
        botaoOlho.classList.add("bi-eye")
    }
}