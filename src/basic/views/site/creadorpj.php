<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Modulo de Jugador';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
?>

<div class="container-fluid" id="app">

    <div class="row">

        <div class="col-md-8 ">


            <!-- NOMBRE Y NIVEL -->
            <form>
                <div class="row my-3">

                    <div class="col-md-9">
                        <h1>Nombre</h1>
                        <input type="text" v-model="nombre">
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

                <hr>




                <div class="radio-custom my-3">

                    <h1>Raza</h1>

                    <input type="radio" class="btn btn-outlin-dark" id="draco" value="Dracónido" v-model="raza">
                    <label for="draco">Dracónido</label>

                    <input type="radio" id="elfo" value="Elfo" v-model="raza">
                    <label for="elfo">Elfo</label>

                    <input type="radio" id="enano" value="Enano" v-model="raza">
                    <label for="enano">Enano</label>

                    <input type="radio" id="gnomo" value="Gnomo" v-model="raza">
                    <label for="gnomo">Gnomo</label>

                    <input type="radio" id="humano" value="Humano" v-model="raza">
                    <label for="humano">Humano</label>

                    <input type="radio" id="mediano" value="Mediano" v-model="raza">
                    <label for="mediano">Mediano</label>

                    <input type="radio" id="semielfo" value="Semielfo" v-model="raza">
                    <label for="semielfo">Semielfo</label>

                    <input type="radio" id="semiorco" value="Semiorco" v-model="raza">
                    <label for="semiorco">Semiorco</label>

                    <input type="radio" id="tiefling" value="Tiefling" v-model="raza">
                    <label for="tiefling">Tiefling</label>

                </div>



                <div class="radio-custom my-3">

                    <h1>Clase</h1>

                    <input type="radio" id="barbaro" value="Barbaro" v-model="clase">
                    <label for="barbaro">Barbaro</label>

                    <input type="radio" id="bardo" value="Bardo" v-model="clase">
                    <label for="bardo">Bardo</label>

                    <input type="radio" id="brujo" value="Brujo" v-model="clase">
                    <label for="brujo">Brujo</label>

                    <input type="radio" id="clerigo" value="Clerigo" v-model="clase">
                    <label for="clerigo">Clerigo</label>

                    <input type="radio" id="druida" value="Druida" v-model="clase">
                    <label for="druida">Druida</label>

                    <input type="radio" id="explorador" value="Explorador" v-model="clase">
                    <label for="explorador">Explorador</label>

                    <input type="radio" id="guerrero" value="Guerrero" v-model="clase">
                    <label for="guerrero">Guerrero</label>

                    <input type="radio" id="hechicero" value="Hechicero" v-model="clase">
                    <label for="hechicero">Hechicero</label>

                    <input type="radio" id="mago" value="Mago" v-model="clase">
                    <label for="mago">Mago</label>

                    <input type="radio" id="monje" value="Monje" v-model="clase">
                    <label for="monje">Monje</label>

                    <input type="radio" id="paladin" value="Paladín" v-model="clase">
                    <label for="paladin">Paladín</label>

                    <input type="radio" id="picaro" value="Pícaro" v-model="clase">
                    <label for="picaro">Pícaro</label>


                    <h1>Atributos</h1>
                    <div class="row my-3">



                        <div class="col-md-4 d-block" style="text-align:center">
                            <h4>Fuerza</h4>
                            <input v-model="fuerza" ref="fue" type="number" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                            <button type="button" @click="fuerzaRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                        </div>

                        <div class="col-md-4 d-block" style="text-align:center">
                            <h4>Destreza</h4>
                            <input v-model="destreza" ref="des" type="number" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                            <button type="button" @click="destrezaRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                        </div>


                        <div class="col-md-4 d-block" style="text-align:center">
                            <h4>Constitución</h4>
                            <input v-model="constitucion" type="number" id="con" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                            <button type="button" @click="constitucionRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                        </div>

                    </div>

                    <div class="row my-3">

                        <div class="col-md-4 d-block" style="text-align:center">
                            <h4>Inteligencia</h4>
                            <input v-model="inteligencia" type="number" id="int" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                            <button type="button" @click="inteligenciaRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                        </div>

                        <div class="col-md-4 d-block" style="text-align:center">
                            <h4>Sabiduria</h4>
                            <input v-model="sabiduria" type="number" id="sab" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                            <button type="button" @click="sabiduriaRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                        </div>


                        <div class="col-md-4 d-block" style="text-align:center">
                            <h4>Carisma</h4>
                            <input v-model="carisma" type="number" id="car" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                            <button type="button" @click="carismaRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                        </div>


                    </div>



                    <div class="my-3">
                        <h1>Trasfondo</h1>

                        <select v-model="trasfondo">
                            <option disabled value="">Seleccione un elemento</option>
                            <option>Acólito</option>
                            <option>Artesano</option>
                            <option>Artista</option>
                            <option>Charlatán</option>
                            <option>Criminal</option>
                            <option>Ermitaño</option>
                            <option>Erudito</option>
                            <option>Héroe del Pueblo</option>
                            <option>Huérfano</option>
                            <option>Marinero</option>
                            <option>Noble</option>
                            <option>Salvaje</option>
                            <option>Soldado</option>
                        </select>

                    </div>

                    <hr>

            </form>



        </div>
        </form>


    </div>
    <div class="col-md-4 ">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ nombre }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ raza }} {{ clase }} {{ nivel }}</h6>
                <p>Fuerza: {{ fuerza }}</p>
                <p>Destreza: {{ destreza }}</p>
                <p>Constitución: {{ constitucion }}</p>
                <p>Inteligencia: {{ inteligencia }}</p>
                <p>Sabiduria: {{ sabiduria }}</p>
                <p>Carisma: {{ carisma }}</p>

                <hr>

                <p>Trasfondo:</p>
                {{ trasfondo }}


            </div>

        </div>
    </div>
</div>


<script>
    var app = new Vue({
        el: '#app',
        data: {
            nombre: "Nombre",

            clase: "",
            nivel: "Nivel 1",
            raza: "",
            min: 3,
            max: 18,
            fuerza: "",
            destreza: "",
            constitucion: "",
            inteligencia: "",
            sabiduria: "",
            carisma: "",
            trasfondo: "",


        },


        methods: {
            fuerzaRandom: function() {
                this.fuerza = this.valorRandom();
            },
            destrezaRandom: function() {
                this.destreza = this.valorRandom();
            },
            constitucionRandom: function() {
                this.constitucion = this.valorRandom();
            },
            inteligenciaRandom: function() {
                this.inteligencia = this.valorRandom();
            },
            sabiduriaRandom: function() {
                this.sabiduria = this.valorRandom();
            },
            carismaRandom: function() {
                this.carisma = this.valorRandom();
            },
            valorRandom: function() {
                return Math.floor(Math.random() * (this.max - this.min + 1) + this.min);
            }
        },
    })
</script>