<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Modulo de trasfondos';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>
<div class="site-trasfondos">

    <div id="app">

        <form>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" v-model="trasfondo.nombre" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                <br>
                <label for="descripcion">Descripcion</label>
                <input type="text" v-model="trasfondo.descripcion" name="descripcion" id="descripcion" class="form-control" placeholder="Descripcion">
            </div>
            <button v-if="isNewRecord" @click="addTrasfondo()" type="button" class="btn btn-primary m-3">Crear</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="trasfondo in trasfondos">
                    <td>{{trasfondo.id}}</td>
                    <td>{{trasfondo.nombre}}</td>
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
                trasfondos: [],
                trasfondo: {},
                isNewRecord: true,
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
                        self.trasfondo = response.data;
                    })
                    .catch(function(error) {
                        //handle error
                        console.log(error);
                    })
                    .then(function() {
                        //always executed
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
            }
        }
    })
</script>