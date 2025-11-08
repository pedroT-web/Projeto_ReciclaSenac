const regexLetras = /^[a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ]+$/
const regexEmail = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
const regexCaracteresEspeciais = /[[!@#$%¨&*(),.?{}|<>]/;
const regexCaracteresEspeciaisNumero = /[[!@#$%¨&*()?{}|<>]/;
const regexMaiuscula = /[A-Z]/
const regexNumero = /\d/
const espaco = /\s+/

function fnValidarPeso() {
    const inputPeso = document.getElementById("input_peso")
    const peso = inputPeso.value
    const erroPeso = document.getElementById("erroPeso")


    if (peso == "") {
        erroPeso.textContent = "O peso não pode ser vazio"
        erroPeso.style.color = "#f16c79"
        inputPeso.classList.add('erro')
        inputPeso.focus()
    } else if (regexLetras.test(peso)) {
        erroPeso.textContent = "O peso pode conter apenas números"
        erroPeso.style.color = "#f16c79"
        inputPeso.classList.add('erro')
        inputPeso.focus()
    } else if (regexCaracteresEspeciaisNumero.test(peso)) {
        erroPeso.textContent = "O peso pode conter apenas números"
        erroPeso.style.color = "#f16c79"
        inputPeso.classList.add('erro')
        inputPeso.focus()
    } else if (peso <= 0) {
        erroPeso.textContent = "O peso não pode Menor ou igual a 0"
        erroPeso.style.color = "#f16c79"
        inputPeso.classList.add('erro')
        inputPeso.focus()
    } else {
        erroPeso.textContent = ""
        inputPeso.classList.remove("erro")
        return true;
    }

}

function fnValidarAtualizacaoPeso() {
    const inputNovoPeso = document.getElementById("inputPeso");
    const peso = inputNovoPeso.value
    const erroNovoPeso = document.getElementById("erroNovoPeso");

    if (peso == "") {
        erroNovoPeso.textContent = "O Campo de peso não pode ser vazio"
        erroNovoPeso.style.color = "#f16c79"
        inputNovoPeso.classList.add('erro')
        inputNovoPeso.focus();
    } else if (regexCaracteresEspeciaisNumero.test(peso)) {
        erroNovoPeso.textContent = "O peso não pode conter caracteres especiais"
        erroNovoPeso.style.color = "#f16c79"
        inputNovoPeso.classList.add('erro')
        inputNovoPeso.focus();
    } else if (regexLetras.test(peso)) {
        erroNovoPeso.textContent = "O peso pode conter apenas números"
        erroNovoPeso.style.color = "#f16c79"
        inputNovoPeso.classList.add('erro')
        inputNovoPeso.focus();
    } else if (peso <= 0) {
        erroNovoPeso.textContent = "O peso não pode Menor ou igual a 0"
        erroNovoPeso.style.color = "#f16c79"
        inputNovoPeso.classList.add('erro')
        inputNovoPeso.focus()
    } else {
        erroNovoPeso.textContent = ""
        inputNovoPeso.classList.remove("erro")
        return true;
    }
}


function fnValidarFuncionario() {
    const selectFuncionario = document.getElementById("select_funcionario")
    const funcionario = selectFuncionario.value
    const erroFuncionario = document.getElementById("erroFuncionario")
    const indexFuncionario = selectFuncionario.selectedIndex

    if (funcionario == "" || indexFuncionario == 0) {
        erroFuncionario.textContent = "Por favor, selecione um funcionário"
        erroFuncionario.style.color = "red"
        selectFuncionario.classList.add('erro')

    } else {
        erroFuncionario.textContent = ""
        selectFuncionario.classList.remove('erro')
        return true;
    }
}

function fnValidarData() {
    const inputData = document.getElementById("input_data");
    const data = inputData.value
    const erroData = document.getElementById("erroData")
    const anoAtual = new Date().getFullYear();
    const anoInput = new Date(data).getFullYear();

    if (data == "") {
        erroData.textContent = "A data não pode estar vazia"
        erroData.style.color = "#f16c79"
        inputData.classList.add("erro")
    } else if (anoInput < anoAtual) {
        erroData.textContent = "O ano não pode ser anterior"
        erroData.style.color = "#f16c79"
        inputData.classList.add("erro")
    } else {
        erroData.textContent = ""
        inputData.classList.remove("erro")
        return true;
    }
}

function fnValidarAtualizacaoData() {
    const inputData = document.getElementById("inputData");
    const data = inputData.value
    const erroData = document.getElementById("erroNovaData")

    const anoAtual = new Date().getFullYear();
    const anoInput = new Date(data).getFullYear();

    if (data == "") {
        erroData.textContent = "A data não pode estar vazia"
        erroData.style.color = "#f16c79"
        inputData.classList.add("erro")
    } else if (anoInput != anoAtual) {
        erroData.textContent = "O ano não pode ser anterior ou superior"
        erroData.style.color = "#f16c79"
        inputData.classList.add("erro")
    } else {
        erroData.textContent = ""
        inputData.classList.remove("erro")
        return true;
    }
}

function fnValidarEmail() {
    const inputEmail = document.getElementById("input_email")
    const email = inputEmail.value
    const erroEmail = document.getElementById("erroEmail")

    if (email == "") {
        erroEmail.textContent = "O email não pode ser vazio"
        erroEmail.style.color = "#f16c79"
        inputEmail.classList.add("erro")
    } else if (email.length > 100) {
        erroEmail.textContent = "O email pode ter até 100 caracteres"
        erroEmail.style.color = "#f16c79"
        inputEmail.classList.add("erro")
    } else if (email.length < 20) {
        erroEmail.textContent = "O email deve ter no mínimo 20 caracteres"
        erroEmail.style.color = "#f16c79"
        inputEmail.classList.add("erro")
    } else if (!regexEmail.test(email)) {
        erroEmail.textContent = "Email Inválido, deve conter @ e ."
        erroEmail.style.color = "#f16c79"
        inputEmail.classList.add("erro")
    } else {
        erroEmail.textContent = ""
        inputEmail.classList.remove("erro")
        return true;
    }
}

function fnValidarSenha() {
    const inputSenha = document.getElementById("input_senha")
    const senha = inputSenha.value
    const erroSenha = document.getElementById("erroSenha")

    if (senha == "") {
        erroSenha.textContent = "A senha não pode ser vazia"
        erroSenha.style.color = "#f16c79"
        inputSenha.classList.add("erro")
    } else if (senha.length < 8) {
        erroSenha.textContent = "A senha deve conter no mínimo 8 caracteres"
        erroSenha.style.color = "#f16c79"
        inputSenha.classList.add("erro")
    } else if (senha.length > 60) {
        erroSenha.textContent = "A senha deve conter no máximo 60 caracteres"
        erroSenha.style.color = "#f16c79"
        inputSenha.classList.add("erro")
    } else if (!regexMaiuscula.test(senha)) {
        erroSenha.textContent = "A senha deve conter pelo menos uma letra Maiúscula"
        erroSenha.style.color = "#f16c79"
        inputSenha.classList.add("erro")
    } else if (!regexCaracteresEspeciais.test(senha)) {
        erroSenha.textContent = "A senha deve conter pelo menos um caracter especial"
        erroSenha.style.color = "#f16c79"
        inputSenha.classList.add("erro")
    } else if (!regexNumero.test(senha)) {
        erroSenha.textContent = "A senha deve conter pelo menos um número"
        erroSenha.style.color = "#f16c79"
        inputSenha.classList.add("erro")
    } else {
        erroSenha.textContent = ""
        inputSenha.classList.remove("erro")
        return true;
    }
}


function fnValidarCadastroFuncionario() {
    const inputCadFuncionario = document.getElementById('input_nome_func')
    const cadFuncionario = inputCadFuncionario.value
    const erroCadFuncionario = document.getElementById('erroFuncionario')


    if (cadFuncionario == "") {
        erroCadFuncionario.textContent = "O Nome Não pode ser vazio"
        erroCadFuncionario.style.color = "#f16c79"
        inputCadFuncionario.classList.add("erro")
        inputCadFuncionario.focus()
    } else if (cadFuncionario.length < 5) {
        erroCadFuncionario.textContent = "Mínimo de 5 caracteres"
        erroCadFuncionario.style.color = "#f16c79"
        inputCadFuncionario.classList.add("erro")
        inputCadFuncionario.focus()
    } else if (cadFuncionario.length > 80) {
        erroCadFuncionario.textContent = "Máximo de 80 caracteres"
        erroCadFuncionario.style.color = "#f16c79"
        inputCadFuncionario.classList.add("erro")
        inputCadFuncionario.focus()
    } else if (!espaco.test(cadFuncionario)) {
        erroCadFuncionario.textContent = "É necessário pelo menos 1 espaço"
        erroCadFuncionario.style.color = "#f16c79"
        inputCadFuncionario.classList.add("erro")
        inputCadFuncionario.focus()
    } else if (regexNumero.test(cadFuncionario)) {
        erroCadFuncionario.textContent = "O Nome Não pode conter números"
        erroCadFuncionario.style.color = "#f16c79"
        inputCadFuncionario.classList.add("erro")
        inputCadFuncionario.focus()
    } else if (regexCaracteresEspeciais.test(cadFuncionario)) {
        erroCadFuncionario.textContent = "O Nome Não pode conter caracteres especiais"
        erroCadFuncionario.style.color = "#f16c79"
        inputCadFuncionario.classList.add("erro")
        inputCadFuncionario.focus()
    } else {
        erroCadFuncionario.textContent = ""
        inputCadFuncionario.classList.remove("erro")
        return true;
    }
}

function fnValidarAtualizacaoFuncionario() {
    const inputEdicaoFuncionario = document.getElementById('input_novo_nome_func')
    const edicaoFuncionario = inputEdicaoFuncionario.value
    const erroEdicaoFuncionario = document.getElementById('erroNovoFuncionario')

    if (edicaoFuncionario == "") {
        erroEdicaoFuncionario.textContent = "O Nome Não pode ser vazio"
        erroEdicaoFuncionario.style.color = "#f16c79"
        inputEdicaoFuncionario.classList.add("erro")
        inputEdicaoFuncionario.focus()
    } else if (edicaoFuncionario.length < 5) {
        erroEdicaoFuncionario.textContent = "Mínimo de 5 caracteres"
        erroEdicaoFuncionario.style.color = "#f16c79"
        inputEdicaoFuncionario.classList.add("erro")
        inputEdicaoFuncionario.focus()
    } else if (edicaoFuncionario.length > 80) {
        erroEdicaoFuncionario.textContent = "Máximo de 80 caracteres"
        erroEdicaoFuncionario.style.color = "#f16c79"
        inputEdicaoFuncionario.classList.add("erro")
        inputEdicaoFuncionario.focus()
    } else if (!espaco.test(edicaoFuncionario)) {
        erroEdicaoFuncionario.textContent = "É necessário pelo menos 1 espaço"
        erroEdicaoFuncionario.style.color = "#f16c79"
        inputEdicaoFuncionario.classList.add("erro")
        inputEdicaoFuncionario.focus()
    } else if (regexNumero.test(edicaoFuncionario)) {
        erroEdicaoFuncionario.textContent = "O Nome Não pode conter números"
        erroEdicaoFuncionario.style.color = "#f16c79"
        inputEdicaoFuncionario.classList.add("erro")
        inputEdicaoFuncionario.focus()
    } else if (regexCaracteresEspeciais.test(edicaoFuncionario)) {
        erroEdicaoFuncionario.textContent = "O Nome Não pode conter caracteres especiais"
        erroEdicaoFuncionario.style.color = "#f16c79"
        inputEdicaoFuncionario.classList.add("erro")
        inputEdicaoFuncionario.focus()
    } else {
        erroEdicaoFuncionario.textContent = ""
        inputEdicaoFuncionario.classList.remove("erro")
        return true;
    }
}

function fnValidarEmailRedefinicao() {
    const inputEmailRedefinicao = document.getElementById('email_redefinicao');
    const emailRedefinicao = inputEmailRedefinicao.value
    const erroEmailRedefinicao = document.getElementById('erroEmailRedefinicao');

    if (emailRedefinicao == "") {
        erroEmailRedefinicao.textContent = "O email não pode ser vazio"
        erroEmailRedefinicao.style.color = "#f16c79"
        inputEmailRedefinicao.classList.add("erro")
    } else if (emailRedefinicao.length > 100) {
        erroEmailRedefinicao.textContent = "O email pode ter até 100 caracteres"
        erroEmailRedefinicao.style.color = "#f16c79"
        inputEmailRedefinicao.classList.add("erro")
    } else if (emailRedefinicao.length < 20) {
        erroEmailRedefinicao.textContent = "O email deve ter no mínimo 20 caracteres"
        erroEmailRedefinicao.style.color = "#f16c79"
        inputEmailRedefinicao.classList.add("erro")
    } else if (!regexEmail.test(emailRedefinicao)) {
        erroEmailRedefinicao.textContent = "Email Inválido, deve conter @ e ."
        erroEmailRedefinicao.style.color = "#f16c79"
        inputEmailRedefinicao.classList.add("erro")
    } else {
        erroEmailRedefinicao.textContent = ""
        inputEmailRedefinicao.classList.remove("erro")
        return true;
    }

}

function fnValidarSenhaAtualRedefinicao() {
    const inputSenhaAtualRedefinicao = document.getElementById('inputSenhaAtual');
    const senhaRedefinicao = inputSenhaAtualRedefinicao.value
    const erroSenhaRedefinicao = document.getElementById('erroSenhaAtualRedefinicao');

    if (senhaRedefinicao == "") {
        erroSenhaRedefinicao.textContent = "A senha não pode ser vazia"
        erroSenhaRedefinicao.style.color = "#f16c79"
        inputSenhaAtualRedefinicao.classList.add("erro")
    } else if (senhaRedefinicao.length < 8) {
        erroSenhaRedefinicao.textContent = "A senha deve conter no mínimo 8 caracteres"
        erroSenhaRedefinicao.style.color = "#f16c79"
        inputSenhaAtualRedefinicao.classList.add("erro")
    } else if (senhaRedefinicao.length > 60) {
        erroSenhaRedefinicao.textContent = "A senha deve conter no máximo 60 caracteres"
        erroSenhaRedefinicao.style.color = "#f16c79"
        inputSenhaAtualRedefinicao.classList.add("erro")
    } else if (!regexMaiuscula.test(senhaRedefinicao)) {
        erroSenhaRedefinicao.textContent = "A senha deve conter pelo menos uma letra Maiúscula"
        erroSenhaRedefinicao.style.color = "#f16c79"
        inputSenhaAtualRedefinicao.classList.add("erro")
    } else if (!regexCaracteresEspeciais.test(senhaRedefinicao)) {
        erroSenhaRedefinicao.textContent = "A senha deve conter pelo menos um caracter especial"
        erroSenhaRedefinicao.style.color = "#f16c79"
        inputSenhaAtualRedefinicao.classList.add("erro")
    } else if (!regexNumero.test(senhaRedefinicao)) {
        erroSenhaRedefinicao.textContent = "A senha deve conter pelo menos um número"
        erroSenhaRedefinicao.style.color = "#f16c79"
        inputSenhaAtualRedefinicao.classList.add("erro")
    } else {
        erroSenhaRedefinicao.textContent = ""
        inputSenhaAtualRedefinicao.classList.remove("erro")
        return true;
    }
}

function fnValidarNovaSenhaRedefinicao() {
    const inputNovaSenhaRedefinicao = document.getElementById("input_nova_senha");
    const novaSenhaRedefinicao = inputNovaSenhaRedefinicao.value
    const erroNovaSenhaRedefinicao = document.getElementById('erroNovaSenhaRedefinicao');

    if (novaSenhaRedefinicao == "") {
        erroNovaSenhaRedefinicao.textContent = "A senha não pode ser vazia"
        erroNovaSenhaRedefinicao.style.color = "#f16c79"
        inputNovaSenhaRedefinicao.classList.add("erro")
    } else if (novaSenhaRedefinicao.length < 8) {
        erroNovaSenhaRedefinicao.textContent = "A senha deve conter no mínimo 8 caracteres"
        erroNovaSenhaRedefinicao.style.color = "#f16c79"
        inputNovaSenhaRedefinicao.classList.add("erro")
    } else if (novaSenhaRedefinicao.length > 60) {
        erroNovaSenhaRedefinicao.textContent = "A senha deve conter no máximo 60 caracteres"
        erroNovaSenhaRedefinicao.style.color = "#f16c79"
        inputNovaSenhaRedefinicao.classList.add("erro")
    } else if (!regexMaiuscula.test(novaSenhaRedefinicao)) {
        erroNovaSenhaRedefinicao.textContent = "A senha deve conter pelo menos uma letra Maiúscula"
        erroNovaSenhaRedefinicao.style.color = "#f16c79"
        inputNovaSenhaRedefinicao.classList.add("erro")
    } else if (!regexCaracteresEspeciais.test(novaSenhaRedefinicao)) {
        erroNovaSenhaRedefinicao.textContent = "A senha deve conter pelo menos um caracter especial"
        erroNovaSenhaRedefinicao.style.color = "#f16c79"
        inputNovaSenhaRedefinicao.classList.add("erro")
    } else if (!regexNumero.test(novaSenhaRedefinicao)) {
        erroNovaSenhaRedefinicao.textContent = "A senha deve conter pelo menos um número"
        erroNovaSenhaRedefinicao.style.color = "#f16c79"
        inputNovaSenhaRedefinicao.classList.add("erro")
    } else {
        erroNovaSenhaRedefinicao.textContent = ""
        inputNovaSenhaRedefinicao.classList.remove("erro")
        return true;
    }
}

function fnValidarConfirmarSenhaRedefinicao() {
    const inputConfirmarSenhaRedefinicao = document.getElementById("input_confirmar_senha");
    const confirmarSenhaRedefinicao = inputConfirmarSenhaRedefinicao.value
    const erroConfirmarSenhaRedefinicao = document.getElementById('erroConfirmarSenhaRedefinicao');

    if (confirmarSenhaRedefinicao == "") {
        erroConfirmarSenhaRedefinicao.textContent = "A senha não pode ser vazia"
        erroConfirmarSenhaRedefinicao.style.color = "#f16c79"
        inputConfirmarSenhaRedefinicao.classList.add("erro")
    } else if (confirmarSenhaRedefinicao.length < 8) {
        erroConfirmarSenhaRedefinicao.textContent = "A senha deve conter no mínimo 8 caracteres"
        erroConfirmarSenhaRedefinicao.style.color = "#f16c79"
        inputConfirmarSenhaRedefinicao.classList.add("erro")
    } else if (confirmarSenhaRedefinicao.length > 60) {
        erroConfirmarSenhaRedefinicao.textContent = "A senha deve conter no máximo 60 caracteres"
        erroConfirmarSenhaRedefinicao.style.color = "#f16c79"
        inputConfirmarSenhaRedefinicao.classList.add("erro")
    } else if (!regexMaiuscula.test(confirmarSenhaRedefinicao)) {
        erroConfirmarSenhaRedefinicao.textContent = "A senha deve conter pelo menos uma letra Maiúscula"
        erroConfirmarSenhaRedefinicao.style.color = "#f16c79"
        inputConfirmarSenhaRedefinicao.classList.add("erro")
    } else if (!regexCaracteresEspeciais.test(confirmarSenhaRedefinicao)) {
        erroConfirmarSenhaRedefinicao.textContent = "A senha deve conter pelo menos um caracter especial"
        erroConfirmarSenhaRedefinicao.style.color = "#f16c79"
        inputConfirmarSenhaRedefinicao.classList.add("erro")
    } else if (!regexNumero.test(confirmarSenhaRedefinicao)) {
        erroConfirmarSenhaRedefinicao.textContent = "A senha deve conter pelo menos um número"
        erroConfirmarSenhaRedefinicao.style.color = "#f16c79"
        inputConfirmarSenhaRedefinicao.classList.add("erro")
    } else {
        erroConfirmarSenhaRedefinicao.textContent = ""
        inputConfirmarSenhaRedefinicao.classList.remove("erro")
        return true;
    }
}

function fnValidarNovaSenha() {
    const inputNovaSenhaRedefinicao = document.getElementById("input_nova_senha");
    const novaSenhaValidar = inputNovaSenhaRedefinicao.value

    const inputConfirmarSenhaRedefinicao = document.getElementById("input_confirmar_senha");
    const confirmarSenhaValidar = inputConfirmarSenhaRedefinicao.value
    const erroConfirmarSenhaRedefinicao = document.getElementById('erroConfirmarSenhaRedefinicao');

    if (novaSenhaValidar != confirmarSenhaValidar) {
        erroConfirmarSenhaRedefinicao.textContent = "As Senha não coincidem, verifique a senha e digite novamente"
        erroConfirmarSenhaRedefinicao.style.color = "#f16c79"
        inputConfirmarSenhaRedefinicao.classList.add("erro")
        inputConfirmarSenhaRedefinicao.focus();
    } else {
        return true;
    }
}

function fnValidarAtualizacaoMaterial() {
    const inputEdicaoMaterial = document.getElementById("inputNovoNomeMaterial")
    const edicaoMaterial = inputEdicaoMaterial.value
    const erroEdicaoMaterial = document.getElementById("erroNovoMaterial")

    if (edicaoMaterial == "") {
        erroEdicaoMaterial.textContent = "O Material não pode ser vazio"
        erroEdicaoMaterial.style.color = "#f16c79"
        inputEdicaoMaterial.classList.add("erro")
    } else if (edicaoMaterial.length < 5) {
        erroEdicaoMaterial.textContent = "Mínimo de 5 caracteres"
        erroEdicaoMaterial.style.color = "#f16c79"
        inputEdicaoMaterial.classList.add("erro")
    } else if (edicaoMaterial.length > 20) {
        erroEdicaoMaterial.textContent = "Máximo de 20 caracteres"
        erroEdicaoMaterial.style.color = "#f16c79"
        inputEdicaoMaterial.classList.add("erro")
    } else if (regexCaracteresEspeciais.test(edicaoMaterial)) {
        erroEdicaoMaterial.textContent = "O Material Não pode conter caracteres especiais"
        erroEdicaoMaterial.style.color = "#f16c79"
        inputEdicaoMaterial.classList.add("erro")
    } else if (regexNumero.test(edicaoMaterial)) {
        erroEdicaoMaterial.textContent = "O Material Não pode conter números"
        erroEdicaoMaterial.style.color = "#f16c79"
        inputEdicaoMaterial.classList.add("erro")
    } else {
        erroEdicaoMaterial.textContent = ""
        inputEdicaoMaterial.classList.remove("erro")
        return true;
    }
}

function fnValidarCadastroMaterial() {
    const inputCadMaterial = document.getElementById("input_cad_material")
    const cadMaterial = inputCadMaterial.value
    const erroMaterial = document.getElementById("erroMaterial")

    if (cadMaterial == "") {
        erroMaterial.textContent = "O Material não pode ser vazio"
        erroMaterial.style.color = "#f16c79"
        inputCadMaterial.classList.add("erro")
    } else if (cadMaterial.length < 5) {
        erroMaterial.textContent = "Mínimo de 5 caracteres"
        erroMaterial.style.color = "#f16c79"
        inputCadMaterial.classList.add("erro")
    } else if (cadMaterial.length > 20) {
        erroMaterial.textContent = "Máximo de 20 caracteres"
        erroMaterial.style.color = "#f16c79"
        inputCadMaterial.classList.add("erro")
    } else if (regexCaracteresEspeciais.test(cadMaterial)) {
        erroMaterial.textContent = "O Material Não pode conter caracteres especiais"
        erroMaterial.style.color = "#f16c79"
        inputCadMaterial.classList.add("erro")
    } else if (regexNumero.test(cadMaterial)) {
        erroMaterial.textContent = "O Material Não pode conter números"
        erroMaterial.style.color = "#f16c79"
        inputCadMaterial.classList.add("erro")
    } else {
        erroMaterial.textContent = ""
        inputCadMaterial.classList.remove("erro")
        return true;
    }
}

function fnValidarEmailRedefinicao() {
    const inputEmailCadastro = document.getElementById('inputEmailCadastro');
    const emailCadastro = inputEmailCadastro.value
    const erroEmailCadastro = document.getElementById('erroEmailCadastro');

    if (emailCadastro == "") {
        erroEmailCadastro.textContent = "O email não pode ser vazio"
        erroEmailCadastro.style.color = "#f16c79"
        inputEmailCadastro.classList.add("erro")
    } else if (emailCadastro.length > 100) {
        erroEmailCadastro.textContent = "O email pode ter até 100 caracteres"
        erroEmailCadastro.style.color = "#f16c79"
        inputEmailCadastro.classList.add("erro")
    } else if (emailCadastro.length < 20) {
        erroEmailCadastro.textContent = "O email deve ter no mínimo 20 caracteres"
        erroEmailCadastro.style.color = "#f16c79"
        inputEmailCadastro.classList.add("erro")
    } else if (!regexEmail.test(emailCadastro)) {
        erroEmailCadastro.textContent = "Email Inválido, deve conter @ e ."
        erroEmailCadastro.style.color = "#f16c79"
        inputEmailCadastro.classList.add("erro")
    } else {
        erroEmailCadastro.textContent = ""
        inputEmailCadastro.classList.remove("erro")
        return true;
    }

}

function fnValidarSenhasCadastro() {
    const inputSenhaCadastro = document.getElementById("inputSenhaCadastro");
    const SenhaValidar = inputSenhaCadastro.value

    const inputConfirmarSenhaCadastro = document.getElementById("inputConfirmarSenhaCadastro");
    const confirmarSenhaValidar = inputConfirmarSenhaCadastro.value
    const erroConfirmarSenhaCadastro = document.getElementById('erroConfirmarSenhaCadastro');

    if (SenhaValidar != confirmarSenhaValidar) {
        erroConfirmarSenhaCadastro.textContent = "As Senha não coincidem, verifique a senha e digite novamente"
        erroConfirmarSenhaCadastro.style.color = "#f16c79"
        inputConfirmarSenhaCadastro.classList.add("erro")
        inputConfirmarSenhaCadastro.focus();
    } else {
        return true;
    }
}


function fnValidarEnvioFuncionario(event) {
    const validarFuncionario = fnValidarCadastroFuncionario();


    if (!validarFuncionario) {

        event.preventDefault();

        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Preencha todos os campos corretamentes, antes de ser enviado",
        });

        return false;

    }

    return true;

}

function fnValidarEnvioMaterial(event) {
    const validarMaterial = fnValidarCadastroMaterial();

    if (!validarMaterial) {
        event.preventDefault();

        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Preencha todos os campos corretamentes, antes de ser enviado",
        });

        return false;
    }

    return true
}

function fnValidarEnvioCadastroPeso(event) {
    const validarMaterial = fnValidarCadastroMaterial();

    if (!validarMaterial) {
        event.preventDefault();

        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Preencha todos os campos corretamentes, antes de ser enviado",
        });

        return false;
    }

    return true
}


function fnValidarLogin(event) { // event -- evento do formulário, no caso  o submit
    const validarEmail = fnValidarEmail(); // armazenao retorno das funções, em true ou false
    const validarSenha = fnValidarSenha();


    if (!validarEmail || !validarSenha) { // valida se o retorno é true ou false
        event.preventDefault(); // cancela o envio do fomulário

        Swal.fire({ // alerta estilizado
            icon: "error",
            title: "Oops...",
            text: "Preencha todos os campos corretamentes, antes de ser enviado",
        });

        return false;
    }

    return true
}

function fnValidarAtualizacaoRegistro(event) {
    const validarPeso = fnValidarAtualizacaoPeso()
    const validarData = fnValidarAtualizacaoData()

    if (!validarPeso || !validarData) {
        event.preventDefault(); // cancela o envio do fomulário


        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Preencha todos os campos corretamentes, antes de ser enviado",
        });
    }
}

function fnValidarNovaAtualizacaoFuncionario(event) {
    const validarEdicaoFunc = fnValidarAtualizacaoFuncionario();

    if (!validarEdicaoFunc) {
        event.preventDefault(); // cancela o envio do fomulário


        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Preencha todos os campos corretamentes, antes de ser enviado",
        });
    }
}

function fnValidarNovaAtualizacaoMaterial(event) {
    const validarEdicaoMaterial = fnValidarAtualizacaoMaterial();

    if (!validarEdicaoMaterial) {
        event.preventDefault(); // cancela o envio do fomulário


        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Preencha todos os campos corretamentes, antes de ser enviado",
        });
    }
}

function fnValidarSenhasIguais(event) {
    const validarSenhas = fnValidarNovaSenha();

    if (!validarSenhas) {
        event.preventDefault();

        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "As senhas não coincidem",
        });

        return false;
    }

    return true;
}

function fnValidarRedefinicaoSenha(event) {
    const validarEmailRedefinicao = fnValidarEmailRedefinicao();
    const validarSenhaRedefinicao = fnValidarSenhaAtualRedefinicao();
    const validarNovaSenhaRedefinicao = fnValidarNovaSenhaRedefinicao();
    const validarConfirmarSenhaRedefinicao = fnValidarConfirmarSenhaRedefinicao();

    if (!validarEmailRedefinicao || !validarSenhaRedefinicao || !validarNovaSenhaRedefinicao || !validarConfirmarSenhaRedefinicao) {

        event.preventDefault();

        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Preencha todos os campos corretamentes, antes de ser enviado",
        });

        return false;

    }

    return true;

}

function fnValidarCadastro(event) {
    // const validarEmailCadastro = fnValidarEmailRedefinicao();
    // const validarSenhaCadastro = fnValidarSenhaAtualRedefinicao();
    // const validarConfirmarSenhaCadastro = fnValidarNovaSenhaRedefinicao();
    const validarSenhas = fnValidarSenhasCadastro();

    if (!validarSenhas) {

        event.preventDefault();

        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Preencha todos os campos corretamentes, antes de ser enviado",
        });

        return false;

    }

    return true;
}

// function fnMensagemErro(event) {
//     event.preventDefault(); // cancela o envio do fomulário


//     Swal.fire({
//         icon: "error",
//         title: "Oops...",
//         text: "Preencha todos os campos corretamentes, antes de ser enviado",
//     });
// }