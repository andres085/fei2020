<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Modulo de Jugador';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>

<div class="container-fluid">
    <div id="app">
        <h1 style="text-align: center;"> Módulo del Jugador</h1>
        <br>

        <!-- PRUEBA TOAST 
        <button type="button" id="btnToast" class="btn btn-block btn-success">Mostrar Toast</button>

        <div class="toast" data-delay="2000" id="toast" style="position: absolute; bottom: 0; right: 0;">
            <div class="toast-header">
                Toast Header
            </div>
            <div class="toast-body">
            Some text inside the toast body
            </div>
        </div>
    FIN PRUEBA TOAST -->
        <div class="row">

            <div class="col-md-12">

                <button class="btn btn-block btn-outline-dark" onclick="window.location.href='creadorpj1'">
                    <h2><i class="fas fa-plus"></i><br> Agregar Personaje</h2>
                </button>

                <div style="text-align: center;">
                    <hr>

                    <h3>Tus Personajes</h3>
                    <h3><i class="fas fa-users"></i></h3>

                    <div class="container-fluid" style="max-height:450px ;overflow-y: auto;" v-if="usuarios.personajes!=null" v-for="personaje in usuarios.personajes">

                        <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalPj">{{personaje.nombre}}
                            <h6 style="font-size:smaller;"> {{personaje.raza}} - {{personaje.clase}} - {{personaje.nivel}}</h6>
                        </button>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="ModalPj">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="modal-title">{{ nombre }}</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <div class="row">

                    <div class="col-md-6 d-flex justify-content-center">
                        <h3>{{ raza }}</h3>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center">
                        <h3>{{ clase }}</h3>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <h3>{{ nivel }}</h3>
                    </div>
                </div>

                <div class="row my-3">

                    <div class="col-md-4 d-flex justify-content-center">

                        <div>
                            <h5>Fuerza</h5>
                            <input type="number" class="form-control input-stats-modalpj" value="0" disabled>
                            <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                        </div>

                    </div>

                    <div class="col-md-4 d-flex justify-content-center">

                        <div>
                            <h5>Destreza</h5>
                            <input type="number" class="form-control input-stats-modalpj" value="0" disabled>
                            <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                        </div>

                    </div>

                    <div class="col-md-4 d-flex justify-content-center">

                        <div>
                            <h5>Constitución</h5>
                            <input type="number" class="form-control input-stats-modalpj" value="0" disabled>
                            <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                        </div>


                    </div>

                </div>

                <div class="row my-3">

                    <div class="col-md-4 d-flex justify-content-center">

                        <div>
                            <h5>Inteligencia</h5>
                            <input type="number" class="form-control input-stats-modalpj" value="0" disabled>
                            <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                        </div>

                    </div>

                    <div class="col-md-4 d-flex justify-content-center">

                        <div>
                            <h5>Sabiduria</h5>
                            <input type="number" class="form-control input-stats-modalpj" value="0" disabled>
                            <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                        </div>

                    </div>

                    <div class="col-md-4 d-flex justify-content-center">

                        <div>
                            <h5>Carisma</h5>
                            <input type="number" class="form-control input-stats-modalpj" value="0" disabled>
                            <input type="text" class="form-control input-mod-modalpj" value="0" disabled>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" onclick="window.location.href='hojapj'" class="btn btn-success">Ver Hoja de Personaje </button>
            </div>

        </div>
    </div>
</div>





<script>
    var app = new Vue({
        el: '#app',
        data: function() {
            return {
                //usuarios: [],
                usuarios: [],
                id: <?= json_encode(Yii::$app->user->identity->id) ?>,
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
        }
    });

    // $(document).ready(function() {
    //     $("#btnToast").click(function() {
    //         $('#toast').toast('show');
    //     });
    // });
</script>