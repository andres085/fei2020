<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Modulo de Master';

$this->registerCssFile("//unpkg.com/bootstrap/dist/css/bootstrap.min.css", ['position' => $this::POS_HEAD]);
$this->registerCssFile("//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css", ['position' => $this::POS_HEAD]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js", ['position' => $this::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>

<div class="container-fluid">
    <div id="app">
       
       <h3>Campania</h3>

       <div id="app">
        <h1 style="text-align: center;"> Módulo del Jugador</h1>
        <br>


        <!-- MODAL DE LA CAMPAÑA -->
        <b-modal id="modal-1" title="Detalle Campaña" v-model="showCampaña">
            
            <div class="row my-3">
                <h3>Aca van los datos de la campaña</h3>
            </div>


            <template #modal-footer="{ ok, cancel, hide }">

                <button @click="" class="btn btn-outline-success btn-block">Ver Campaña</button>
                
                <button @click="" class="btn btn-outline-success btn-block">Actualizar</button>
            
                <b-button class="btn btn-danger btn-block" size="sm" variant="danger" @click="">
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

                    <div class="container-fluid" style="max-height:450px ;overflow-y: auto;">

                        <b-button v-b-modal.modal-1 type="button" class="btn btn-pjs btn-dark" user="'personaje'" @click="sendInfo(personaje)"><h4>Campaña Nombre</h4>
                            Campaña Detalles
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
                showCampaña: false,
            }
        },
        mounted() {
            
        },
        methods: {
            getCampañas: function() {
               
            },
            deleteCampaña: function(id){
                
            },
            updateCampaña: function(id){
                window.location.href = ''+id;
            },
            hojaCampaña: function(id){
                window.location.href = ''+id;
            },
            sendInfo: function(campaña)
            {
                this.campaña = campaña;
            }
        }
    });
</script>
