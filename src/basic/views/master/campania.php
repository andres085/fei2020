<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Modulo de Master';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile("//unpkg.com/bootstrap/dist/css/bootstrap.min.css", ['position' => $this::POS_HEAD]);
$this->registerCssFile("//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css", ['position' => $this::POS_HEAD]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js", ['position' => $this::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>

<div class="container-fluid">
    <div id="app">
    

        <h1 style="text-align: center;"> Módulo del Master - Campaña</h1>
        <br>


        <!-- MODAL DE LA CAMPAÑA -->
        <b-modal id="modal-1" title="Detalle Campaña" v-model="showCampaña">
            
            <div class="row my-3">

                <div class="col-md-12 d-flex justify-content-center">
                    <h3>{{campañaModal.nombre}}</h3>
                </div>

                <div class="col-md-12 d-flex justify-content-center">
                    <h3>{{campañaModal.detalles}}</h3>
                </div>

            </div>


            <template #modal-footer="{ ok, cancel, hide }">

                <button @click="hojaCampaña(campañaModal.id)" class="btn btn-outline-success btn-block">Ver Campaña</button>
                
                <button @click="updateCampaña(campañaModal.id)" class="btn btn-outline-success btn-block">Actualizar</button>
            
                <b-button class="btn btn-danger btn-block" size="sm" variant="danger" @click="deleteCampaña(campañaModal.id)">
                    Borrar Campaña
                </b-button>

                <b-button class="btn btn-danger btn-block" size="sm" variant="danger" @click="cancel()">
                    Cancelar
                </b-button>
                
            </template>

        </b-modal>

        <div class="row">

            <div class="col-md-12">

                <button class="btn btn-block btn-outline-dark" onclick="window.location.href='creadorcampania'">
                    <h2><i class="fas fa-plus"></i><br> Agregar Campaña</h2>
                </button>

                <div style="text-align: center;">
                    <hr>

                    <h3>Tus Campañas</h3>
                    <h3><i class="fas fa-users"></i></h3>

                    <div class="container-fluid" style="max-height:450px ;overflow-y: auto;" v-if="campañas != null" v-for="(campaña, key) in campañas" :key="campaña.id">

                        <b-button v-b-modal.modal-1 type="button" class="btn btn-pjs btn-dark" user="'campaña'" @click="sendInfo(campaña)"><h4>{{campaña.nombre}}</h4>
                            {{campaña.detalles}}
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
                id: <?= json_encode(Yii::$app->user->identity->id) ?>,
                campañas: {},
                showCampaña: false,
                campañaModal:{}
            }
        },
        mounted() {
            this.getCampañas();
        },
        methods: {
            getCampañas: function() {
               var self = this;
                axios.get('/apiv1/campania?id_personaje='+self.id)
                    .then(function(response) {
                        self.campañas = response.data;
                    })
                    .catch(function(error) {
                        //handle error
                        console.log(error);
                    })
                    .then(function() {
                        //always executed
                    });
            },
            deleteCampaña: function(id){

                for(let i = 0; i<this.campañas.length; i++){
                    if(this.campañas[i].id == id){
                        var campañaBorrado = this.campañas[i].nombre;
                        console.log(this.campañas.nombre);
                    }
                }
                Swal.fire({
                    type: 'warning',
                    title: 'Deseas borrar la campaña '+campañaBorrado+'?',
                    text: "¡Tendras que volverla a crear!",
                        
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, Borrala!',
                    cancelButtonText: 'No, mejor no'
                    }).then((result) => {
                        if (result.value) {
                                Swal.fire(
                                'Eliminada!',
                                'Campaña Borrada!',
                                'success'
                                );

                            var self = this;
                        
                            axios.delete('/apiv1/campania/' + id)
                                .then(function(response) {
                                    // handle success
                                    console.log(response.data);
                                    self.getCampañas()
                                    self.showCampaña = false;
                                })
                                .catch(function(error) {
                                    // handle error
                                    console.log(error);
                                })
                                .then(function() {
                                    // always executed
                                });
                        }
                    })
            },
            updateCampaña: function(id){
                window.location.href = '/master/creadorcampania?id='+id;
            },
            hojaCampaña: function(id){
                window.location.href = '/master/hojacampania?id_campania='+id;
            },
            sendInfo: function(campaña)
            {
                this.campañaModal = campaña;
            }
        }
    });
</script>
