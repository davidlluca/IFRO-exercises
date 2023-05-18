function add() {
    let num1 = document.querySelector('#number');
    let num2 = document.querySelector('#number2');
    const soma = parseInt(num1.value) + parseInt(num2.value); 
    
    let resultado = document.querySelector('#result');

    resultado.innerHTML = `The add is <strong>${num1.value}</strong> + <strong>${num2.value}</strong> = <strong>${parseInt(soma)}</strong>`;
}

function enter() {
    let inputSelect = document.querySelector('#input-focus');
    inputSelect.style.background = '#38B1FC';
    inputSelect.style.color = 'white';
}

function exit() {
    let inputSelect = document.querySelector('#input-focus');
    inputSelect.style.background = 'white';
    inputSelect.style.color = 'black';
}

function change() {
    let inputEmail = document.querySelector('#email');
    inputEmail.value = (inputEmail.value).toUpperCase();
}

