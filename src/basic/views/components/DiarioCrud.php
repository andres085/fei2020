<script type="text/x-template" id="crud-template">
    <div class="container">
        <h1>Diario del Personaje</h1>
        <!-- Button trigger modal -->
        <b-modal
                @errors="errors"
                v-model="modalShow"
                id="modal-1" title="Nueva Carga">
            <div>
                <form action="">
                    <div v-if="i>0" v-for="(field,i) in modelfields" class="form-group">
                        <label :for="field">{{field}}</label>
                        <input v-model="activemodel[field]" type="text" :name="field" :id="field" class="form-control" :placeholder="'Ingrese el '+ field " aria-describedby="helpId">
                        <span class="text-danger" v-if="errors[field]" >{{errors[field]}}</span>
                    </div>
                </form>
            </div>
            <template v-slot:modal-footer="{ ok, cancel, hide }">
                <button v-if="isNewRecord"  @click="addModel()" type="button" class="btn btn-primary m-3">Crear</button>
                <button v-if="!isNewRecord"  @click="activemodel={}" type="button" class="btn btn-success m-3">Nuevo</button>
                <button v-if="!isNewRecord" @click="updateModel(activemodel[modelfields[0]])" type="button" class="btn btn-primary m-3">Actualizar</button>
            </template>
        </b-modal>

        <p>
            <b-button  v-on:click="modalShow=true">Nueva Entrada</b-button>
        </p>

         <b-pagination
            v-model="currentPage"
            :total-rows="pagination.total"
            :per-page="pagination.perPage"
            aria-controls="my-table"
        ></b-pagination>


        <table class="table" id="my-table">
            <thead>
            <tr>
                <th>#</th>
                <th v-for="field in modelfields">{{field}}</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td></td>
                <td v-for="field in modelfields">
                    <input v-on:change="getModels()" class="form-control" v-model="filter[field]">
                </td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(model,key) in models" v-bind:key="model[modelfields[0]]">
                <td>{{key+1}}</td>
                <td v-for="field in modelfields">{{model[field]}}</td>
                <td>
                    <button v-b-modal.modal-1 v-on:click="editModel(key)" type="button" class="btn btn-outline-warning">Editar</button>
                </td>
                <td>
                    <button v-on:click="deleteModel(model[modelfields[0]])" type="button" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</script>

<script>

const Diario = {
        name: 'diario',
        template: '#crud-template',
        components:{
        },
        props: {
            modelname: String,
            model : Object,
            fields: {
                type:Array,
            },
            id_personaje: Number,
        },
        mounted() {
            this.getModels();
        },
        watch:{
            currentPage: function() {
                this.getModels();
            }
        },
        beforeUpdate () {
            this.idPj();
        },
        data : function(){
            return {
                modalShow: false,
                modelfields: this.fields??Object.keys(this.model),
                currentPage: 1,
                pagination:{},
                filter:{},
                errors: {},
                models: [],
                activemodel:{
                },
                isNewRecord:true,
            }
        },
        methods: {
             normalizeErrors: function(errors){
                var allErrors = {};
                for(var i = 0 ; i < errors.length; i++ ){
                    allErrors[errors[i].field] = errors[i].message;
                }
                return allErrors;
            },
                getModels: function(){
                var self = this;
                self.errors = {};
                axios.get('/apiv1/'+self.modelname+'?page='+self.currentPage,{params:self.filter})
                    .then(function (response) {
                        self.pagination.total = response.headers['x-pagination-total-count'];
                        self.pagination.totalPages = response.headers['x-pagination-page-count'];
                        self.pagination.perPage = response.headers['x-pagination-per-page'];
                        self.models = response.data;

                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                    });
            },
            deleteModel: function(id){
                var self = this;
                axios.delete('/apiv1/'+self.modelname+'/'+id,{})
                    .then(function (response) {
                        // handle success
                        self.getModels();
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                    })
                    .then(function () {
                        // always executed
                    });
            },
            editModel: function (key) {
                this.activemodel = Object.assign({},this.models[key]);
                // this.activemodel.key = key;
                this.isNewRecord = false;
            },
            addModel: function(){
                var self = this;
                axios.post('/apiv1/'+self.modelname,self.activemodel)
                    .then(function (response) {
                        // handle success
                        console.log(response.data);
                        self.getModels()
                        self.activemodel = {};
                    })
                    .catch(function (error) {
                        // var errors = error.response.data;
                        console.log(error.response.data);
                        self.errors = self.normalizeErrors(error.response.data);
                        // handle error
                        console.log(self.errors);

                    })
                    .then(function () {
                        // always executed
                    });
            },
            updateModel: function (key) {
                var self = this;
                axios.patch('/apiv1/'+self.modelname+'/'+key,self.activemodel)
                    .then(function (response) {
                        // handle success
                        console.log(response.data);
                        self.getModels();
                        self.activemodel = {};
                        self.isNewRecord = true;
                        self.modalShow = false;
                    })
                    .catch(function (error) {
                        // handle error
                        console.log(error);
                        self.errors = self.normalizeErrors(error.response.data);
                    })
                    .then(function () {
                        // always executed
                    });
            },
            idPj: function(){
                this.activemodel.id_personaje = this.$props.id_personaje;
            }
        }
    }

</script>