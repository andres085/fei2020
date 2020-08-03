<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Diario del Personaje';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
?>


<div class="container-fluid">

    <div>

        <h1>Diario del Personaje</h1>
        <button type="button" class="btn btn-block btn-outline-success" data-toggle="modal" data-target="#ModalNotaDiariopj">
            Agregar una Nota al Diario
        </button>

    <!-- The Modal -->
        <div class="modal fade" id="ModalNotaDiariopj">
            <div class="modal-dialog">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Añade una nueva nota</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group">

                        <label for="TituloNotaDiariopj">Título</label>
                        <input class="form-control" type="text" name="TituloNotaDiariopj" id="titulopj">
                        <br>
                        <label for="NotaDiariopj">Descripción</label>
                        <textarea class="form-control" name="NotaDiariopj" id="notapj" rows="15" cols="60" placeholder="Escribe aqui tu nueva entrada del diario" autofocus></textarea>
                        </div>
                    </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    
                    <button type="submit" class="btn btn-success">Agregar Nota <i class="fas fa-feather-alt"></i> </button>
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>

                </div>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid">

    <div style="text-align: center;">
        <hr>

        <h3>Tus Notas</h3>
        <h3><i class="fas fa-edit"></i></h3>
        
        <div class="container-fluid" style="max-height:450px ;overflow-y: auto;">

            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Nota <h6 style="font-size:smaller;">Fecha y Hora</h6></button>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Nota <h6 style="font-size:smaller;">Fecha y Hora</h6></button>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Nota <h6 style="font-size:smaller;">Fecha y Hora</h6></button>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Nota <h6 style="font-size:smaller;">Fecha y Hora</h6></button>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Nota <h6 style="font-size:smaller;">Fecha y Hora</h6></button>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Nota <h6 style="font-size:smaller;">Fecha y Hora</h6></button>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Nota <h6 style="font-size:smaller;">Fecha y Hora</h6></button>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Nota <h6 style="font-size:smaller;">Fecha y Hora</h6></button>
            <button type="button" class="btn btn-outline-dark btn-pjs" data-toggle="modal" data-target="#ModalEditarNota">Nota <h6 style="font-size:smaller;">Fecha y Hora</h6></button>

        </div>
    </div>


    <div class="modal fade" id="ModalEditarNota">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edita la nota</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">

                    <label for="TituloNotaDiariopj">Título</label>
                    <input class="form-control" type="text" name="TituloNotaDiariopj" id="titulopj" placeholder="Titulo a editar">
                    <br>
                    <label for="NotaDiariopj">Descripción</label>
                    <textarea class="form-control" name="NotaDiariopj" id="notapj" rows="15" cols="60" autofocus>
                        Texto traido de la BD para editar
                    </textarea>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    
                    <button type="submit" class="btn btn-success">Agregar Nota <i class="fas fa-feather-alt"></i> </button>
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>

            </div>
        </div>
    </div>

</div>




