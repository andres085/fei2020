<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Hoja de Personaje';
$this->params['breadcrumbs'][] = $this->title;



$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
echo $this->render('/components/PersonajeCrud');
?>

<div class="container-fluid" id="app">
    <hojapj>
    </hojapj>
</div>

<script>
    var app = new Vue({
        el: "#app",
        components: {
            hojapj: Hojapj,
        },
        //props: ['id_personaje'],
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