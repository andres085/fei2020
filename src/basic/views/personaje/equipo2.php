<?php

use yii\web\View;

$this->title = 'Objetos';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>

<div class="site-equipo">
    <div class="container-fluid" id="app">

        <ul class="nav nav-tabs nav-fill" id="pills-tab" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="pills-armas-tab" data-toggle="pill" href="#pills-armas" role="tab">Armas</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-armadura-tab" data-toggle="pill" href="#pills-armadura" role="tab">Armadura</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-objetos-tab" data-toggle="pill" href="#pills-objetos" role="tab">Objetos</a>
            </li>

        </ul>

        <div class="tab-content" id="pills-tabContent">

            <!-- ARMAS -->
            <div class="tab-pane fade show active" id="pills-armas" role="tabpanel">

                <div class="d-flex my-3 justify-content-center">
                    <h1>ARMAS</h1>
                </div>

                <form>

                    <div class="form-group">

                        <label for="nombre">Nombre</label>
                        <input type="text" v-model="objeto.nombre" name="armanombre" id="armanombre" class="form-control" placeholder="Nombre"><br>

                        <label for="nombre">Descripción</label>
                        <input type="text" v-model="objeto.descripcion" name="armadescripcion" id="armadescripcion" class="form-control" placeholder="Descripción"><br>

                        <label for="nombre">Tipo de Objeto</label>
                        <input type="text" v-model="objeto.tipo_obj" name="armatobj" id="armatobj" class="form-control" placeholder="Tipo de Objeto"><br>

                        <label for="nombre">Precio</label>
                        <input type="text" v-model="objeto.valor" name="armaprecio" id="armaprecio" class="form-control" placeholder="Precio"><br>

                        <label for="nombre">Peso</label>
                        <input type="text" v-model="objeto.peso" name="armapeso" id="armapeso" class="form-control" placeholder="Peso"><br>

                        <label for="nombre">Propiedades</label>
                        <input type="text" v-model="objeto.propiedades" name="armaprop" id="armaprop" class="form-control" placeholder="Propiedad"><br>

                        <label for="nombre">Daño</label>
                        <input type="text" v-model="objeto.daño" name="armadaño" id="armadaño" class="form-control" placeholder="Daño"><br>

                        <label for="nombre">Tipo de Daño</label>
                        <input type="text" v-model="objeto.tipo_daño" name="armatdaño" id="armatdaño" class="form-control" placeholder="Tipo de Daño"><br>

                        <label for="nombre">Categoria</label>
                        <input type="text" v-model="objeto.categoria" name="armacat" id="armacat" class="form-control" placeholder="Categoria"><br>

                    </div>

                    <button v-if="isNewRecord" @click="addObjeto()" type="button" class="btn btn-primary m-3">Crear</button>
                    <button v-if="!isNewRecord" @click="nuevoObjeto()" type="button" class="btn btn-success m-3">Nuevo</button>
                    <button v-if="!isNewRecord" @click="updObjeto(objeto.id)" type="button" class="btn btn-primary m-3">Actualizar</button>

                </form>

            </div>

            <!-- ARMADURAS -->
            <div class="tab-pane fade" id="pills-armadura" role="tabpanel">

                <div class="d-flex my-3 justify-content-center">
                    <h1>ARMADURAS</h1>
                </div>

                <form>

                    <div class="form-group">

                        <label for="nombre">Nombre</label>
                        <input type="text" v-model="objeto.nombre" name="armaduranombre" id="armaduranombre" class="form-control" placeholder="Nombre"><br>

                        <label for="nombre">Descripción</label>
                        <input type="text" v-model="objeto.descripcion" name="armaduradescripcion" id="armaduradescripcion" class="form-control" placeholder="Descripción"><br>

                        <label for="nombre">Tipo de Objeto</label>
                        <input type="text" v-model="objeto.tipo_obj" name="armaduratobj" id="armaduratobj" class="form-control" placeholder="Tipo de Objeto"><br>

                        <label for="nombre">Precio</label>
                        <input type="text" v-model="objeto.valor" name="armaduraprecio" id="armaduraprecio" class="form-control" placeholder="Precio"><br>

                        <label for="nombre">Peso</label>
                        <input type="text" v-model="objeto.peso" name="armadurapeso" id="armadurapeso" class="form-control" placeholder="Peso"><br>

                        <label for="nombre">Propiedades</label>
                        <input type="text" v-model="objeto.propiedades" name="armaduraprop" id="armaduraprop" class="form-control" placeholder="Propiedad"><br>

                        <label for="nombre">Defensa</label>
                        <input type="text" v-model="objeto.defensa" name="armaduradef" id="armaduradef" class="form-control" placeholder="Defensa"><br>

                        <label for="nombre">Categoria</label>
                        <input type="text" v-model="objeto.categoria" name="armaduracat" id="armaduracat" class="form-control" placeholder="Categoria"><br>

                        <label for="nombre">Penalización</label>
                        <input type="text" v-model="objeto.penalizacion" name="armadurapen" id="armadurapen" class="form-control" placeholder="Penalización"><br>

                    </div>

                    <button v-if="isNewRecord" @click="addObjeto()" type="button" class="btn btn-primary m-3">Crear</button>
                    <button v-if="!isNewRecord" @click="nuevoObjeto()" type="button" class="btn btn-success m-3">Nuevo</button>
                    <button v-if="!isNewRecord" @click="updObjeto(objeto.id)" type="button" class="btn btn-primary m-3">Actualizar</button>

                </form>

            </div>

            <!-- OBJETOS -->

            <div class="tab-pane fade" id="pills-objetos" role="tabpanel">

                <div class="d-flex my-3 justify-content-center">
                    <h1>OBJETOS</h1>
                </div>

                <form>

                    <div class="form-group">

                        <label for="nombre">Nombre</label>
                        <input type="text" v-model="objeto.nombre" name="objetonombre" id="objetonombre" class="form-control" placeholder="Nombre"><br>

                        <label for="nombre">Descripción</label>
                        <input type="text" v-model="objeto.descripcion" name="objetodescripcion" id="objetodescripcion" class="form-control" placeholder="Descripción"><br>

                        <label for="nombre">Tipo de Objeto</label>
                        <input type="text" v-model="objeto.tipo_obj" name="tobj" id="tobj" class="form-control" placeholder="Tipo de Objeto"><br>

                        <label for="nombre">Precio</label>
                        <input type="text" v-model="objeto.valor" name="objetoprecio" id="objetoprecio" class="form-control" placeholder="Precio"><br>

                        <label for="nombre">Peso</label>
                        <input type="text" v-model="objeto.peso" name="objetopeso" id="objetopeso" class="form-control" placeholder="Peso"><br>

                        <label for="nombre">Categoria</label>
                        <input type="text" v-model="objeto.categoria" name="armaduracat" id="armaduracat" class="form-control" placeholder="Categoria"><br>

                        <label for="nombre">Propiedades</label>
                        <input type="text" v-model="objeto.propiedades" name="objprop" id="objprop" class="form-control" placeholder="Propiedad"><br>


                    </div>

                    <button v-if="isNewRecord" @click="addObjeto()" type="button" class="btn btn-primary m-3">Crear</button>
                    <button v-if="!isNewRecord" @click="nuevoObjeto()" type="button" class="btn btn-success m-3">Nuevo</button>
                    <button v-if="!isNewRecord" @click="updObjeto(objeto.id)" type="button" class="btn btn-primary m-3">Actualizar</button>

                </form>

            </div>

        </div>

        <div>
        
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Valor</th>
                        <th>Peso</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr v-for="(objeto, key) in objetos" v-bind:key="objeto.id">
                        <td>{{objeto.nombre}}</td>
                        <td>{{objeto.descripcion}}</td>
                        <td>{{objeto.valor}}</td>
                        <td>{{objeto.peso}}</td>
                        <td>
                            <button v-on:click="deleteObjetos(objeto.id)" type="button" class="btn btn-danger">Borrar</button>
                        </td>
                        <td>
                            <button v-on:click="editObjeto(key)" type="button" class="btn btn-danger">Actualizar</button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        
    </div>
</div>
<script>
    var app = new Vue({
        el: '#app',
        data: function() {
            return {
                selected: null,
                objeto: {},
                objetos: [],
                isNewRecord: true,
            }
        },
        mounted() {
            this.getObjetos();
        },
        methods: {
            getObjetos: function() {
                var self = this;
                axios.get('/apiv1/objeto')
                    .then(function(response) {
                        self.objetos = response.data;
                    })
                    .catch(function(error) {
                        //handle error
                        console.log(error);
                    })
                    .then(function() {
                        //always executed
                    });
            },
            deleteObjetos: function(id) {
                var self = this;
                axios.delete('/apiv1/objeto/' + id)
                    .then(function(response) {
                        // handle success
                        console.log("borrar el objeto con id: " + id);
                        console.log(response.data);
                        self.getObjetos()
                        alert("Objeto borrado con exito")
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);

                    })
                    .then(function() {
                        // always executed
                    });
            },
            addObjeto: function() {
                var self = this;
                axios.post('/apiv1/objeto', self.objeto)
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        self.getObjetos()
                        self.objeto = {};
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);

                    })
                    .then(function() {
                        // always executed
                    });
            },
            editObjeto: function(key) {
                this.objeto = Object.assign({}, this.objetos[key]);
                this.objeto.key = key;
                this.isNewRecord = false;
            },
            updObjeto: function(key) {
                var self = this;
                const params = new URLSearchParams();
                params.append('objeto.nombre', self.objeto.nombre);
                params.append('objeto.descripcion', self.objeto.descripcion);
                params.append('objeto.valor', self.objeto.valor);
                params.append('objeto.peso', self.objeto.peso);
                params.append('objeto.daño', self.objeto.daño);
                params.append('objeto.tipo_daño', self.objeto.tipo_daño);
                params.append('objeto.propiedades', self.objeto.propiedades);
                params.append('objeto.categoria', self.objeto.categoria);
                params.append('objeto.defensa', self.objeto.defensa);
                params.append('objeto.penalizacion', self.objeto.penalizacion);
                axios.patch('/apiv1/objeto/' + key, self.objeto)
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        self.getObjetos();
                        self.objeto = {};
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
            nuevoObjeto: function() {
                this.objeto = {};
                this.isNewRecord = true;
            }
        }
    })
</script>
