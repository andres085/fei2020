<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Equipamiento';
$this->params['breadcrumbs'][] = $this->title;

$this->registerCssFile("//unpkg.com/bootstrap/dist/css/bootstrap.min.css", ['position' => $this::POS_HEAD]);
$this->registerCssFile("//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.css", ['position' => $this::POS_HEAD]);

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.min.js", ['position' => $this::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js", ['position' => View::POS_HEAD]);
echo $this->render('/components/Crud');
?>

<div class="container-fluid" id="app">
   <equipo v-bind:model="model" v-bind:modelname="modelname" v-bind:fields="['id', 'nombre', 'daño', 'tipo_daño', 'tipo_obj', 'categoria', 'descripcion', 'propiedades', 'valor', 'peso']">
    </equipo>
</div>
<script>
    var app = new Vue({
        el: "#app",
        components: {
            equipo: Crud,
        },
        data: {
            model: <?= json_encode($model->getAttributes()) ?>,
            modelname: <?= json_encode($model::tableName()) ?>,
        },
    })
</script>
