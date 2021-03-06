<script type="text/x-template" id="crud-template">
    <div class="container">
        <div class="text-center">
            <h1>Diario</h1>
        </div>
        <!-- Button trigger modal -->
        <b-modal
                @errors="errors"
                v-model="modalShow"
                id="modal-1" title="Nueva Entrada">
            <div>
                <form action="">
                    <div v-if="i>0" v-for="(field,i) in modelfields" class="form-group">
                        <label :for="field">{{field}}</label>
                        <textarea v-model="activemodel[field]" type="text" :name="field" :id="field" cols="30" rows="10" class="form-control" :placeholder="'Ingrese el '+ field " aria-describedby="helpId"></textarea>
                        <span class="text-danger" v-if="errors[field]" >{{errors[field]}}</span>
                    </div>
                </form>
            </div>
            <template v-slot:modal-footer="{ ok, cancel, hide }">
                <button v-if="isNewRecord"  @click="addModel()" type="button" class="btn btn-primary m-3">Crear</button>
                <button v-if="!isNewRecord"  @click="newRecord()" type="button" class="btn btn-success m-3">Nuevo</button>
                <button v-if="!isNewRecord" @click="updateModel(activemodel.id)" type="button" class="btn btn-primary m-3">Actualizar</button>
            </template>
        </b-modal>

        <p>
            <b-button class="btn btn-success btn-block"  v-on:click="modalShow=true">Nueva Entrada</b-button>
        </p>

         


        <table class="table" id="my-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Fecha y Hora</th>
                <th>Info</th>
            </tr>
            <tr>
                <td></td>
                <td v-for="field in modelfields">
                    <input v-on:change="getModels()" class="form-control" v-model="filter[field]">
                </td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(model,key) in models">
                <td>{{key+1}}</td>
                <td v-for="field in modelfields">{{model[field]}}</td>
                <td>
                    <button v-b-modal.modal-1 v-on:click="editModel(key)" type="button" class="btn btn-outline-warning">Editar</button>
                </td>
                <td>
                    <button v-on:click="deleteModel(model.id)" type="button" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            </tbody>
        </table>

        <b-pagination
            v-model="currentPage"
            :total-rows="pagination.total"
            :per-page="pagination.perPage"
            aria-controls="my-table"
        ></b-pagination>

    </div>
</script>

<script>
    const CrudDiario = {
        name: 'cruddiario',
        template: '#crud-template',
        props: {
            modelname: String,
            model: Object,
            fields: {
                type: Array,
            },
            id_personaje: Number,
            id_campania: Number,
            labels: {
                type: Array,
            }
        },
        mounted() {
            this.getModels();
        },
        watch: {
            
            currentPage: function() {
                this.getModels();
            },
            '$data': {
                handler: function(isNewRecord) {
                    this.getDate();
                },
                deep: true
            }
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
                if(this.model.hasOwnProperty('id_campania')){
                    console.log("Diario Campania");
                    axios.get('/apiv1/'+self.modelname+'?id_campania='+self.id_campania+'&?page='+self.currentPage+'&per-page=10',{params:self.filter})
                        .then(function(response) {
                            self.pagination.total = response.headers['x-pagination-total-count'];
                            self.pagination.totalPages = response.headers['x-pagination-page-count'];
                            self.pagination.perPage = response.headers['x-pagination-per-page'];
                            self.models = response.data;
                        })
                        .catch(function(error) {
                            // handle error
                            console.log(error);
                        })
                        .then(function() {
                            // always executed
                        });
                }
                else if(this.model.hasOwnProperty('id_personaje')){
                    console.log("Diario Personaje");
                    axios.get('/apiv1/'+self.modelname+'?id_personaje='+self.id_personaje+'&?page='+self.currentPage+'&per-page=10',{params:self.filter})
                    .then(function(response) {
                        self.pagination.total = response.headers['x-pagination-total-count'];
                        self.pagination.totalPages = response.headers['x-pagination-page-count'];
                        self.pagination.perPage = response.headers['x-pagination-per-page'];
                        self.models = response.data;
                    })
                    .catch(function(error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function() {
                        // always executed
                    });
                }
            },
            deleteModel: function(id) {

                Swal.fire({
                type: 'warning',
                title: 'Borrar Entrada?',
                text: "¡El borrado es irreversible!",
                
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Borrar',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.value) {
                    Swal.fire(
                    'Eliminado!',
                    'Registro con id '+id+' eliminado.',
                    'success'
                    );

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
                    }
                })
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

                        Swal.fire(
                            'Diario Actualizado!',
                            'Volver!',
                            'success'
                        )

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
                        Swal.fire(
                            'Diario Actualizado!',
                            'Volver!',
                            'success'
                        )
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
            addId: function() {
                if (this.model.hasOwnProperty('id_personaje')) {
                    this.activemodel.id_personaje = this.$props.id_personaje;
                }
                else if(this.model.hasOwnProperty('id_campania')){
                    this.activemodel.id_campania = this.$props.id_campania;
                }
            },
            getDate: function() {
                let fecha = moment().format('YYYY/MM/DD, h:mm:ss');
                this.activemodel.fecha_hora = fecha;
            },
            newRecord: function() {
                this.activemodel = {};
                this.isNewRecord = true;
            }
        }
    }
</script>