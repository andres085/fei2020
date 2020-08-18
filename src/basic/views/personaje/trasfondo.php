<?php

use yii\web\View;

$this->title = 'Modulo de trasfondos';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>

<div class="site-trasfondo">
    <div class="container-fluid" id="app">

        <form action="">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" v-model="trasfondo.nombre" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                <br>
                <label for="descripcion">Descripcion</label>
                <input type="text" v-model="trasfondo.descripcion" name="descripcion" id="descripcion" class="form-control" placeholder="Descripcion">
            </div>
            <button @click="addTrasfondo()" type="button" class="btn btn-primary m-3">Crear</button>
            <button @click="updTrasfondo(trasfondo.id)" type="button" class="btn btn-primary m-3">Actualizar</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Borrado</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(trasfondo, key) in trasfondos" v-bind:key="trasfondo.id">
                    <td>{{trasfondo.id}}</td>
                    <td>{{trasfondo.nombre}}</td>
                    <td>{{trasfondo.descripcion}}</td>
                    <td>
                        <button v-on:click="deleteTrasfondo(trasfondo.id)" type="button" class="btn btn-danger">Borrar</button>
                    </td>
                    <td>
                        <button v-on:click="editTrasfondo(key)" type="button" class="btn btn-danger">Actualizar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    var app = new Vue({
        el: '#app',
        data: function() {
            return {
                trasfondo: {},
                trasfondos: [],
            }
        },
        mounted() {
            this.getTrasfondo();
        },
        methods: {
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
            deleteTrasfondo: function(id) {
                var self = this;
                axios.delete('/apiv1/trasfondo/' + id)
                    .then(function(response) {
                        // handle success
                        console.log("borrar el trasfondo id: " + id);
                        console.log(response.data);
                        self.getTrasfondo()
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);

                    })
                    .then(function() {
                        // always executed
                    });
            },
            addTrasfondo: function() {
                var self = this;
                axios.post('/apiv1/trasfondo', self.trasfondo)
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        self.getTrasfondo()
                        self.trasfondo = {};
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);

                    })
                    .then(function() {
                        // always executed
                    });
            },
            editTrasfondo: function(key) {
                this.trasfondo = Object.assign({}, this.trasfondos[key]);
                this.trasfondo.key = key;
                //this.isNewRecord = false;
            },
            updTrasfondo: function(key) {
                var self = this;
                const params = new URLSearchParams();
                params.append('nombre', self.trasfondo.nombre);
                params.append('descripcion', self.trasfondo.descripcion);
                axios.patch('/apiv1/trasfondo/' + key, self.trasfondo)
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        self.getTrasfondo();
                        self.trasfondo = {};
                        //self.isNewRecord = true;
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function() {
                        // always executed
                    });

            },
        }
    })
</script>