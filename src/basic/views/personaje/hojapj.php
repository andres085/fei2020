<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Hoja de Personaje';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile("//unpkg.com/bootstrap/dist/css/bootstrap.min.css", ['position' => $this::POS_HEAD]);
$this->registerCssFile("//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css", ['position' => $this::POS_HEAD]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js", ['position' => $this::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js", ['position' => View::POS_HEAD]);
echo $this->render('/components/CrudDiario');
?>

<div class="container-fluid" id="app">

        <ul class="nav nav-tabs nav-fill" id="pills-tab" role="tablist">

            <li class="nav-item">
                <a class="nav-link active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab">Información</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-trasfondo-tab" data-toggle="pill" href="#pills-trasfondo" role="tab">Trasfondo</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-objetos-tab" data-toggle="pill" href="#pills-objetos" role="tab">Objetos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="pills-diario-tab" data-toggle="pill" href="#pills-diario" role="tab">Diario</a>
            </li>

        </ul>
        <div class="tab-content" id="pills-tabContent">

            <!-- INFORMACION -->
            <div class="tab-pane fade show active" id="pills-info" role="tabpanel">
                
                <!-- NOMBRE -->
                <div class="d-flex my-3 justify-content-center">
                    <h1>{{ personaje.nombre }}</h1>
                </div>

                <!-- RAZA -->
                <div class="d-flex my-3">
                    <button class="btn btn-block btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapse-raza" aria-expanded="false" aria-controls="collapseExample">
                    <h3>{{personaje.raza}}</h3>
                    </button>

                    <div class="collapse" id="collapse-raza">
                        <div class="card card-body">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis minima quam expedita, nesciunt fugiat numquam exercitationem quo voluptas eaque. Veritatis dolor, neque pariatur porro alias harum iusto? Temporibus, laboriosam sit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, sint, similique molestiae ea quia exercitationem perspiciatis, aperiam ipsam nobis laboriosam doloribus! Quasi ullam expedita optio incidunt at? Quod, consequuntur atque.
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis reprehenderit, consequatur itaque et rerum modi cupiditate sed iusto ducimus ipsa nulla voluptates blanditiis accusamus mollitia deleniti consequuntur harum eum iste.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, excepturi distinctio ipsa repellat alias animi dolore ad aspernatur ut, suscipit aliquid unde possimus delectus! Sit ea aperiam sed in? Adipisci?
                        </div>
                    </div>
                
                </div>

                <hr>

                <!-- CLASE -->
                <div class="d-flex my-3">
                    <button class="btn btn-block btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapse-clase" aria-expanded="false" aria-controls="collapseExample">
                    <h3>{{personaje.clase}}</h3>
                    </button>

                    <div class="collapse" id="collapse-clase">
                        <div class="card card-body">
                            
                            <h5>Dado de Golpe:</h5>

                            <h5>Rasgos de la clase:</h5>

                            <div style="width: 800px;" id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0" style="text-align: center;">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#rasgo1" aria-expanded="true" aria-controls="collapseOne">
                                            Rasgo #1
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="rasgo1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0" style="text-align: center;">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#rasgo2" aria-expanded="false" aria-controls="collapseTwo">
                                            Rasgo #2
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="rasgo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0" style="text-align: center;">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#rasgo3" aria-expanded="false" aria-controls="collapseThree">
                                            Rasgo #3
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="rasgo3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <hr>

                <!-- CARACTERISTICAS -->

                <div class="d-flex my-3 justify-content-center">
                    <h3>Atributos</h3>
                </div>

                <div class="row">

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Fuerza</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.fuerza}}</h5>
                                <h6 class="card-text">+3</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Destreza</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.destreza}}</h5>
                                <h6 class="card-text">+3</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Constitución</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.constitucion}}</h5>
                                <h6 class="card-text">+3</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Inteligencia</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.inteligencia}}</h5>
                                <h6 class="card-text">+3</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Sabiduria</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.sabiduria}}</h5>
                                <h6 class="card-text">+3</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">

                                <h5 class="card-title">Carisma</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.carisma}}</h5>
                                <h6 class="card-text">+3</h6>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TRASFONDO -->
            <div class="tab-pane fade" id="pills-trasfondo" role="tabpanel">
                
                <div class="my-4" style="text-align: center;">
                    <h1>Datos de Trasfondo</h1>
                </div>

                <hr>

                <div>
                    <h3><b>Trasfondo: {{personaje.trasfondo.nombre}}</b></h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut deleniti voluptate placeat mollitia qui, voluptatibus, numquam accusantium minus quis voluptates quo. Est facere sit, iusto in nulla doloribus officia officiis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis consectetur totam ut quis repellat amet mollitia tenetur omnis. Numquam labore ad perferendis. Earum ab atque voluptatibus doloremque. Numquam, accusantium tempore.
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <h6><b>Competencia con Habilidades:</b></h6>
                            <ul class="list-unstyled">
                                <li> {{personaje.trasfondo.competencia1}} </li>
                                <li> {{personaje.trasfondo.competencia2}} </li>
                            </ul>

                            <h6><b>Competencia con Equipo:</b></h6>
                            <ul class="list-unstyled">
                                <li> {{personaje.trasfondo.competencia1}} </li>
                                <li> {{personaje.trasfondo.competencia2}} </li>
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <h6><b>Rasgo:</b> {{personaje.trasfondo.nombre_rasgo}} </h6>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, officia! Sequi illum odit perferendis molestias veniam modi ipsa laborum laudantium? Voluptatum magnam ipsum repellendus facilis nemo quas dolor quasi esse.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab facilis id itaque incidunt natus quasi reiciendis aliquam officiis veniam velit voluptatem facere necessitatibus dolorum assumenda, sint, a esse? Pariatur?
                            </p>

                            <h6><b>Especialidad:</b> {{personaje.trasfondo.nombre_especialidad}} </h6>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio recusandae minus eos earum dicta ducimus beatae, tempore, obcaecati cumque mollitia labore pariatur incidunt ad autem optio suscipit inventore ex quod.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse laborum aut tempore nemo ullam, aperiam deserunt iure qui asperiores est accusamus amet assumenda libero mollitia iusto alias quidem ab accusantium?
                            </p>
                        </div>
                    </div>


                    <div>
                        <h3><b>Personalidad</b></h3>

                        <p>{{personaje.personalidad}}
                        </p>
                    </div>

                    <hr>

                    <div>
                        <h3><b>Ideales:</b></h3>

                        <p>{{personaje.ideal}}
                        </p>
                    </div>

                    <hr>

                    <div>
                        <h3><b>Vinculos:</b></h3>

                        <p>
                        {{personaje.vinculo}}
                        </p>
                    </div>

                    <hr>

                    <div>
                        <h3><b>Defectos:</b></h3>

                        <p>
                        {{personaje.defecto}}
                        </p>
                    </div>

                </div>
                    
            </div>

             <!-- OBJETOS -->
            <div class="tab-pane fade" id="pills-objetos" role="tabpanel">
        
                <div class="my-4" style="text-align: center;">
                    <h1>Tus Objetos</h1>
                </div>

                <b-button v-b-modal.modal-1 type="button" class="btn btn-block btn-success" user="" @click="">Agregar un objeto a tu inventario
                </b-button>


                <div>
                    <table class="table table-responisve table-hover table-sm">
                        
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Descripcion</th>
                                <th>Valor</th>
                                <th>Peso</th>
                                <th>Editar</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr class="clickable-row" data-toggle="modal" data-target="#modalEditarObj" style="cursor: pointer;" v-for="(objeto, key) in personaje.objetos" :key="objeto.id">
                                <td>{{objeto.nombre}}</td>
                                <td>{{objeto.tipo_obj}}</td>
                                <td>{{objeto.descripcion}}</td>
                                <td>{{objeto.valor}}</td>
                                <td>{{objeto.peso}}</td>
                                <td><button v-on:click="quitarObj(objeto.id)" type="button" class="btn btn-danger">Quitar</button></td>
                            </tr>
            
                        </tbody>
                    </table>
                </div>

                <!-- Modal Objeto -->
                <b-modal id="modal-1" title="Agregar Objeto" v-model="showModal">  

                    <form action="">
                        <div>
                            <select class="form-control" v-model="objetoSeleccionado" @change="guardarId()">
                                <option value="">Seleccione un Objeto</option>
                                <option v-for="(objeto, index) in objetos" :key="index" :value="objeto">{{objeto.nombre}}</option>
                            </select>
                        </div><br>
                            
                        <div>
                            <label for="nombreObj"><b>Nombre: {{objetoSeleccionado.nombre}}</b></label>   
                        </div>

                        <div>
                            <label for="descripcion"><b>Descripción: {{objetoSeleccionado.descripcion}}</b></label>
                        </div>

                        <div>
                            <label for="valor"><b>Valor: {{objetoSeleccionado.valor}}</b></label>
                        </div>

                            <div>
                                <label for="peso"><b>Peso: {{objetoSeleccionado.peso}}</b></label>
                            </div>

                            <div>
                                
                            </div>
                    </form>

                    <template #modal-footer="{ ok, cancel, hide }">
                            <b-button size="sm" variant="success" @click="agregarObj()">
                                Agregar Objeto
                            </b-button>
                            <b-button size="sm" variant="danger" @click="cancel()">
                                    Cancelar
                            </b-button>
                    </template>

                </b-modal>  
            </div>

            <!-- DIARIO -->

            <div class="tab-pane fade" id="pills-diario" role="tabpanel">
                
                <!-- NOMBRE -->
                <div class="d-flex my-3 justify-content-center">
                    <h1>Diario</h1>
                </div>

                <diario v-bind:model="model" v-bind:modelname="modelname" v-bind:fields="['fecha_hora', 'info']" :id_personaje='id_personaje'>
                </diario>
            </div>
            
        </div>
    </div>
</div>

<script>
var app = new Vue ({
    el: '#app',
             components: {
                diario: CrudDiario,
                },
                props: ['id_personaje'],
            data: function() {
                return {
                    personaje: {
                    },
                    id_personaje:"",
                    objetos:[],
                    showModal: false,
                    objetoSeleccionado:{},
                    model: <?= json_encode($model->getAttributes()) ?>,
                    modelname: <?= json_encode($model::tableName()) ?>,
                }
            },
            mounted() {
                    this.getId();
                    this.getPersonaje();
                    this.getObjetos();
                },
            methods: {
                getPersonaje: function() {
                    var self = this;
                    axios.get('/apiv1/personaje/'+this.id_personaje)
                        .then(function(response) {
                            self.personaje = response.data;
                        })
                        .catch(function(error) {
                            //handle error
                            console.log(error);
                        })
                        .then(function() {
                            //always executed
                        });
                    },
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
                getId: function() {
                    let url = window.location.href;
                    let id = url.substring(url.lastIndexOf('=') + 1);
                    this.id_personaje = Number(id);
                },
                guardarId: function() {
                    console.log(value);
                },
                agregarObj: function() {
                    var self = this;
                    var idjoin = {
                                personaje_id: this.personaje.id,
                                objeto_id: this.objetoSeleccionado.id
                            };
                    axios.post('/apiv1/personajeobjeto', idjoin)
                        .then(function(response) {
                            // handle success
                            console.log(response.data);
                            alert('Objeto Agregado');
                            self.getPersonaje();
                        })
                        .catch(function(error) {
                            // handle error
                            console.log(error);
                        })
                        .then(function() {
                            // always executed
                        });
                },
                quitarObj: function(objeto_id) {
                    var self = this;
                    axios.delete('/apiv1/personajeobjeto/' + self.personaje.id + ',' +objeto_id )
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        alert("Objeto borrado con exito");
                        self.getPersonaje();
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
});
</script>