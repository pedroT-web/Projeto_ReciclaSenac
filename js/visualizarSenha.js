function fnVisualisarSenha(){
    const senha = document.getElementById("input_senha")
    const olho = document.getElementById("olho")
    
    if(senha.type == "password"){
        senha.type = "text"
        olho.classList.remove("bi-eye")
        olho.classList.add("bi-eye-slash")
    }else{
        senha.type = "password"
        olho.classList.remove("bi-eye-slash")
        olho.classList.add("bi-eye")
    }
}