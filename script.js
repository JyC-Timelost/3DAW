// Captura o clique no botão
document.getElementById('btnAtualizar').addEventListener('click', function() {
    // Pega os elementos da tela
    var inputTemp = document.getElementById('temperatura').value;
    var retangulo = document.getElementById('retangulo');
    var mensagemErro = document.getElementById('mensagemErro');
    
    // Converte o valor para número
    var temp = parseFloat(inputTemp);

    // Limpa a mensagem de erro antes de testar
    mensagemErro.innerText = "";

    // Verifica se é inválido (vazio, menor que 0 ou maior que 70)
    if (isNaN(temp) || temp < 0 || temp > 70) {
        retangulo.style.backgroundColor = "white";
        mensagemErro.innerText = "Valor inválido";
        return; // Para a execução aqui
    }

    // Lógica das cores conforme a temperatura
    if (temp >= 0 && temp <= 29) {
        retangulo.style.backgroundColor = "lightblue"; // Azul claro
    } else if (temp >= 30 && temp <= 45) {
        retangulo.style.backgroundColor = "lightyellow"; // Amarelo claro
    } else if (temp >= 46 && temp <= 60) {
        retangulo.style.backgroundColor = "lightcoral"; // Vermelho claro
    } else if (temp > 60) {
        retangulo.style.backgroundColor = "darkred"; // Vermelho escuro
    }
});
