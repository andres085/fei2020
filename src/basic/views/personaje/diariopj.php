<?php

use yii\web\View;

$this->title = 'Modulo de Jugador';
$this->params['breadcrumbs'][] = $this->title;

//$userId = Yii::$app->user->identity->id;

$this->registerCssFile("//unpkg.com/bootstrap/dist/css/bootstrap.min.css", ['position' => $this::POS_HEAD]);
$this->registerCssFile("//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css", ['position' => $this::POS_HEAD]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js", ['position' => $this::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js", ['position' => View::POS_HEAD]);
echo $this->render('/components/CrudDiario');
?>
<div id="app">

    <div>
        <button class="btn btn-outline-dark" onclick="window.history.back()">
            <i class="fas fa-arrow-left"></i> Volver
        </button>
    </div>
    <diario v-bind:model="model" v-bind:modelname="modelname" v-bind:fields="['fecha_hora', 'info']" :id_personaje='id_personaje'>
    </diario>
</div>
<script>
    var app = new Vue({
        el: "#app",
        components: {
            diario: CrudDiario,
        },
        props: ['id_personaje'],
        data: {
            model: <?= json_encode($model->getAttributes()) ?>,
            modelname: <?= json_encode($model::tableName()) ?>,
        },
        mounted() {
            this.getId();
        },
        methods: {
            getId: function() {
                let url = window.location.href;
                let id = url.substring(url.lastIndexOf('=') + 1);
                this.id_personaje = Number(id);
            },
        }
    })
</script>