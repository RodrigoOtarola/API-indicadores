<div class="row">
    <div class="col s-12 m-4 l-4 xl-4">
        <p>
            <label>
                <input name="group1" id="PesoaInd" type="radio"/>
                <span>Peso a indicador</span>
            </label>
            <label>
                <input name="group1" id="IndaPeso" type="radio"/>
                <span>Indicador a peso</span>
            </label>
        </p>
    </div>
    <div class="col s-12 m-4 l-4 xl-4" id="peso">

    </div>
    <div class="col s-12 m-4 l-4 xl-4" id="indicador">

    </div>

    <!--    <div class="input-field col s-12 m-4 l-4 xl-4">-->
    <!--        <i class="material-icons prefix">money</i>-->
    <!--        <select id="indicador" name="indicador">-->
    <!--            <option value="" disabled selected>Selecciona</option>-->
    <!--            <option value="dolar">Dolar</option>-->
    <!--            <option value="euro">Euro</option>-->
    <!--            <option value="uf">U.F.</option>-->
    <!--            <option value="utm">U.T.M.</option>-->
    <!--        </select>-->
    <!--    </div>-->
</div>

<button class="btn blue" onclick="calcular()">Calcular</button>
<script src="js/conversor.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>