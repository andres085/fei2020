<?php

use yii\web\View;

$this->title = 'Modulo de Master';

//$userId = Yii::$app->user->identity->id;

$this->registerCssFile("//unpkg.com/bootstrap/dist/css/bootstrap.min.css", ['position' => $this::POS_HEAD]);
$this->registerCssFile("//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css", ['position' => $this::POS_HEAD]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js", ['position' => $this::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);

?>

<div id="app">
    <h3>Ingresa los datos de la Campaña</h3>

        <div class="row">

            <div class="col-md-9">
                <h1>Nombre</h1>
                     <input type="text" v-model="campania.nombre" id="nombre" name="nombre">
                    <br>
                    <span class="text-danger" v-if="errors.nombre" >{{errors.nombre}}</span>
            </div>
        </div>

        <div class="row my-3">

            <div class="col-md-9">
                <h1>Detalles</h1>
                     <input type="text" v-model="campania.detalles" id="detalles" name="detalles">
                    <br>
                    <span class="text-danger" v-if="errors.nombre" >{{errors.detalles}}</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
            
            <button v-if="isNewRecord" @click="addCampania()" type="button" class="btn btn-block btn-success m-3">Crear</button>
            <button v-if="!isNewRecord" @click="updateCampania(id_campania)" type="button" class="btn btn-block btn-success m-3">Actualizar</button>

            </div>
        </div>
       
</div>  
<script>
    var app = new Vue({
            el: '#app',
            data: function() {
                return {
                    campania:{
                        id_usuario: <?= json_encode(Yii::$app->user->identity->id) ?>,
                    },
                    isNewRecord: true,
                    errors:{}
                }
            },
            methods:{
                addCampania:function(){
                    var self = this;
                    axios.post('/apiv1/campania', self.campania)
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        this.campania = response.data;
        
                        Swal.fire({
                            icon: 'success',
                            title: 'Campaña Creada',
                            confirmButtonText: 'Volver',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/master/creadorcampania';
                                }
                            })

                    })
                    .catch(function(error) {
                       //handle error
                        console.log(error.response.data);
                        //self.errors = self.normalizeErrors(error.response.data);
                        //console.log(self.errors);

                    })
                    .then(function() {
                        // always executed
                    });
                }
            },
    })
</script>
