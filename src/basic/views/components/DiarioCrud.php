<script type="text/x-template" id="crud-template">
    <div class="container">
        <h1>Diario del Personaje</h1>

            <div>
                <form action="">
                    <div v-if="i>0" v-for="(field,i) in modelfields" class="form-group">
                        <label :for="field">{{field}}</label>
                        <input v-model="activemodel[field]" type="text" :name="field" :id="field" class="form-control" :placeholder="'Ingrese el '+ field " aria-describedby="helpId">
                        <span class="text-danger" v-if="errors[field]" >{{errors[field]}}</span>
                    </div>
                </form>
            </div>

    </div>
</script>

<script>

const Diario = {
        name: 'diario',
        template: '#crud-template',
        components:{
            // bModal : bModal,
        },
        props: {
            modelname: String,
            model : Object,
            fields: {
                type:Array,
                // default: Object.keys(model),
            },
        },
        mounted() {
            this.getModels();
        },
        watch:{
            currentPage: function() {
                this.getModels();
            }
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
                activemodel:{},
                isNewRecord:true,
            }
        },
    }

</script>