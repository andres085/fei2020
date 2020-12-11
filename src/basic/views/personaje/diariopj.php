<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Modulo de Jugador';
$this->params['breadcrumbs'][] = $this->title;

//$userId = Yii::$app->user->identity->id;

$this->registerCssFile("//unpkg.com/bootstrap/dist/css/bootstrap.min.css", ['position' => $this::POS_HEAD]);
$this->registerCssFile("//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css", ['position' => $this::POS_HEAD]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js", ['position' => $this::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
echo $this->render('/components/DiarioCrud');
?>
<div id="app">
    <diario v-bind:model="model" v-bind:modelname="modelname" v-bind:fields="fields" :id_personaje='id_personaje'>
    </diario>
</div>
<script>
    var app = new Vue({
        el: "#app",
        components: {
            diario:Diario,
        },
        props:['id_personaje'],
        data: {
            model: <?= json_encode($model->getAttributes()) ?>,
            fields: ['id_personaje', 'hora', 'info'],
            modelname: <?= json_encode($model::tableName()) ?>,
        },
        mounted () {
            this.getId();
        },
        methods: {
            getId : function (){
                let url = window.location.href;
                let id = url.substring(url.lastIndexOf('=') + 1);
                this.id_personaje = Number(id);
            },
        }
    })
</script>