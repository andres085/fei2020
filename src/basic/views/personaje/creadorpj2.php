<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Creador de personajes';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
?>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-8">

            <h1>Caracteristicas del Personaje</h1>

            <br>

            <div>
                <h3>Humano</h3>
                
                <div class="list-group">

                    <li class="list-group-item">
                        <b>Velocidad:</b> 30 Pies
                    </li>

                    <li class="list-group-item">
                        <b>Edad:</b> Alcanzan la madurez poco antes de los veinte años y viven menos de un siglo.
                    </li>

                    <li class="list-group-item">
                        <b>Alineamiento:</b> Los humanos no tienen tendencia a ningún alineamiento en particular. Entre ellos puede encontrarse tanto lo mejor como lo peor.
                    </li>

                    <li class="list-group-item">
                        <b>Tamaño:</b> El tamaño y complexión de los humanos puede variar ampliamente. De cualquier manera, tu tamaño es <b>Mediano</b>
                    </li>

                    <li class="list-group-item">
                        <b>Idiomas:</b> Sabes hablar, leer y escribir <b>Común</b> y un idioma más a tu elección 
                    </li>

                    <li class="list-group-item">
                        <b>Modificadores:</b> Obtines +1 a todas tus estadisticas (Fuerza, Destreza, Constitución, Inteligencia, Sabiduria y Carisma) ó
                        +1 a dos estadísticas que tú elijas
                    </li>

                </div>
            </div>

            <br>

            <div>
                <h3>Luchador</h3>
                
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque harum expedita consectetur. Dignissimos temporibus eligendi doloremque obcaecati eos optio placeat labore reprehenderit officiis, enim expedita, in ad deserunt maiores fugit?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ullam vitae nihil iusto reprehenderit neque assumenda, nam ut aut aliquid molestias consequatur quibusdam alias autem nulla mollitia repellat quas quod.
                </p>
            </div>

            <br>

            <div>
                <h3>Marinero</h3>
                
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Neque harum expedita consectetur. Dignissimos temporibus eligendi doloremque obcaecati eos optio placeat labore reprehenderit officiis, enim expedita, in ad deserunt maiores fugit?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ullam vitae nihil iusto reprehenderit neque assumenda, nam ut aut aliquid molestias consequatur quibusdam alias autem nulla mollitia repellat quas quod.
                </p>
            </div>

            <hr>

            <h1>Informacicón del Personaje</h1>
            
            <br>
            
            <div>
                <h3>Rasgos de Personalidad</h3>

                <textarea class="form-control" name="personalidad" id="personalidad" rows="2"></textarea>
            </div>

            <br>

            <div>
                <h3>Ideales</h3>

                <textarea class="form-control" name="ideal" id="ideal" rows="2"></textarea>
            </div>

            <br>

            <div>
                <h3>Vínculos</h3>

                <textarea class="form-control" name="vinculo" id="vinculo" rows="2"></textarea>
            </div>

            <br>

            <div>
                <h3>Defectos</h3>

                <textarea class="form-control" name="defecto" id="defecto" rows="2"></textarea>
            </div>

        </div>

        <div class="col-md-4">

            <div>
                <h3>Dados de Golpe: </h3>
                <p>Dado de golpe de {{ clase }}: </p>
                <p>cantidad de dado por nivel: {{ nivel }}</p>
            </div>

            <div>
                <h3>Puntos de Vida:</h3>
                <div class="d-flex">
                    <input type="number" class="fomr-control" name="hp" id="hp">
                    <button type="button" class="btn btn-outline-dark"><i class="fas fa-dice"></i></button>
                </div>
            </div>

        </div>

    </div>

</div>