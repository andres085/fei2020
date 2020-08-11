<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Creador de Personajes';
$this->params['breadcrumbs'][] = $this->title;

//$userId = Yii::$app->user->identity->id;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>
<div class="site-personaje">
    <div class="container-fluid" id="app">

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

                            <div class="col-md-8 ">


                                <!-- NOMBRE Y NIVEL -->
                                <form>
                                    <div class="row my-3">

                                        <div class="col-md-9">
                                            <h1>Nombre</h1>
                                            <input type="text" v-model="personaje.nombre">
                                        </div>

                                        <div class="col-md-3">
                                            <h1>Nivel</h1>
                                            <select name="nivel" id="nivel" v-model="personaje.nivel">
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

                                        <input type="radio" class="btn btn-outlin-dark" id="draco" value="Dracónido" v-model="personaje.raza">
                                        <label for="draco">Dracónido</label>

                                        <input type="radio" id="elfo" value="Elfo" v-model="personaje.raza">
                                        <label for="elfo">Elfo</label>

                                        <input type="radio" id="enano" value="Enano" v-model="personaje.raza">
                                        <label for="enano">Enano</label>

                                        <input type="radio" id="gnomo" value="Gnomo" v-model="personaje.raza">
                                        <label for="gnomo">Gnomo</label>

                                        <input type="radio" id="humano" value="Humano" v-model="personaje.razaa">
                                        <label for="humano">Humano</label>

                                        <input type="radio" id="mediano" value="Mediano" v-model="personaje.raza">
                                        <label for="mediano">Mediano</label>


                                        <input type="radio" id="semiorco" value="Semiorco" v-model="personaje.raza">
                                        <label for="semiorco">Semiorco</label>

                                        <input type="radio" id="tiefling" value="Tiefling" v-model="personaje.raza">
                                        <label for="tiefling">Tiefling</label>

                                    </div>



                                    <div class="radio-custom my-3">

                                        <h1>Clase</h1>

                                        <input type="radio" id="barbaro" value="Barbaro" v-model="personaje.clase">
                                        <label for="barbaro">Barbaro</label>

                                        <input type="radio" id="bardo" value="Bardo" v-model="personaje.clase">
                                        <label for="bardo">Bardo</label>

                                        <input type="radio" id="brujo" value="Brujo" v-model="personaje.clase">
                                        <label for="brujo">Brujo</label>

                                        <input type="radio" id="clerigo" value="Clerigo" v-model="personaje.clase">
                                        <label for="clerigo">Clerigo</label>

                                        <input type="radio" id="druida" value="Druida" v-model="personaje.clase">
                                        <label for="druida">Druida</label>

                                        <input type="radio" id="explorador" value="Explorador" v-model="personaje.clase">
                                        <label for="explorador">Explorador</label>

                                        <input type="radio" id="guerrero" value="Guerrero" v-model="personaje.clase">
                                        <label for="guerrero">Guerrero</label>

                                        <input type="radio" id="hechicero" value="Hechicero" v-model="personaje.clase">
                                        <label for="hechicero">Hechicero</label>

                                        <input type="radio" id="mago" value="Mago" v-model="personaje.clase">
                                        <label for="mago">Mago</label>

                                        <input type="radio" id="monje" value="Monje" v-model="personaje.clase">
                                        <label for="monje">Monje</label>

                                        <input type="radio" id="paladin" value="Paladín" v-model="personaje.clase">
                                        <label for="paladin">Paladín</label>

                                        <hr>



                                    </div>
                                    <button @click="addPersonaje()" type="button" class="btn btn-primary m-3">Crear</button>
                                </form>


                            </div>
                    </form>
                </div>
            </div>
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

            <button class="btn btn-success" onclick="window.location.href='/creadorpj/creadorpj2'">Siguiente <i class="fas fa-arrow-right"></i></button>
        </div>
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: function() {
                return {
                    //nombre: "Nombre",
                    // clase: "",
                    // nivel: "Nivel 1",
                    //raza: "",
                    min: 3,
                    max: 18,
                    // fuerza: "",
                    // destreza: "",
                    // constitucion: "",
                    // inteligencia: "",
                    // sabiduria: "",
                    // carisma: "",
                    // trasfondo: "",
                    usuario_id: <?= json_encode(Yii::$app->user->identity->id) ?>,
                    personaje: {},
                }
            },
            // mounted() {
            //     this.getPersonajes();
            // },
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
                },
                addPersonaje: function() {
                    var self = this;
                    axios.post('/apiv1/personaje', self.personaje)
                        .then(function(response) {
                            // handle success
                            console.log(response.data);
                            this.personaje = response.data;
                            var idjoin = {
                                usuario_id: self.usuario_id,
                                personaje_id: this.personaje.id
                            };
                            axios.post('/apiv1/usuariopersonaje', idjoin)
                            console.log(response.data);
                            window.location.href = '/site/index';
                        })
                        .catch(function(error) {
                            // handle error
                            console.log(error);

                        })
                        .then(function() {
                            // always executed
                        });
                },
            },

        })
    </script>