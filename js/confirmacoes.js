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
    const botaoDeletar = document.getElementById("botaoDeletarRegistro")

    if (botaoDeletar == null) { return; }

    botaoDeletar.addEventListener("click", function (evento) {
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
                window.location.href = botaoDeletar.href;
            }
        })
    })
}
fnConfirmarDeleteRegistro();

function fnConfirmarDeleteFuncionario() {
    const botaoDeletar = document.getElementById("botaoDeletarFuncionario")
    if (botaoDeletar == null) {
        return;
    } else {
        botaoDeletar.addEventListener("click", function (evento) {
            evento.preventDefault();

            Swal.fire({
                title: "Confirmação",
                text: "Realmente deseja desativar o funcionario?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#F7941E",
                cancelButtonColor: "#d33",
                confirmButtonText: "Deletar",
                cancelButtonText: "Cancelar"
            }).then((resultado) => {
                if (resultado.isConfirmed) {
                    window.location.href = botaoDeletar.href
                }
            })
        })
    }
}
fnConfirmarDeleteFuncionario();
