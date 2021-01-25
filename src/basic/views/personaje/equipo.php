<?php

use yii\web\View;

$this->title = 'Objetos';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>

<div class="site-equipo">
    <div class="container-fluid" id="app">

    <div>
        <button class="btn btn-outline-dark" onclick="window.history.back()">
            <i class="fas fa-arrow-left"></i> Volver
        </button>
    </div>

        <div class="table-responsive">
        
            <table class="table table-hover table-striped">
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

        <br>

        <div>
            <button class="btn btn-success btn-block" @click="mostrar = !mostrar">Agregar un objeto</button>
        </div>

        <br>
        <hr>
        <br>

        <div v-show="mostrar">
        
            <ul class="nav nav-tabs nav-fill" id="pills-tab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link" id="pills-armas-tab" data-toggle="pill" href="#pills-armas" role="tab">Armas</a>
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
                <div class="tab-pane fade" id="pills-armas" role="tabpanel">

                    <div class="d-flex my-3 justify-content-center">
                        <h1>ARMAS</h1>
                    </div>

                    <form>

                        <div class="form-group">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nombrearma">Nombre</label>
                                    <input type="text" v-model="objeto.nombre" name="nombrearma" id="nombrearma" class="form-control" placeholder="Nombre"><br>
                                </div>

                                <div class="col-md-6">
                                    <label for="categoriaarma">Categoria</label>
                                    <select class="form-control" name="categoriaarma" id="categoria" placeholder="Seleccione una opción">
                                        <option></option>
                                        <option value="simple">Simple</option>
                                        <option value="marcial">Marcial</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <label for="nombre">Descripción</label>
                                    <textarea class="form-control" name="descripcionarma" id="descripcionarma" cols="30" rows="5"></textarea>
                                    <br>
                                </div>
                            </div>

                            <div class="row">
                            
                                <div class="col-md-4">
                                    <label for="dañoarma">Daño</label>
                                    <input class="form-control" type="text">
                                </div>

                                <div class="col-md-4">
                                    <label for="tipodañoarma">Tipo de Daño</label>
                                    <select class="form-control" name="tipodañoarma" id="tipodañoarma">
                                        <option></option>
                                        <option value="contundente">Contundente</option>
                                        <option value="cortante">Cortante</option>
                                        <option value="perforante">Perforante</option>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="moddañoarma">Mod. Daño y Ataque</label>
                                    <select class="form-control" name="moddañoarma" id="moddañoarma">
                                        <option></option>
                                        <option value="fuerza">Fuerza</option>
                                        <option value="destreza">Destreza</option>
                                        <option value="fuedes">Fuerza o Destreza</option>
                                    </select>
                                    <br>
                                </div>                                

                            </div>

                            <div class="row">
                            
                                <div class="col-md-12">
                                
                                    <!--<multiselect 
                                      v-model="selectedProp"
                                      :value="selectedFruit"
                                      :options="options"
                                      :multiple="true"
                                      :max="maxItemSelected"
                                      @input="maxSelected()"
                                      >
                                    </multiselect>-->
                                
                                    <label for="propiedades">Propiedades</label>
                                    <select multiple class="form-control" name="propiedadesarma" id="propiedadesarma">
                                        
                                        <option @click="alcance = !alcance" value="alcance">Alcance</option>
                                        <option value="arrojadiza">Arrojadiza</option>
                                        <option value="recarga">Recarga</option>
                                        <option value="distancia">Distancia</option>
                                        <option value="especial">Especial</option>
                                        <option value="ligera">Ligera</option>
                                        <option value="municion">Munición</option>
                                        <option value="pesada">Pesada</option>
                                        <option value="sutil">Sutil</option>
                                        <option value="versatil">Versatil</option>
                                    
                                    </select>
                                    <br>
                                </div>
                            
                            </div>

                            <div v-show="alcance" class="row justify-content-center">
                                
                                <div class="col-md-4">
                                    <label for="rangoarma">Rango</label>
                                    <input class="form-control" name="rangoarma" type="text">
                                    <br>
                                </div>
                                
                            </div>

                            <div class="row">
                            
                                <div class="col-md-6">
                                    <label for="precioarma">Precio</label>
                                    <div class="input-group">
                                      <input type="text" name="precioarma" class="form-control">
                                      <div class="input-group-append">
                                        <select name="selectprecioarma" class="form-control
                                        " id="selectprecioarma">
                                            <option value="cobre">pc</option>
                                            <option value="plata">pp</option>
                                            <option value="oro">po</option>
                                            <option value="platino">ppl</option>
                                        </select>                                                                                                                                                                                                                                                                                        
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="pesoarma">Peso</label>
                                    <input class="form-control" name="pesoarma" type="text">
                                </div>

                            </div>
                            
                        </div>

                        <button v-if="isNewRecord" @click="addObjeto()" type="button" class="btn btn-success m-3">Crear</button>
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

                        <button v-if="isNewRecord" @click="addObjeto()" type="button" class="btn btn-success m-3">Crear</button>
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

                        <button v-if="isNewRecord" @click="addObjeto()" type="button" class="btn btn-success m-3">Crear</button>
                        <button v-if="!isNewRecord" @click="nuevoObjeto()" type="button" class="btn btn-success m-3">Nuevo</button>
                        <button v-if="!isNewRecord" @click="updObjeto(objeto.id)" type="button" class="btn btn-primary m-3">Actualizar</button>

                    </form>

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
                mostrar: false,
                selected: null,
                objeto: {},
                objetos: [],
                isNewRecord: true,

                alcance: false,

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
