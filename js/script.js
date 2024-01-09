/* Verificação de senha Cadastro */
function Vsenha() {
    const senha = document.getElementById('senha')
    const senha2 = document.getElementById('password')
    const span = document.getElementById('span')
    const span2 = document.getElementById('span2')
    const but = document.getElementById('buttonc')


    var texto = document.getElementById("senha").value;

    let text = senha.value
    let text2 = senha2.value

    console.log(texto.length)

    if (texto.length >= 8) {
        span.style.color = 'green'
        span.innerHTML = "* A senha tem mais que 8 caracteres, Tudo certo patrão "
        if (text2 == text) {
            senha.style.borderColor = "green"
            senha2.style.borderColor = "green"
            senha.style.outline = "5px solid green"
            senha2.style.outline = "5px solid green"
            span2.innerHTML = "* Suas senhas são iguais, caba bom nas lembrança "
            span2.style.color = 'green'
            but.removeAttribute('disabled')
            console.log('miau');
        }
        else {
            senha2.style.borderColor = "red"
            senha2.style.outline = '5px solid red'
            span2.style.color = 'red'
        }
    }
    else {
        span.innerHTML = " * A senha não tem 8 caracteres, FILHA DA PUTA"
        span.style.color = 'red'
    }
}