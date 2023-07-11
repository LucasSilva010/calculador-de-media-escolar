// Seleciona todos os elementos input com a classe "numberInput"
const numInputs = document.querySelectorAll('.numberInput');

// Itera sobre os elementos input selecionados acima, adicionadando a cada um deles um eventListener 'input'.
numInputs.forEach(input => {
  input.addEventListener('input', () => {
    // Faz a validação de caracteres para que seja possível digitar apenas números e o ponto decimal
    input.value = input.value.replace(/[^0-9.]/g, '');

    const maxDigitos = 4 // Quantidades máxima de caracteres que podem ser inseridos no input.
    const maxNumber = 10 // Limitador do valor até 10
    // Limitar o valor até 10

    let valor = input.value.trim
    valor = Math.min(parseFloat(valor), maxNumber);
    valor.value = valor.toString();
    // Verifica se a quantidade de caracteres excede o valor máximo definido, impedindo que isso aconteça.
    if(input.value.length > maxDigitos) {
      input.value = input.value.slice(0, maxDigitos)
    }
  })
});

// php -S localhost:8000 para criar um server php
