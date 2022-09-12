//function envioDatos() {

//alert('Prueba de concatenacion...... ' + indicador +'/'+ fecha);
//}


//Function para retornar valor ocupando fetch
const traerValor = document.querySelector('#traerValor');

traerValor.addEventListener('click', () => {

    document.querySelector('#traerValor').style.display = 'none';

    let indicador = document.getElementById('indicador').value;
    let fecha = document.getElementById('date').value;

    fetch(`https://mindicador.cl/api/${indicador}/${fecha}`)
        .then(res => res.json())
        .then(data => {

            //console.log(data.serie[0].valor)

            let resultado = document.querySelector('#valor')

            const element = document.createElement('div');

            element.innerHTML += `<input 
                    type="text" 
                    class="input-field #e8f5e9 green lighten-5" 
                    name="valorDevuelto" 
                    id="valorDevuelto" 
                    value="$${data.serie[0].valor}"
                    style="border: 2px solid black;text-align: center" 
                    disabled>
                    `;

            resultado.appendChild(element);

            let limpiarForm = document.querySelector('#limpiarForm');

            limpiarForm.style.display = 'block';

            limpiarForm.addEventListener('click',()=>{
                limpiarForm.style.display = 'none';
                traerValor.style.display = 'block';
                element.innerHTML = '';
            })
        });
});


/*
function traerValor(valor) {


};*/