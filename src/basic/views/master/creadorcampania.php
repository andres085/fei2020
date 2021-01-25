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

<div class="container-fluid" id="app">

<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/site/index">Inicio</a></li>
            <li class="breadcrumb-item active"><a href="/site/selector">Selector</a></li>
            <li class="breadcrumb-item active"><a href="/master/campania">Modulo Campaña</a></li>
            <li class="breadcrumb-item active" aria-current="/master/creadorcampania">Creador Campaña</li>
        </ol>
    </nav>

    <h3>Ingresa los datos de la Campaña</h3>

        <div class="row">

            <div class="col-md-9">
                <h1>Nombre</h1>
                     <input class="form-control" type="text" v-model="campania.nombre" id="nombre" name="nombre">
                    <br>
                    <span class="text-danger" v-if="errors.nombre" >{{errors.nombre}}</span>
            </div>
        </div>

        <div class="row my-3">

            <div class="col-md-9">
                <h1>Detalles</h1>
                     
                     <textarea class="form-control" v-model="campania.detalles" name="detalles" id="detalles" cols="30" rows="8"></textarea>

                    <br>
                    <span class="text-danger" v-if="errors.nombre" >{{errors.detalles}}</span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
            
            <button v-if="isNewRecord" @click="addCampania()" type="button" class="btn btn-block btn-success m-3">Crear</button>
            <button v-if="!isNewRecord" @click="nuevaCampania()" type="button" class="btn btn-block btn-success m-3">Nueva</button>
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
                    errors:{},
                    id_campania:"",
                    campActualizar:{},
                }
            },
            mounted(){
                this.getIdcampania();
                this.getCampaniaupd();
            },
            methods:{
                normalizeErrors: function(errors) {
                    var allErrors = {};
                    for (var i = 0; i < errors.length; i++) {
                        allErrors[errors[i].field] = errors[i].message;
                    }
                    return allErrors;
                },
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
                                window.location.href = '/master/campania';
                                }
                            })

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
                getCampania:function(id){
                    var self = this;
                    axios.get('/apiv1/campania/'+id)
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
                getIdcampania:function(){
                    let url = window.location.href;
                    let id = url.substring(url.lastIndexOf('=') + 1);
                    this.id_campania = Number(id);
                },
                getCampaniaupd:function(){
                    if(this.id_campania){
                        console.log("Existe");
                        this.isNewRecord = false;
                        this.getCampania(this.id_campania);
                    }
                    else{
                        console.log("No existe");
                    }
                },
                updateCampania:function(id){
                    var self = this;
                    const params = new URLSearchParams();
                    params.append('nombre', self.campania.nombre);
                    params.append('detalles', self.campania.detalles);
                    axios.patch('/apiv1/campania/' + id, self.campania)
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        
                        Swal.fire({
                            icon: 'success',
                            title: 'Campaña Actualizada',
                            confirmButtonText: 'Volver',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = '/master/campania';
                                }
                            })
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error.response.data);
                        self.errors = self.normalizeErrors(error.response.data);
                        console.log(self.errors);
                    })
                    .then(function() {
                        // always executed
                    });
                },
                nuevaCampania:function(){
                    this.campania = {};
                    this.campania.id_usuario = <?= json_encode(Yii::$app->user->identity->id) ?>;
                    this.isNewRecord = true;
                }
            }
            
    })
</script>
