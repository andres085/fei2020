<?php

use yii\web\View;

$this->title = 'Trasfondos';


$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
$this->registerJsFile("https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js", ['position' => $this::POS_HEAD]);
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

                <br>
                <hr>
                <br>

                <label for="nombre-rasgo">Nombre Rasgo</label>
                <input type="text" class="form-control" v-model="trasfondo.nombre_rasgo" name="nombre-rasgo" id="nombre-rasgo" placeholder="Nombre del Rasgo">

                <br>

                <label for="rasgo">Rasgo</label>
                <textarea class="form-control" v-model="trasfondo.rasgo" name="rasgo" id="rasgo" cols="30" rows="10"></textarea>

                <br>
                <hr>
                <br>

                <h4>Tiene especialidades?</h4>

                <label for="espec_si">SI</label>
                <input type="radio" name="espec_si" id="espec_si" v-model="radio_espec" value="si">

                <label for="espec_no">NO</label>
                <input type="radio" name="espec-no" id="espec_no" v-model="radio_espec" value="no">
                
                <div v-show="radio_espec === 'si'">

                    <br>

                    <label for="nombre_espec">Nombre</label>
                    <input class="form-control" v-model="trasfondo.nombre_especialidad" type="text" id="nombre_especialidad" name="nombre_especialidad" placeholder="Nombre de la Especialidad">

                    <br>

                    <label for="espec">Descripción de la Especialidad</label>
                    <textarea class="form-control" v-model="trasfondo.especialidad" name="especialidad" id="especialidad" cols="30" rows="10"></textarea>

                </div>

                <div v-show="radio_espec === 'no'">

                </div>
                
                <br>

                

                <br>
                <hr>
                <br>

                <h4>Competencias de Habilidades</h4>

                <template>
                  <div>
                    <b-form-select v-model="selected" :options="options" multiple :select-size="18"></b-form-select>
                    <div class="mt-3"></div>
                  </div>
                </template>

            </div>


            <button v-if="isNewRecord" @click="addTrasfondo()" type="button" class="btn btn-primary m-3">Crear</button>
            <button v-if="!isNewRecord" @click="nuevoTrasfondo()" type="button" class="btn btn-success m-3">Nuevo</button>
            <button v-if="!isNewRecord" @click="updTrasfondo(trasfondo.id)" type="button" class="btn btn-primary m-3">Actualizar</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Rasgo</th>
                    <th>Especialidad</th>
                </tr>
            </thead>
            <tbody class="">
                <tr v-for="(trasfondo, key) in trasfondos" v-bind:key="trasfondo.id">
                    <td>{{trasfondo.id}}</td>
                    <td>{{trasfondo.nombre}}</td>
                    <td>{{trasfondo.descripcion}}</td>
                    <td>{{trasfondo.nombre_rasgo}}</td>
                    <td>{{trasfondo.nombre_especialidad}}</td>
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
                radio_espec: null,
                trasfondo: {},
                trasfondos: [],
                isNewRecord: true,

                selected: [''], // Array reference
                options: [
                { value: '1', text: 'Acrobacias' },
                { value: '2', text: 'Atletismo' },
                { value: '3', text: 'Arcana' },
                { value: '4', text: 'Engaño'},
                { value: '5', text: 'Historia' },
                { value: '6', text: 'Interpretación' },
                { value: '7', text: 'Intimidación' },
                { value: '8', text: 'Investigación' },
                { value: '9', text: 'Juego de Manos' },
                { value: '10', text: 'Medicina' },
                { value: '11', text: 'Naturaleza' },
                { value: '12', text: 'Percepción' },
                { value: '13', text: 'Perspicacia' },
                { value: '14', text: 'Persuasión' },
                { value: '15', text: 'Religión' },
                { value: '16', text: 'Sigilo' },
                { value: '17', text: 'Supervivencia' },
                { value: '18', text: 'Trato con Animales' },
                ]
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
                this.isNewRecord = false;
            },
            updTrasfondo: function(key) {
                var self = this;
                const params = new URLSearchParams();
                params.append('nombre', self.trasfondo.nombre);
                params.append('descripcion', self.trasfondo.descripcion);
                params.append('nombre_rasgo', self.trasfondo.nombre_rasgo);
                params.append('rasgo', self.trasfondo.rasgo);
                params.append('nombre_espec', self.trasfondo.nombre_especialidad);
                params.append('espec', self.trasfondo.especialidad);
                axios.patch('/apiv1/trasfondo/' + key, self.trasfondo)
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        self.getTrasfondo();
                        self.trasfondo = {};
                        self.isNewRecord = true;
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function() {
                        // always executed
                    });

            },
            nuevoTrasfondo: function() {
                this.trasfondo = {};
                this.isNewRecord = false;
            }
        }
    })
</script>