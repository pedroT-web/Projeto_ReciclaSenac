function fnValidarPeso() {
    const inputPeso = document.getElementById("input_peso")
    const peso = inputPeso.value
    const erroPeso = document.getElementById("erroPeso")
    let regexLetras = /^[a-zA-ZáàâãéèêíïóôõöúçñÁÀÂÃÉÈÊÍÏÓÔÕÖÚÇÑ]+$/

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
    } else {
        erroPeso.textContent = ""
        inputPeso.classList.remove("erro")
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
    }
}

function fnValidarEmail() {
    const inputEmail = document.getElementById("input_email")
    const email = inputEmail.value
    const erroEmail = document.getElementById("erroEmail")
    const regexEmail = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/

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
    }
}

function fnValidarSenha() {
    const inputSenha = document.getElementById("input_senha")
    const senha = inputSenha.value
    const regexCaracteresEspeciais = /[[!@#$%¨&*(),.?{}|<>]/;
    const regexMaiuscula = /[A-Z]/
    const regexNumero = /\d/
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
    }
}

function fnValidarCadastroFuncionario() {
    const inputCadFuncionario = document.getElementById('input_nome_func')
    const cadFuncionario = inputCadFuncionario.value
    const erroCadFuncionario = document.getElementById('erroFuncionario')
    const regexNumero = /\d/
    const regexCaracteresEspeciais = /[!@#$%&*()_+\-=\[\]{};':"\\|,.<>\/?]/
    const espaco = /\s+/

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
    }
}

function fnValidarCadastroMaterial() {
    const inputCadMaterial = document.getElementById("input_cad_material")
    const cadMaterial = inputCadMaterial.value
    const erroMaterial = document.getElementById("erroMaterial")
    const regexNumero = /\d/
    const regexCaracteresEspeciais = /[!@#$%&*()_+\-=\[\]{};':"\\|,.<>\/?]/

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
    }
}

function fnValidarEnvioFuncionario(event) {

    const valido = fnValidarCadastroFuncionario();

    if (!valido) {

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
