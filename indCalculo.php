<form action="#" autocomplete="off">
    <div class="row">
        <div class="input-field col s-12 m-6 l-4 xl-4">
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
        <div class="input-field col s-12 m-6 l-4 xl-4">
            <i class="material-icons prefix">calendar_month</i>
            <input type="text" class="datepicker" name="date" id="date">
            <label for="date">Fecha determinada</label>
            <button class="btn blue" onclick="envioDatos()">Consultar</button>
        </div>
        <div class="col s-12 m-6 l-4 xl-4" id="valores">

        </div>
    </div>
</form>
<script src="js/calc.js"></script>