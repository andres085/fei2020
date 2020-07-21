<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Modulo de Jugador';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
?>

<div class="container-fluid">

<h1 style="text-align: center;"> Módulo del Jugador</h1>
<br>

<div class="row">


    <div class="col-md-12">
                    
        <button class="btn btn-block btn-outline-dark" onclick="window.location.href='creador_pj.html'"><h2><i class="fas fa-plus"></i><br> Agregar Personaje</h2></button>
        
        <div style="text-align: center;">
            <hr>

            <h3>Tus Personajes</h3>
            <h3><i class="fas fa-users"></i></h3>
            
            <div class="container-fluid" style="max-height:450px ;overflow-y: auto;">

            <button class="btn btn-outline-dark btn-pjs">Personaje</button>
            <button class="btn btn-outline-dark btn-pjs">Personaje</button>
            <button class="btn btn-outline-dark btn-pjs">Personaje</button>
            <button class="btn btn-outline-dark btn-pjs">Personaje</button>
            <button class="btn btn-outline-dark btn-pjs">Personaje</button>
            <button class="btn btn-outline-dark btn-pjs">Personaje</button>
            <button class="btn btn-outline-dark btn-pjs">Personaje</button>
            <button class="btn btn-outline-dark btn-pjs">Personaje</button>
            </div>
        </div>
                    
    </>

    <script>
        var app = new Vue ({
            el: '#app',
            data: {
                message : "Pueba",
            }
        })
    </script>



</div>


