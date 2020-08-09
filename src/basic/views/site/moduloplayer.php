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

    <!-- PRUEBA TOAST -->
        <button type="button" id="btnToast" class="btn btn-block btn-success">Mostrar Toast</button>

        <div class="toast" data-delay="2000" id="toast" style="position: absolute; bottom: 0; right: 0;">
            <div class="toast-header">
            Toast Header
            </div>
            <div class="toast-body">
            Some text inside the toast body
            </div>
        </div>
    <!-- FIN PRUEBA TOAST -->
<div class="row">


    <div class="col-md-12">
                    
        <button class="btn btn-block btn-outline-dark" onclick="window.location.href='creadorpj'"><h2><i class="fas fa-plus"></i><br> Agregar Personaje</h2></button>
        
        <div style="text-align: center;">
            <hr>

            <h3>Tus Personajes</h3>
            <h3><i class="fas fa-users"></i></h3>
            
            <div class="container-fluid" style="max-height:450px ;overflow-y: auto;">

            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Personaje <h6 style="font-size:smaller;">Raza - Clase - Nivel</h6>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Personaje <h6 style="font-size:smaller;">Raza - Clase - Nivel</h6>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Personaje <h6 style="font-size:smaller;">Raza - Clase - Nivel</h6>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Personaje <h6 style="font-size:smaller;">Raza - Clase - Nivel</h6>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Personaje <h6 style="font-size:smaller;">Raza - Clase - Nivel</h6>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Personaje <h6 style="font-size:smaller;">Raza - Clase - Nivel</h6>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Personaje <h6 style="font-size:smaller;">Raza - Clase - Nivel</h6>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Personaje <h6 style="font-size:smaller;">Raza - Clase - Nivel</h6>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Personaje <h6 style="font-size:smaller;">Raza - Clase - Nivel</h6>
            
            
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

    <script>
        $(document).ready(function(){
            $("#btnToast").click(function(){
                $('#toast').toast('show');
            });
        });
    </script>



</div>


