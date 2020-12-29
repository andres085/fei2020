<script type="text/x-template" id="crud-template">
    <div class="container"> 
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
            <div class="tab-pane fade show active" v-for="(model,key) in models" id="pills-info" role="tabpanel">
                
                <!-- NOMBRE -->
                <div class="d-flex my-3 justify-content-center">
                    <h1>{{ model.nombre }}</h1>
                </div>

                <!-- RAZA -->
                <div class="d-flex my-3">
                    <button class="btn btn-block btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapse-raza" aria-expanded="false" aria-controls="collapseExample">
                    <h3>{{model.raza}}</h3>
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
                    <h3>{{model.clase}}</h3>
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
                                <h5 class="card-text">{{model.fuerza}}</h5>
                                <h6 class="card-text">+3</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Destreza</h5>
                                <hr>
                                <h5 class="card-text">{{model.destreza}}</h5>
                                <h6 class="card-text">+3</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Constitución</h5>
                                <hr>
                                <h5 class="card-text">{{model.constitucion}}</h5>
                                <h6 class="card-text">+3</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Inteligencia</h5>
                                <hr>
                                <h5 class="card-text">{{model.inteligencia}}</h5>
                                <h6 class="card-text">+3</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">
                                <h5 class="card-title">Sabiduria</h5>
                                <hr>
                                <h5 class="card-text">{{model.sabiduria}}</h5>
                                <h6 class="card-text">+3</h6>
                                
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-2">

                        <div class="card">
                        
                            <div class="card-body" style="text-align: center;">

                                <h5 class="card-title">Carisma</h5>
                                <hr>
                                <h5 class="card-text">{{model.carisma}}</h5>
                                <h6 class="card-text">+3</h6>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TRASFONDO -->
            <div class="tab-pane fade" id="pills-trasfondo" v-for="(model, key) in models" role="tabpanel">
                
                <div class="my-4" style="text-align: center;">
                    <h1>Datos de Trasfondo</h1>
                </div>

                <hr>

                <div>
                    <h3><b>Trasfondo:</b> {{model.trasfondo.nombre}} </h3>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut deleniti voluptate placeat mollitia qui, voluptatibus, numquam accusantium minus quis voluptates quo. Est facere sit, iusto in nulla doloribus officia officiis.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis consectetur totam ut quis repellat amet mollitia tenetur omnis. Numquam labore ad perferendis. Earum ab atque voluptatibus doloremque. Numquam, accusantium tempore.
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <h6><b>Competencia con Habilidades:</b></h6>
                            <ul class="list-unstyled">
                                <li> {{model.trasfondo.competencia1}} </li>
                                <li> {{model.trasfondo.competencia2}} </li>
                            </ul>

                            <h6><b>Competencia con Equipo:</b></h6>
                            <ul class="list-unstyled">
                                <li> {{model.trasfondo.competencia1}} </li>
                                <li> {{model.trasfondo.competencia2}} </li>
                            </ul>
                        </div>

                        <div class="col-md-8">
                            <h6><b>Rasgo:</b> {{model.trasfondo.nombre_rasgo}} </h6>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, officia! Sequi illum odit perferendis molestias veniam modi ipsa laborum laudantium? Voluptatum magnam ipsum repellendus facilis nemo quas dolor quasi esse.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab facilis id itaque incidunt natus quasi reiciendis aliquam officiis veniam velit voluptatem facere necessitatibus dolorum assumenda, sint, a esse? Pariatur?
                            </p>

                            <h6><b>Especialidad:</b> {{model.trasfondo.nombre_especialidad}} </h6>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio recusandae minus eos earum dicta ducimus beatae, tempore, obcaecati cumque mollitia labore pariatur incidunt ad autem optio suscipit inventore ex quod.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse laborum aut tempore nemo ullam, aperiam deserunt iure qui asperiores est accusamus amet assumenda libero mollitia iusto alias quidem ab accusantium?
                            </p>
                        </div>
                    </div>


                    <div>
                        <h3><b>Personalidad</b></h3>

                        <p>{{model.personalidad}}
                        </p>
                    </div>

                    <hr>

                    <div>
                        <h3><b>Ideales:</b></h3>

                        <p>{{model.ideal}}
                        </p>
                    </div>

                    <hr>

                    <div>
                        <h3><b>Vinculos:</b></h3>

                        <p>
                        {{model.vinculo}}
                        </p>
                    </div>

                    <hr>

                    <div>
                        <h3><b>Defectos:</b></h3>

                        <p>
                        {{model.defecto}}
                        </p>
                    </div>

                </div>
                    
            </div>

             <!-- OBJETOS -->
            <div class="tab-pane fade" id="pills-objetos" role="tabpanel">
        
                <div class="my-4" style="text-align: center;">
                    <h1>Tus Objetos</h1>
                </div>

                <div class="my-2">
                    <button class="btn btn-block btn-success" data-toggle="modal" data-target="#agregarObj">Agregar un objeto a tu inventario</button>
                </div>

                <div>
                    <table class="table table-responisve table-hover table-sm">
                        
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Descripcion</th>
                                <th>Valor</th>
                                <th>Peso</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr class="cilckable-row" data-toggle="modal" data-target="#modalEditarObj" style="cursor: pointer;">

                                <td>{{nombre}}</td>
                                <td>{{tipo}}</td>
                                <td> {{descripcion}} </td>
                                <td>{{valor}}</td>
                                <td>{{peso}}</td>
                                
                            </tr>
            
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>

</script>
<script>
    const Hojapj = {
        name: 'hojapj',
        template: '#crud-template',
        props: {
            modelname: String,
            model: Object,
            fields: {
                type: Array,
            },
            id_personaje: Number,
        },
        mounted() {
            this.getModels();
        },
        beforeUpdate() {
            this.addId();
        },
        data: function() {
            return {
                modalShow: false,
                modelfields: this.fields??Object.keys(this.model),
                currentPage: 1,
                pagination: {},
                filter: {},
                errors: {},
                models: [],
                activemodel: {},
                isNewRecord: true,
            }
        },
        methods: {
            normalizeErrors: function(errors) {
                var allErrors = {};
                for (var i = 0; i < errors.length; i++) {
                    allErrors[errors[i].field] = errors[i].message;
                }
                return allErrors;
            },
            getModels: function() {
                var self = this;
                self.errors = {};
                axios.get('/apiv1/personaje'+this.id_personaje)
                    .then(function(response) {
                       
                        self.models = response.data;
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function() {
                        // always executed
                    });
            },
            deleteModel: function(id) {
                var self = this;
                axios.delete('/apiv1/'+self.modelname+'/'+id,{})
                    .then(function(response) {
                        // handle success
                        self.getModels();
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function() {
                        // always executed
                    });
            },
            editModel: function(key) {
                this.activemodel = Object.assign({}, this.models[key]);
                console.log(this.activemodel);
                this.isNewRecord = false;
            },
            addModel: function() {
                var self = this;
                axios.post('/apiv1/' + self.modelname, self.activemodel)
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        self.getModels()
                        self.activemodel = {};
                        alert('Diario Actualizado');
                    })
                    .catch(function(error) {
                        // var errors = error.response.data;
                        console.log(error.response.data);
                        self.errors = self.normalizeErrors(error.response.data);
                        // handle error
                        console.log(self.errors);

                    })
                    .then(function() {
                        // always executed
                    });
            },
            updateModel: function(key) {
                var self = this;
                axios.patch('/apiv1/'+self.modelname+'/'+key,self.activemodel)
                    .then(function(response) {
                        // handle success
                        console.log(response.data);
                        self.isNewRecord = true;
                        self.modalShow = false;
                        self.getModels();
                        self.activemodel = {};
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                        self.errors = self.normalizeErrors(error.response.data);
                    })
                    .then(function() {
                        // always executed
                    });
            },
            newRecord: function() {
                this.activemodel = {};
                this.isNewRecord = true;
            },
            getTrasfondo: function() {
                var self = this;
                self.errors = {};
                axios.get('/apiv1/trasfondo'+this.activemodel.id_trasfondo)
                    .then(function(response) {
                        self.models = response.data;
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
    }
</script>