<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Modulo de Jugador';
$this->params['breadcrumbs'][] = $this->title;

//$userId = Yii::$app->user->identity->id;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>
<div class="site-personaje">
    <div class="container-fluid" id="app">

        <div class="row">

            <div class="col-md-8 ">

                <form>

                    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab">Caracteristicas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab">Trasfondo</a>
                        </li>

                    </ul>

                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel">

                            <div class="row my-3">

                                <div class="col-md-9">
                                    <h1>Nombre</h1>
                                    <input type="text" v-model="personaje.nombre" id="nombre" name="nombre">
                                    <br>
                                    <span class="text-danger" v-if="errors.nombre" >{{errors.nombre}}</span>
                                </div>

                                <div class="col-md-3">
                                    <h1>Nivel</h1>
                                    <select name="nivel" id="nivel" v-model="personaje.nivel" required>
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

                                <input type="radio" id="draco" value="Dracónido" v-model="personaje.raza">
                                <label for="draco">Dracónido</label>

                                <input type="radio" id="elfo" value="Elfo" v-model="personaje.raza">
                                <label for="elfo">Elfo</label>

                                <input type="radio" id="enano" value="Enano" v-model="personaje.raza">
                                <label for="enano">Enano</label>

                                <input type="radio" id="gnomo" value="Gnomo" v-model="personaje.raza">
                                <label for="gnomo">Gnomo</label>

                                <input type="radio" id="humano" value="Humano" v-model="personaje.raza">
                                <label for="humano">Humano</label>

                                <input type="radio" id="mediano" value="Mediano" v-model="personaje.raza">
                                <label for="mediano">Mediano</label>

                                <input type="radio" id="semielfo" value="Semielfo" v-model="personaje.raza">
                                <label for="semielfo">Semielfo</label>

                                <input type="radio" id="semiorco" value="Semiorco" v-model="personaje.raza">
                                <label for="semiorco">Semiorco</label>

                                <input type="radio" id="tiefling" value="Tiefling" v-model="personaje.raza">
                                <label for="tiefling">Tiefling</label>
                                <br>
                                <span class="text-danger" v-if="errors.raza" >{{errors.raza}}</span>

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

                                <input type="radio" id="picaro" value="Pícaro" v-model="personaje.clase">
                                <label for="picaro">Pícaro</label>
                                <br>
                                <span class="text-danger" v-if="errors.clase" >{{errors.clase}}</span>

                            </div>

                            <h1>Atributos</h1>
                            <div class="row my-3">



                                <div class="col-md-4 d-block" style="text-align:center">
                                    <h4>Fuerza</h4>
                                    <input v-model="personaje.fuerza" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                                    <button type="button" @click="fuerzaRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                                    <span class="text-danger" v-if="errors.fuerza" >{{errors.fuerza}}</span>
                                </div>
                                

                                <div class="col-md-4 d-block" style="text-align:center">
                                    <h4>Destreza</h4>
                                    <input v-model="personaje.destreza" type="number" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                                    <button type="button" @click="destrezaRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                                    <span class="text-danger" v-if="errors.destreza" >{{errors.destreza}}</span>
                                </div>


                                <div class="col-md-4 d-block" style="text-align:center">
                                    <h4>Constitución</h4>
                                    <input v-model="personaje.constitucion" type="number" id="con" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                                    <button type="button" @click="constitucionRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                                    <span class="text-danger" v-if="errors.constitucion" >{{errors.constitucion}}</span>
                                </div>

                            </div>

                            <div class="row my-3">

                                <div class="col-md-4 d-block" style="text-align:center">
                                    <h4>Inteligencia</h4>
                                    <input v-model="personaje.inteligencia" type="number" id="int" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                                    <button type="button" @click="inteligenciaRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                                    <span class="text-danger" v-if="errors.inteligencia" >{{errors.inteligencia}}</span>
                                </div>

                                <div class="col-md-4 d-block" style="text-align:center">
                                    <h4>Sabiduria</h4>
                                    <input v-model="personaje.sabiduria" type="number" id="sab" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                                    <button type="button" @click="sabiduriaRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                                    <span class="text-danger" v-if="errors.sabiduria" >{{errors.sabiduria}}</span>
                                </div>


                                <div class="col-md-4 d-block" style="text-align:center">
                                    <h4>Carisma</h4>
                                    <input v-model="personaje.carisma" type="number" id="car" min="3" max="18" class="form-control" style="text-align:center; font-size:larger;">
                                    <button type="button" @click="carismaRandom()" class="btn btn-outline-dark w-100"> <i class="fas fa-dice"></i></button>
                                    <span class="text-danger" v-if="errors.carisma" >{{errors.carisma}}</span>
                                </div>
                    
                            </div>

                        </div>


                        <div class="tab-pane fade" id="pills-2" role="tabpanel">

                            <div class="my-3">
                                <!-- ###################################################################### -->
                                <h1>Trasfondo</h1>

                                <select class="form-control" v-model="trasfondoSelect">
                                    <option value="">Seleccione un elemento</option>
                                    <option v-on:click="guardarId(trasfondo.id)" v-for="trasfondo in trasfondos" :selected="personaje.id_trasfondo == trasfondo.id" >{{trasfondo.nombre}}</>
                                </select>
                                <span class="text-danger" v-if="errors.id_trasfondo" >{{errors.id_trasfondo}}</span>

                            </div>
                            <!-- ###################################################################### -->
                            <hr>

                            <h1>Información del Personaje</h1>

                            <br>

                            <div>
                                <h3>Personalidad</h3>

                                <textarea class="form-control" name="personalidad" id="personalidad" rows="2" v-model="personaje.personalidad"></textarea>
                            </div>

                            <br>

                            <div>
                                <h3>Ideales</h3>

                                <textarea class="form-control" name="ideal" id="ideal" rows="2" v-model="personaje.ideal"></textarea>
                            </div>

                            <br>

                            <div>
                                <h3>Vínculos</h3>

                                <textarea class="form-control" name="vinculo" id="vinculo" rows="2" v-model="personaje.vinculo"></textarea>
                            </div>

                            <br>

                            <div>
                                <h3>Defectos</h3>

                                <textarea class="form-control" name="defecto" id="defecto" rows="2" v-model="personaje.defecto"></textarea>
                            </div>

                        </div>

                    </div>

                </form>



            </div>


            <div class="col-md-4 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ personaje.nombre }}</b></h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ personaje.raza }} {{ personaje.clase }} {{ personaje.nivel }}</h6>
                        <p><b>Fuerza:</b> {{ personaje.fuerza }}</p>
                        <p><b>Destreza:</b> {{ personaje.destreza }}</p>
                        <p><b>Constitución:</b> {{ personaje.constitucion }}</p>
                        <p><b>Inteligencia:</b> {{ personaje.inteligencia }}</p>
                        <p><b>Sabiduria:</b> {{ personaje.sabiduria }}</p>
                        <p><b>Carisma:</b> {{ personaje.carisma }}</p>

                        <hr>

                        <div><b>Trasfondo:</b></div>
                        <div>{{trasfondoSelect}}</div>
                        
                        <br>

                        <div><b>Personalidad:</b></div>
                        <div>{{ personaje.personalidad }} </div>

                        <br>

                        <div><b>Ideales:</b></div>
                        <div>{{ personaje.ideal }} </div>

                        <br>

                        <div><b>Vinculos:</b></div>
                        <div>{{ personaje.vinculo }} </div>

                        <br>

                        <div><b>Defectos:</b></div>
                        <div>{{ personaje.defecto }} </div>

                    </div>

                </div>
            </div>

        </div>
        <button v-if="isNewRecord" @click="addPersonaje()" type="button" class="btn btn-block btn-success m-3">Crear</button>
        <button v-if="!isNewRecord" @click="updatePj(id_personaje)" type="button" class="btn btn-block btn-success m-3">Actualizar</button>
    </div>
</div>


<script>
    var app = new Vue({
        el: '#app',
        data: function() {
            return {
                min: 3,
                max: 18,
                usuario_id: <?= json_encode(Yii::$app->user->identity->id) ?>,
                personaje: {
                    fuerza:"",
                    destreza:"",
                    constitucion:"",
                    inteligencia:"",
                    sabiduria:"",
                    carisma:"",
                },
                trasfondos: [],
                errors:{},
                id_personaje:"",
                isNewRecord: true,
                personajes:{},
                trasfondoSelect:""
            }
        },
        mounted() {
            this.getTrasfondo();
            this.getIdpj();
            this.getPersonaje();
        },
        methods: {
            fuerzaRandom: function() {
                this.personaje.fuerza = this.valorRandom();
            },
            destrezaRandom: function() {
                this.personaje.destreza = this.valorRandom();
            },
            constitucionRandom: function() {
                this.personaje.constitucion = this.valorRandom();
            },
            inteligenciaRandom: function() {
                this.personaje.inteligencia = this.valorRandom();
            },
            sabiduriaRandom: function() {
                this.personaje.sabiduria = this.valorRandom();
            },
            carismaRandom: function() {
                this.personaje.carisma = this.valorRandom();
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
                        
                        Swal.fire({
                            icon: 'success',
                            title: 'Personaje Creado',
                            confirmButtonText: 'Volver',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/personaje/modulopj';
                            }
                        }
                        )

                    })
                    .catch(function(error) {
                       //handle error
                        console.log(error.response.data);
                        self.errors = self.normalizeErrors(error.response.data);
                        console.log(self.errors);

                    })
                    .then(function() {
                        // always executed
                    });
            },
            getTrasfondo: function() {
                var self = this;
                axios.get('/apiv1/trasfondo')
                    .then(function(response) {
                        self.trasfondos = response.data;
                    })
                    .catch(function(error) {
                        //handle error
                        console.log(error);
                    })
                    .then(function() {
                        //always executed
                    });
            },
            //Buscamos el personaje a actualizar
            getPersonaje: function() {
                var self = this;
                axios.get('/apiv1/personaje')
                    .then(function(response) {
                        self.personajes = response.data;
                        self.getPjactualizable();
                    })
                    .catch(function(error) {
                        //handle error
                        console.log(error);
                    })
                    .then(function() {
                        //always executed
                    });
            },
            guardarId: function(id) {
                this.personaje.id_trasfondo = id;
            },
            normalizeErrors: function(errors) {
                var allErrors = {};
                for (var i = 0; i < errors.length; i++) {
                    allErrors[errors[i].field] = errors[i].message;
                }
                return allErrors;
            },
            getIdpj:function(){
                let url = window.location.href;
                let id = url.substring(url.lastIndexOf('=') + 1);
                this.id_personaje = Number(id);
            },
            getPjactualizable:function(){
                if(this.id_personaje){
                    console.log("Existe");
                    let key = this.personajes.findIndex(x => x.id ===this.id_personaje);
                    this.personaje = Object.assign({}, this.personajes[key]);
                    this.trasfondoSelect = this.personaje.trasfondo.nombre;
                    this.personaje.id = this.id_personaje;
                    this.isNewRecord = false;
                }
                else{
                    console.log("No existe");
                }
            },
            updatePj:function(id){
                var self = this;
                const params = new URLSearchParams();
                params.append('nombre', self.personaje.nombre);
                params.append('clase', self.personaje.clase);
                params.append('nivel', self.personaje.nivel);
                params.append('raza', self.personaje.raza);
                params.append('fuerza', self.personaje.fuerza);
                params.append('destreza', self.personaje.destreza);
                params.append('constitucion', self.personaje.constitucion);
                params.append('inteligencia', self.personaje.inteligencia);
                params.append('sabiduria', self.personaje.sabiduria);
                params.append('id_trasfondo', self.personaje.id_trasfondo);
                params.append('personalidad', self.personaje.personalidad);
                params.append('ideal', self.personaje.ideal);
                params.append('vinculo', self.personaje.vinculo);
                axios.patch('/apiv1/personaje/' + id, self.personaje)
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        alert("Personaje Actualizado");
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