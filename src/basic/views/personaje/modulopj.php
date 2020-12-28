<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Modulo de Jugador';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile("//unpkg.com/bootstrap/dist/css/bootstrap.min.css", ['position' => $this::POS_HEAD]);
$this->registerCssFile("//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css", ['position' => $this::POS_HEAD]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js", ['position' => $this::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>

<div class="container-fluid">
    <div id="app">
        <h1 style="text-align: center;"> Módulo del Jugador</h1>
        <br>
        <!-- MODAL DEL PERSONAJE -->
        <b-modal id="modal-1" title="Detalle Personaje" v-model="showPersonaje">
            <div class="row">
                <h3>Nombre: {{personaje.nombre}}</h3>
                <div class="col-md-6 d-flex justify-content-center">
                    <h3>Raza: {{ personaje.raza }}</h3>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <h3>Clase: {{ personaje.clase }}</h3>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <h3>{{ personaje.nivel }}</h3>
                </div>
            </div>

            <div class="row my-3">

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Fuerza</h5>
                        <input type="number" class="form-control input-stats-modalpj" v-model="personaje.fuerza" disabled>
                        <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Destreza</h5>
                        <input type="number" class="form-control input-stats-modalpj" v-model="personaje.destreza" disabled>
                        <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Constitución</h5>
                        <input type="number" class="form-control input-stats-modalpj" v-model="personaje.constitucion" disabled>
                        <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                    </div>
                </div>

            </div>

            <div class="row my-3">

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Inteligencia</h5>
                        <input type="number" class="form-control input-stats-modalpj" v-model="personaje.inteligencia" disabled>
                        <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Sabiduria</h5>
                        <input type="number" class="form-control input-stats-modalpj" v-model="personaje.sabiduria" disabled>
                        <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Carisma</h5>
                        <input type="number" class="form-control input-stats-modalpj" v-model="personaje.carisma" disabled>
                        <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                    </div>
                </div>
            </div>
            <template #modal-footer="{ ok, cancel, hide }">
                <b-button size="sm" variant="success" @click="diarioPj(personaje.id)">
                    Diario
                </b-button>
                <b-button size="sm" variant="success" @click="hojaPj(personaje.id)">
                    Hoja del Personaje
                </b-button>
                <b-button size="sm" variant="success" @click="update()">
                    Actualizar
                </b-button>
                <b-button size="sm" variant="danger" @click="borrar()">
                    Borrar
                </b-button>
                <b-button size="sm" variant="danger" @click="cancel()">
                    Cancelar
                </b-button>
            </template>

        </b-modal>

        <div class="row">

            <div class="col-md-12">

                <button class="btn btn-block btn-outline-dark" onclick="window.location.href='creadorpj1'">
                    <h2><i class="fas fa-plus"></i><br> Agregar Personaje</h2>
                </button>

                <div style="text-align: center;">
                    <hr>

                    <h3>Tus Personajes</h3>
                    <h3><i class="fas fa-users"></i></h3>

                    <div class="container-fluid" style="max-height:450px ;overflow-y: auto;" v-if="usuarios.personajes!=null" v-for="(personaje, key) in usuarios.personajes" :key="personaje.id">

                        <b-button v-b-modal.modal-1 type="button" class="btn btn-outline-dark btn-pjs" user="'personaje'" @click="sendInfo(personaje)">{{personaje.nombre}}
                            <h6 style="font-size:smaller;"> {{personaje.raza}} - {{personaje.clase}} - {{personaje.nivel}}</h6>
                        </b-button>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<script>
    var app = new Vue({
        el: '#app',
        data: function() {
            return {
                usuarios: [],
                id: <?= json_encode(Yii::$app->user->identity->id) ?>,
                personaje: {},
                showPersonaje: false,
            }
        },
        mounted() {
            this.getPersonajes();
        },
        methods: {
            getPersonajes: function() {
                var self = this;
                axios.get('/apiv1/usuario/' + self.id)
                    .then(function(response) {
                        self.usuarios = response.data;
                    })
                    .catch(function(error) {
                        //handle error
                        console.log(error);
                    })
                    .then(function() {
                        //always executed
                    });
            },
            diarioPj: function(id){
                window.location.href = '/personaje/diario?id_personaje='+id;
            },
            hojaPj: function(id){
                window.location.href = '/personaje/hojapj?id_personaje='+id;
            },
            sendInfo: function(personaje)
            {
                this.personaje = personaje;
            }
        }
    });

    // $(document).ready(function() {
    //     $("#btnToast").click(function() {
    //         $('#toast').toast('show');
    //     });
    // });
</script>