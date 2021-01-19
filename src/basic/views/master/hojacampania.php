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
        <b-modal id="modal-1" title="Personaje" v-model="showPj">
            
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
            
              <div class="row">
                <div class="col-md-12 d-flex justify-content-center" v-for="objeto in pjModal.objetos">
                    <h3>{{objeto.nombre}}</h3>
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

            <select class="form-control" v-model="pjCampaña">
                <option value="">Seleccione los Personajes</option>
                <option @click="guardarId(personaje.id)" v-for="personaje in personajes">{{personaje.nombre}}</option>
            </select><br>
            <button class="btn btn-block btn-success" @click="agregarPj()">Agregar</button>
        </div>

    </div><br>
    <div class="row" v-for="pj in pjCampaña">
        <div class="col" style="text-align:center">
            <b-button v-b-modal.modal-1 type="button" class="btn btn-pjs btn-dark" user="'pj'" @click="sendInfo(pj)"><h4>{{pj.nombre}}</h4>
            </b-button>
        </div>    
    </div>
    <br><hr>

    <div class="row">

        <div class="col">
        
            <h3 style="text-align:center">Diario de la Campaña</h3>
        
        </div>

    </div>

</div>
<script>
var app = new Vue ({
    el: '#app',
             components: {
                diario: CrudDiario,
                },
                props: [''],
            data: function() {
                return {
                    campania:{},
                    id_campania:"",
                    personajes:[],
                    idSelect:"",
                    pjCampaña:[],
                    pjModal:{},
                    showPj: false,
                    showModal: false,
                    model: <?= json_encode($model->getAttributes()) ?>,
                    modelname: <?= json_encode($model::tableName()) ?>,
                }
            },
            mounted(){
                this.getId();
                this.getCampania();
                this.getPersonajes();
                this.getpjCampaña();
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
                getpjCampaña:function() {
                    var self = this;
                    axios.get('/apiv1/personaje?id_campania='+self.id_campania)
                        .then(function(response) {
                            self.pjCampaña = response.data;
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
                }
            }
    })
</script>