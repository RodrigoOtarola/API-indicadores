/*let indicador = 'dolar';

function calcular(){

    fetch(`https://mindicador.cl/api/${indicador}`)
        .then(res=>res.json())
        .then(data=>{
            console.log(data.serie[0].valor)//Imprime el valor email

            //Para imprimir valores por el html
            /*contenido.innerHTML = `
            <img src="${data.results[0].picture.medium}" width="100px" alt="">
            <p>Nombre: ${data.results[0].name.first}</p>            
            `
        })
}*/
//Leer selección de radio button
const peso = document.querySelector('#PesoaInd');

peso.addEventListener('click', () => {

    let resultado = document.querySelector('#peso')

    const element = document.createElement('div');

    element.innerHTML += `
    <input
    type="number"
    class="input-field #e8f5e9 green lighten-5"
    name="ValorPesos"
    id="ValorPesos"
    style="border: 2px solid black;text-align: center"
    min="0"
    >`
    resultado.appendChild(element);
})


//consumir api con Axios
function getAllRequest() {
    axios.get('http://localhost:8080/item')
        .then(function (response) {
            console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        })
        .then(function () {
        });
}