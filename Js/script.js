


//CRIANDO CONSTANTES E VARIÁVEIS PARA VERIFICAÇÃO DO CÓDIGO
const swup = new Swup();
const forms = document.getElementById('form');
const inputEmail = document.getElementById('email');
const inputUser = document.getElementById('user');
const inputSenha = document.getElementById('senha');
const erroEmail = document.getElementById('erroEmail');
const erroPass = document.getElementById('erroPass');
const erroUser = document.getElementById('erroUser');
const signup = document.getElementById('signup');
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const senhaOuEmailIncorretos = document.getElementById('incorretPass')



//Função que altera as propriedades do botão "SignUp". - - - - -  Desativando e ativando o mesmo.
//Função que altera propriedades do campo inputEmail.  - - - - -  Exibe o campo Span erroEmail, caso ele não seja válido.

function emailValidate() {
    if (emailRegex.test(inputEmail.value)) {
        inputEmail.style.cssText =
            'border: 2px solid green;';
        erroEmail.style.cssText =
            'display: none;';
        document.getElementById('signup').disabled = false;
        signup.style.cssText =
            'background: #01ACEA;';



    }
    else {
        erroEmail.style.cssText =
            'display: inline;' +
            'color: #FA901E;' +
            'font-weight: bold;';
        inputEmail.style.cssText =
            'border: 2px solid #AD600E;';
        signup.style.cssText =
            'background: #8a8a8a;' +
            'box-shadow: none;';
        document.getElementById('signup').disabled = true;
    }

}


//Função que altera as propriedades do campo inputSenha. - - - - -  Exibe o campo Span erroPass, caso ele não seja maior ou igual a 8 digitos.
function senhaValidate() {
    if (inputSenha.value.length < 8) {

        erroPass.style.cssText =
            'display: inline;' +
            'color: #FA901E;' +
            'font-weight: bold;';
        inputSenha.style.cssText =
            'border: 2px solid #AD600E;';



    } else {
        inputSenha.style.cssText =
            'border: 2px solid green;';
        erroPass.style.cssText =
            'display: none;';

    }
}


//Função que altera as propriedades do campo inputUser. - - - - - Exibe o campo Span:erroUser, caso ele não seja maior ou igual a 4 digitos.
function userValidate() {
    if (inputUser.value.length < 4) {

        erroUser.style.cssText =
            'display: inline;' +
            'color: #FA901E;' +
            'font-weight: bold;';
        inputUser.style.cssText =
            'border: 2px solid #AD600E;';



    } else {
        inputUser.style.cssText =
            'border: 2px solid green;';
        erroUser.style.cssText =
            'display: none;';

    }
}











