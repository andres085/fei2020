<?php

use yii\helpers\Html;

use yii\widgets\ActiveForm;

use yii\helpers\Url;

?>

<div class="container-fluid">

    <div class="site-index">

        <div>
        
            <h1 class="text-center">Bienvenido a la</h1>

            <div class="d-flex justify-content-center">
                <?= Html::img('@web/images/imagotipo.png', ['alt' => 'My logo']) ?>        
            </div>
        </div>

        <br>
        <hr>
        <br>
        
        <div class="mb-3">
        
            <h2 class="text-center">Como vas a jugar hoy?</h2>

        </div>
        

        <div class="row">
        
            <div class="col-md-6">
            
                <button class="btn btn-outline-dark btn-block" onclick="window.location.href='/personaje/modulopj'"> <h3>Jugador</h3> </button>

            </div>

            <div class="col-md-6">
            
                <button class="btn btn-outline-dark btn-block" onclick="window.location.href='/master/campania'"> <h3>Dungeon Master</h3> </button>

            </div>

        </div>
    
    
    </div>

</div>


