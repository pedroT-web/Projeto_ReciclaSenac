function fnConfirmarDeletePeriodo() {
    const botao = document.getElementById("botaoDeletarPeriodo")

    if (botao == null) {
        return;
    } else {
        botao.addEventListener("click", function (evento) {
            evento.preventDefault();

            Swal.fire({
                title: "Confirmação",
                text: "Realmente deseja deletar este período?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#F7941E",
                cancelButtonColor: "#d33",
                confirmButtonText: "Deletar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = botao.href;
                }
            });
        })
    }
}

fnConfirmarDeletePeriodo();

function fnConfirmarDeleteRegistro() {
    const botoesDeletar = document.querySelectorAll(".botao_deletar")

    if (botoesDeletar == null) { return; }

    botoesDeletar.forEach(botao => {
        botao.addEventListener("click", function (evento) {
            evento.preventDefault();

            Swal.fire({
                title: "Confirmação",
                text: "Realmente deseja deletar este registro?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#F7941E",
                cancelButtonColor: "#d33",
                confirmButtonText: "Deletar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = botao.href;
                }
            })
        })
    });
}
fnConfirmarDeleteRegistro();

function fnConfirmarDeleteFuncionario() {
    const botoesDeletarFuncionario = document.querySelectorAll("botoes_deletar_funcionario")
    if (botoesDeletarFuncionario == null) {
        return;
    }

    botoesDeletarFuncionario.forEach(botaoFuncionario => {
        botaoFuncionario.addEventListener("click", function (evento) {
            evento.preventDefault();

            Swal.fire({
                title: "Confirmação",
                text: "Realmente deseja deletar este funcionario?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#F7941E",
                cancelButtonColor: "#d33",
                confirmButtonText: "Deletar",
                cancelButtonText: "Cancelar"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = botaoFuncionario.href;
                }
            })
        })
    });
}
fnConfirmarDeleteFuncionario();
