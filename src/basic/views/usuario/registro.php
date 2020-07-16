<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Registro';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);

?>
<div class="site-registro">
    <div id="app">
        <h1>Registro</h1>

        <form v-if="!guardadoExito">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" v-model="usuario.username" name="username" id="username" class="form-control" placeholder="Ingrese username">
                <br>
                <label for="email">Email</label>
                <input type="text" v-model="usuario.email" name="email" id="email" class="form-control" placeholder="Ingrese email">
                <br>
                <label for="password">Password</label>
                <input type="password" v-model="usuario.password" name="password" id="password" class="form-control" placeholder="Ingrese password">
            </div>
            <button @click="addUsuario()" type="button" class="btn btn-primary m-3">Registrarse</button>
        </form>
        <div v-if="guardadoExito">
            {{this.exito}}
        </div>
    </div>
    <script>
        var app = new Vue({
            el: '#app',
            data: function() {
                return {
                    usuario: {},
                    guardadoExito: false,
                    exito: "El registro fue un exito",
                }
            },
            methods: {
                addUsuario: function() {
                    var self = this;
                    axios.post('/apiv1/usuario', self.usuario)
                        .then(function(response) {
                            console.log(response.data);
                            self.Usuario = {};
                        })
                }
            },
        })
    </script>
</div>