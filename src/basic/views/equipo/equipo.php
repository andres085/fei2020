<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Equipamiento';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
?>


<div class="container-fluid">

    <h1>Equipamiento</h1>

    <div class="row">

        <div class="col-md-8">


            <table class="table table-responisve table-hover table-sm">
                
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Daño y Mod.</th>
                        <th>Propiedades</th>
                        <th>Valor</th>
                        <th>Peso</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="cilckable-row" style="cursor: pointer;">

                        <td>Daga</td>
                        <td>Arma Sencilla</td>
                        <td>1d4 + FUE Perforante</td>
                        <td>Arrojadiza, Distancia, Ligera, Sutíl</td>
                        <td>2 PO</td>
                        <td>1 lb</td>
                        
                    </tr>
                    <tr style="cursor: pointer;">
                        
                        <td>Espada Larga</td>
                        <td>Arma Marcial</td>
                        <td>1d8 + FUE Cortante</td>
                        <td>Versátil</td>
                        <td>15 PO</td>
                        <td>3 lb</td>
                        
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-4 ">
            <div class="card">
                <div class="card-body">
                    
                    <h5 class="card-title">Nombre del Objeto</h5>
                    <h6 class="card-subtitle mb-2 text-muted"> Propiedades</h6>


                </div>

            </div>
        </div>
        
    </div>

</div>

