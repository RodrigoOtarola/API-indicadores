<!--<form action="#" method="get">-->
    <div class="row">
        <div class="input-field col s-12 m-4 l-4 xl-4">
            <i class="material-icons prefix">money</i>
            <select id="indicador" name="indicador">
                <option value="" disabled selected>Selecciona</option>
                <option value="dolar">Dolar</option>
                <option value="euro">Euro</option>
                <option value="uf">U.F.</option>
                <option value="utm">U.T.M.</option>
            </select>
            <!--            <label>Materialize Select</label>-->
        </div>
        <div class="input-field col s-12 m-4 l-4 xl-4">
            <i class="material-icons prefix">calendar_month</i>
            <input type="text" class="datepicker" name="date" id="date">
            <label for="date">Fecha determinada</label>
        </div>
        <div class="input-field col s-12 m-4 l-4 xl-4">
            <button class="btn blue" id="traerValor">Consultar</button>
        </div>
        <div class="input-field col s-12 m-4 l-4 xl-4" id="valor">

        </div>
        <div class="input-field col s-12 m-4 l-4 xl-4" id="limpiarForm" style="display: none">
            <button class="btn red" type="reset">Limpiar</button>
        </div>
    </div>
<!--</form>-->


<script src="js/calc.js"></script>