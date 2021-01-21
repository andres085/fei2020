<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Hoja de Campaña';

$this->registerCssFile("//unpkg.com/bootstrap/dist/css/bootstrap.min.css", ['position' => $this::POS_HEAD]);
$this->registerCssFile("//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css", ['position' => $this::POS_HEAD]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js", ['position' => $this::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js", ['position' => View::POS_HEAD]);
echo $this->render('/components/CrudDiario');
?>

<div style="height: 120vh;" class="container-fluid" id="app">

   <!-- MODAL DEL PJ -->
        <b-modal id="modal-2" title="Personaje" v-model="showPj">
            
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <h3>{{ pjModal.nombre }}</h3>
                </div>
                
                <div class="col-md-6 d-flex justify-content-center">
                    <h3>{{ pjModal.raza }}</h3>
                </div>

                <div class="col-md-6 d-flex justify-content-center">
                    <h3>{{ pjModal.clase }}</h3>
                </div>
                    
            </div>

            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <h3>{{ pjModal.nivel }}</h3>
                </div>
            </div>
            
            <div class="row" v-for="trasfondo in pjModal" class="justify-content-center">
                <div class="col-md-12">
                    {{ trasfondo.nombre }}
                </div>
                <div class="col-md-12">
                    {{ trasfondo.nombre_rasgo }}
                </div>
            </div>

            <div class="row my-3">

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Fuerza: {{pjModal.fuerza}}</h5>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Destreza: {{pjModal.destreza}}</h5>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Constitución: {{pjModal.constitucion}}</h5>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Inteligencia: {{pjModal.inteligencia}}</h5>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Sabiduria: {{pjModal.sabiduria}}</h5>
                    </div>
                </div>

                <div class="col-md-4 d-flex justify-content-center">
                    <div>
                        <h5>Carisma: {{pjModal.carisma}}</h5>
                    </div>
                </div>

            </div>


            <template #modal-footer="{ ok, cancel, hide }">

                <b-button class="btn btn-danger btn-block" size="sm" variant="danger" @click="quitarPj(pjModal.id)">
                    Quitar
                </b-button>
                <b-button class="btn btn-danger btn-block" size="sm" variant="danger" @click="cancel()">
                    Cancelar
                </b-button>
                
            </template>

        </b-modal>

    <div class="row">

        <div class="col" style="text-align:center">

        <h3>Hoja Campaña</h3><br>

        <h3>Nombre de la Campaña: {{campania.nombre}}</h3><br>

        <h3>Detalles de la Campaña: {{campania.detalles}}</h3>
        
        </div>

    </div><br><hr>

    <div class="row">

        <div class="col" style="text-align:center">
        
            <h3>Personajes de la Campaña: </h3>

            <select class="form-control">
                <option value="">Seleccione los Personajes</option>
                <option @click="guardarId(personaje.id)" v-for="personaje in personajes">{{personaje.nombre}}</option>
            </select><br>
            <button class="btn btn-block btn-success" @click="agregarPj()">Agregar</button>
        </div>

    </div><br>
    <div class="row">
        <div class="col" style="text-align:center" v-for="personaje in pjCampania">
            <b-button v-b-modal.modal-2 type="button" class="btn btn-pjs btn-dark" user="'personaje'" @click="sendInfo(personaje)"><h4>{{personaje.nombre}}</h4>
            </b-button>
        </div>    
    </div>
    <br><hr>

    <div class="row">

        <div class="col">

            <diario v-bind:model="model" v-bind:modelname="modelname" v-bind:fields="['fecha_hora', 'info']" v-if="id_campania" :id_campania ='id_campania'>
            </diario>
        
        </div>

    </div>

</div>
<script>
var app = new Vue ({
    el: '#app',
             components: {
                diario: CrudDiario,
                },
                props: ['id_campania'],
            data: function() {
                return {
                    campania:{},
                    personajes:[],
                    idSelect:"",
                    pjModal:{},
                    showPj: false,
                    showModal: false,
                    model: <?= json_encode($model->getAttributes()) ?>,
                    modelname: <?= json_encode($model::tableName()) ?>,
                    pjCampania:[],
                }
            },
            mounted(){
                this.getId();
                this.getCampania();
                this.getPersonajes();
                this.getPjcampania();
            },
            methods:{
                getCampania: function() {
                    var self = this;
                    axios.get('/apiv1/campania/'+self.id_campania)
                        .then(function(response) {
                            self.campania = response.data;
                        })
                        .catch(function(error) {
                            //handle error
                            console.log(error);
                        })
                        .then(function() {
                            //always executed
                        });
                },
                getPersonajes: function(){
                    var self = this;
                    axios.get('/apiv1/personaje')
                        .then(function(response) {
                            self.personajes = response.data;
                        })
                        .catch(function(error) {
                            //handle error
                            console.log(error);
                        })
                        .then(function() {
                            //always executed
                        });
                },
                getPjcampania: function(){
                    var self = this;
                    axios.get('/apiv1/personaje', { params: {
                    id_campania: this.id_campania} })
                        .then(function(response) {
                            console.log(response.data)
                            self.pjCampania = response.data;
                            //self.getPjcampania();
                        })
                        .catch(function(error) {
                            //handle error
                            console.log(error);
                        })
                        .then(function() {
                            //always executed
                        });
                },
                getId: function() {
                    let url = window.location.href;
                    let id = url.substring(url.lastIndexOf('=') + 1);
                    this.id_campania = Number(id);
                },
                agregarPj: function() {
                    var self = this;
                    axios.patch('/apiv1/personaje/' + self.idSelect, {
                    id_campania: self.id_campania})
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        alert("Personaje Agregado");
                        self.personajes = response.data;
                        //self.idSelect = "";
                        //location.reload();
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error.response.data);
                    })
                    .then(function() {
                        // always executed
                    });
                },
                guardarId:function(id) {
                    console.log(id);
                    this.idSelect = id;
                },
                sendInfo: function(personaje)
                {
                    this.pjModal = personaje;
                },
                quitarPj:function(id){
                    var self = this;
                    axios.patch('/apiv1/personaje/' + id, {
                    id_campania: null })
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        alert("Personaje Quitado");
                        self.personajes = response.data;
                        self.getPersonajes();
                        //location.reload();
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error.response.data);
                    })
                    .then(function() {
                        // always executed
                    });
                }
            }
    })
</script>