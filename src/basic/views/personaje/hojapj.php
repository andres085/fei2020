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

<div style="height: 120vh;" class="container-fluid" id="app">

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
                                <h6 class="card-text">{{modfue}}</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Destreza</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.destreza}}</h5>
                                <h6 class="card-text">{{moddes}}</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Constitución</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.constitucion}}</h5>
                                <h6 class="card-text">{{modcons}}</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Inteligencia</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.inteligencia}}</h5>
                                <h6 class="card-text">{{modint}}</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Sabiduria</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.sabiduria}}</h5>
                                <h6 class="card-text">{{modsab}}</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">

                                <h5 class="card-title">Carisma</h5>
                                <hr>
                                <h5 class="card-text">{{personaje.carisma}}</h5>
                                <h6 class="card-text">{{modcar}}</h6>
                            
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

                    <p> {{personaje.trasfondo.descripcion}}  </p>

                    <hr>
                    <div class="row">
                        <div class="col-md-4 border-right">
                            <h5><b>Competencia con Habilidades:</b></h5>
                            <ul class="list-unstyled">
                                <li> {{personaje.trasfondo.competencia1}} </li>
                                <li> {{personaje.trasfondo.competencia2}} </li>
                            </ul>

                            <h5><b>Competencia con Equipo:</b></h5>
                            <ul class="list-unstyled">
                                <li> {{personaje.trasfondo.competencia1}} </li>
                                <li> {{personaje.trasfondo.competencia2}} </li>
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <h5><b>Rasgo:</b> {{personaje.trasfondo.nombre_rasgo}} </h5>

                            <p> {{personaje.trasfondo.rasgo}} </p>

                            <h5><b>Especialidad:</b> {{personaje.trasfondo.nombre_especialidad}} </h5>

                            <p> {{personaje.trasfondo.especialidad}} </p>
                        </div>
                    </div>

                    <hr>


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

                <b-button v-b-modal.modal-2 type="button" class="btn btn-block btn-success" user="" @click=""><h5>Agregar un objeto a tu inventario</h5>

                </b-button>

                <hr>


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
                <b-modal id="modal-2" title="Agregar Objeto" v-model="showModal">  

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
                    objetos:[],
                    showModal: false,
                    objetoSeleccionado:{},
                    model: <?= json_encode($model->getAttributes()) ?>,
                    modelname: <?= json_encode($model::tableName()) ?>,
                    modfue:"",
                    moddes:"",
                    modcons:"",
                    modint:"",
                    modsab:"",
                    modcar:"",
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
                            self.checkModif();
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
                },
                checkModif:function(){
                    let f = this.personaje.fuerza;
                    let d = this.personaje.destreza;
                    let c = this.personaje.constitucion;
                    let i = this.personaje.inteligencia;
                    let s = this.personaje.sabiduria;
                    let ca = this.personaje.carisma;

                    //comparacion fuerza
                    if(f>=2 && f<=3){
                        this.modfue = -4;
                    }
                    else if(f>=4 && f<=5){
                        this.modfue = -3;
                    }
                    else if(f>=6 && f<=7){
                        this.modfue = -2;
                    }
                    else if(f>=8 && f<=9){
                        this.modfue = -1;
                    }
                    else if(f>=10 && f<=11){
                        this.modfue = +0;
                    }
                    else if(f>=12 && f<=13){
                        this.modfue = +1;
                    }
                    else if(f>=14 && f<=15){
                        this.modfue = +2;
                    }
                    else if(f>=16 && f<=17){
                        this.modfue = +3;
                    }
                    else if(f>=18 && f<=19){
                        this.modfue = +4;
                    }
                    else if(f>=20 && f<=21){
                        this.modfue = +5;
                    }
                    else{
                        this.modfue = -5;
                    }

                    //comparacion destreza
                    if(d>=2 && d<=3){
                        this.moddes = -4;
                    }
                    else if(d>=4 && d<=5){
                        this.moddes = -3;
                    }
                    else if(d>=6 && d<=7){
                        this.moddes = -2;
                    }
                    else if(d>=8 && d<=9){
                        this.moddes = -1;
                    }
                    else if(d>=10 && d<=11){
                        this.moddes = +0;
                    }
                    else if(d>=12 && d<=13){
                        this.moddes = +1;
                    }
                    else if(d>=14 && d<=15){
                        this.moddes = +2;
                    }
                    else if(d>=16 && d<=17){
                        this.moddes = +3;
                    }
                    else if(d>=18 && d<=19){
                        this.moddes = +4;
                    }
                    else if(d>=20 && d<=21){
                        this.moddes = +5;
                    }
                    else{
                        this.moddes = -5;
                    }

                    //comparacion constitucion
                    if(c>=2 && c<=3){
                        this.modcons = -4;
                    }
                    else if(c>=4 && c<=5){
                        this.modcons = -3;
                    }
                    else if(c>=6 && c<=7){
                        this.modcons = -2;
                    }
                    else if(c>=8 && c<=9){
                        this.modcons = -1;
                    }
                    else if(c>=10 && c<=11){
                        this.modcons = +0;
                    }
                    else if(c>=12 && c<=13){
                        this.modcons = +1;
                    }
                    else if(c>=14 && c<=15){
                        this.modcons = +2;
                    }
                    else if(c>=16 && c<=17){
                        this.modcons = +3;
                    }
                    else if(c>=18 && c<=19){
                        this.modcons = +4;
                    }
                    else if(c>=20 && c<=21){
                        this.modcons = +5;
                    }
                    else{
                        this.modcons = -5;
                    }

                    //comparacion inteligencia
                    if(i>=2 && i<=3){
                        this.modint = -4;
                    }
                    else if(i>=4 && i<=5){
                        this.modint = -3;
                    }
                    else if(i>=6 && i<=7){
                        this.modint = -2;
                    }
                    else if(i>=8 && i<=9){
                        this.modint = -1;
                    }
                    else if(i>=10 && i<=11){
                        this.modint = +0;
                    }
                    else if(i>=12 && i<=13){
                        this.modint = +1;
                    }
                    else if(i>=14 && i<=15){
                        this.modint = +2;
                    }
                    else if(i>=16 && i<=17){
                        this.modint = +3;
                    }
                    else if(i>=18 && i<=19){
                        this.modint = +4;
                    }
                    else if(i>=20 && i<=21){
                        this.modint = +5;
                    }
                    else{
                        this.modint = -5;
                    }

                    //comparacion sabiduria
                    if(s>=2 && s<=3){
                        this.modsab = -4;
                    }
                    else if(s>=4 && s<=5){
                        this.modsab = -3;
                    }
                    else if(s>=6 && s<=7){
                        this.modsab = -2;
                    }
                    else if(s>=8 && s<=9){
                        this.modsab = -1;
                    }
                    else if(s>=10 && s<=11){
                        this.modsab = +0;
                    }
                    else if(s>=12 && s<=13){
                        this.modsab = +1;
                    }
                    else if(s>=14 && s<=15){
                        this.modsab = +2;
                    }
                    else if(s>=16 && s<=17){
                        this.modsab = +3;
                    }
                    else if(s>=18 && s<=19){
                        this.modsab = +4;
                    }
                    else if(s>=20 && s<=21){
                        this.modsab = +5;
                    }
                    else{
                        this.modsab = -5;
                    }

                    //comparacion carisma
                    if(ca>=2 && ca<=3){
                        this.modcar = -4;
                    }
                    else if(ca>=4 && ca<=5){
                        this.modcar = -3;
                    }
                    else if(ca>=6 && ca<=7){
                        this.modcar = -2;
                    }
                    else if(ca>=8 && ca<=9){
                        this.modcar = -1;
                    }
                    else if(ca>=10 && ca<=11){
                        this.modcar = +0;
                    }
                    else if(ca>=12 && ca<=13){
                        this.modcar = +1;
                    }
                    else if(ca>=14 && ca<=15){
                        this.modcar = +2;
                    }
                    else if(ca>=16 && ca<=17){
                        this.modcar = +3;
                    }
                    else if(ca>=18 && ca<=19){
                        this.modcar = +4;
                    }
                    else if(ca>=20 && ca<=21){
                        this.modcar = +5;
                    }
                    else{
                        this.modcar = -5;
                    }
                }
            }
});
</script>