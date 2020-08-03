<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Modulo de Jugador';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
?>

<div class="container-fluid" id="app">

    <div class="row">

        <div class="col-md-8 border">

            <div class="row">
                <div class="col-md-9">
                    <h1>Nombre</h1>
                    <input type="text" v-model="nombre" style="text-align:center; font-size: 24px; height: 4rem; width: 50rem;">
                </div>

                <div class="col-md-3">
                    <h1>Nivel</h1>
                    <select name="nivel" id="nivel" v-model="nivel">
                        <option value="Nivel 1">Nivel 1</option>
                        <option value="Nivel 2">Nivel 2</option>
                        <option value="Nivel 3">Nivel 3</option>
                        <option value="Nivel 4">Nivel 4</option>
                        <option value="Nivel 5">Nivel 5</option>
                        <option value="Nivel 6">Nivel 6</option>
                        <option value="Nivel 7">Nivel 7</option>
                        <option value="Nivel 8">Nivel 8</option>
                        <option value="Nivel 9">Nivel 9</option>
                        <option value="Nivel 10">Nivel 10</option>
                        <option value="Nivel 11">Nivel 11</option>
                        <option value="Nivel 12">Nivel 12</option>
                        <option value="Nivel 13">Nivel 13</option>
                        <option value="Nivel 14">Nivel 14</option>
                        <option value="Nivel 15">Nivel 15</option>
                        <option value="Nivel 16">Nivel 16</option>
                        <option value="Nivel 17">Nivel 17</option>
                        <option value="Nivel 18">Nivel 18</option>
                        <option value="Nivel 19">Nivel 19</option>
                        <option value="Nivel 20">Nivel 20</option>
                    </select>
                </div>
            </div>

            <h1>Raza</h1>

            <div class="radio-raza">

                <button class="btn btn-outline-dark">
                    <input type="radio" id="draco" value="Dracónido" v-model="raza">
                    <label for="draco">Dracónido</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="elfo" value="Elfo" v-model="raza">
                    <label for="elfo">Elfo</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="enano" value="Enano" v-model="raza">
                    <label for="enano">Enano</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="gnomo" value="Gnomo" v-model="raza">
                    <label for="gnomo">Gnomo</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="humano" value="Humano" v-model="raza">
                    <label for="humano">Humano</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="mediano" value="Mediano" v-model="raza">
                    <label for="mediano">Mediano</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="semielfo" value="Semielfo" v-model="raza">
                    <label for="semielfo">Semielfo</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="semiorco" value="Semiorco" v-model="raza">
                    <label for="semiorco">Semiorco</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="tiefling" value="Tiefling" v-model="raza">
                    <label for="tiefling">Tiefling</label>
                </button>

            </div>

            <h1>Clase</h1>

            <div class="radio-raza">

                <button class="btn btn-outline-dark">
                    <input type="radio" id="barbaro" value="Barbaro" v-model="clase">
                    <label for="barbaro">Barbaro</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="bardo" value="Bardo" v-model="clase">
                    <label for="bardo">Bardo</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="brujo" value="Brujo" v-model="clase">
                    <label for="brujo">Brujo</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="clerigo" value="Clerigo" v-model="clase">
                    <label for="clerigo">Clerigo</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="druida" value="Druida" v-model="clase">
                    <label for="druida">Druida</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="explorador" value="Explorador" v-model="clase">
                    <label for="explorador">Explorador</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="guerrero" value="Guerrero" v-model="clase">
                    <label for="guerrero">Guerrero</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="hechicero" value="Hechicero" v-model="clase">
                    <label for="hechicero">Hechicero</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="mago" value="Mago" v-model="clase">
                    <label for="mago">Mago</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="monje" value="Monje" v-model="clase">
                    <label for="monje">Monje</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="paladin" value="Paladín" v-model="clase">
                    <label for="paladin">Paladín</label>
                </button>

                <button class="btn btn-outline-dark">
                    <input type="radio" id="picaro" value="Pícaro" v-model="clase">
                    <label for="picaro">Pícaro</label>
                </button>

            </div>


        </div>
        <div class="col-md-4 border">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ nombre }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ raza }} {{ clase }} {{ nivel }}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
            </div>
        </div>
    </div>

</div>


<script>
    var app = new Vue({
            el: '#app',
            data: {
                message: "",
                nombre: "",

                clase: "",
                nivel: "Nivel 1",
                raza: ""
            }
        }),
</script>


<!--<div id="app">
<form-wizard next-button-text="Siguiente" title="Crea tu Personaje">
    <tab-content title="Datos del Personaje">

        <div class="container-fluid d-flex justify-content-center">
            <div class="d-inline-block" style="text-align: center;">
                <h1>Nombre</h1>
                <input type="text" style="text-align:center; font-size: 24px; height: 4rem; width: 50rem;">
            </div>
        </div>
                    
        
    </tab-content>
    <tab-content title="Información adicional">
        Segundo paso
    </tab-content>
    <tab-content title="Verificación">
        Tercer paso
    </tab-content>
</form-wizard>
</div>


<script>
    Vue.use(VueFormWizard)

    new Vue({
    el: '#app',
    
})    
</script>-->