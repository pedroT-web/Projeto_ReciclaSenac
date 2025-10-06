// function fnFormatarDecimal(input) {
//     let valor = input.value;
//     // Remove caracteres não numéricos, exceto vírgula e ponto
//     valor = valor.replace(/\D/g, '');

//     // Adiciona a vírgula decimal
//     valor = valor.replace(/(\d)(?=(\d{2})$)/g, '$1,');

//     // Adiciona o ponto para milhar (apenas para números maiores que 1000)
//     valor = valor.replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1.');

//     input.value = valor;
// }

// document.getElementById('input_peso').addEventListener('input', function () {
//     formatarDecimal(this);
// });