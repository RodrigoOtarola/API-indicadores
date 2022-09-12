//let contenido = document.querySelector('#contenido')

let indicador = 'dolar';

function calcular(){

    fetch(`https://mindicador.cl/api/${indicador}`)
        .then(res=>res.json())
        .then(data=>{
            console.log(data.serie[0].valor)//Imprime el valor email

            //Para imprimir valores por el html
            /*contenido.innerHTML = `
            <img src="${data.results[0].picture.medium}" width="100px" alt="">
            <p>Nombre: ${data.results[0].name.first}</p>            
            `*/
        })
}