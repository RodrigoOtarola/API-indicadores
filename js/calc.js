//prueba


//function envioDatos() {

//alert('Prueba de concatenacion...... ' + indicador +'/'+ fecha);
//}

function traerValor(valor) {

    let indicador = document.getElementById('indicador').value;
    let fecha = document.getElementById('date').value;

    let url = `https://mindicador.cl/api/${indicador}/${fecha}`;

    //consulta con AJAX
    const api = new XMLHttpRequest();

    api.open('GET', url, true);

    api.send();

    api.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {

            //parsear json, primero se crea variable y posterior el responseText
            let datos = JSON.parse(this.responseText);
            console.log(datos.serie);

            //guardar variable result, que viene del html
            let resultado = document.querySelector('#valor');

            const element = document.createElement('div');

            element.innerHTML = '';

            //let i = 0;

            //ciclo para recorrer array
            for (let item of datos.serie) {
                console.log(item.valor);


                //substring para cortar texto, se parte del 10 al caracter 10*/

                element.innerHTML += `<input 
                    type="text" 
                    class="input-fields #e8f5e9 green lighten-5" 
                    name="valorDevuelto" 
                    id="valorDevuelto" 
                    value="${item.valor}"
                    style="border: 2px solid black;text-align: center" 
                    disabled>
                    `;

                resultado.appendChild(element);
            }
        }
    }
}

/*let contenido = document.querySelector('#contenido')

function traer(){
    fetch('https://randomuser.me/api')
        .then(res=>res.json())
        .then(data=>{
            console.log(data.results[0])//Imprime el valr email

            //Para imprimir valores por el html
            contenido.innerHTML = `
            <img src="${data.results[0].picture.medium}" width="100px" alt="">
            <p>Nombre: ${data.results[0].name.first}</p>            
            `
        })
}*/