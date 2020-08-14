<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Equipamiento';
$this->params['breadcrumbs'][] = $this->title;

$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
?>


<div class="container-fluid">

    <h1>Equipamiento</h1>

    <div class="my-3">
    
        <button class="btn btn-block btn-success" data-toggle="modal" data-target="#modalAgregarObj">Agregar un Objeto</button>

    </div>

    <div>
        <table class="table table-responisve table-hover table-sm">
            
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Valor</th>
                    <th>Peso</th>
                </tr>
            </thead>

            <tbody>
                <tr class="cilckable-row" data-toggle="modal" data-target="#modalEditarObj" style="cursor: pointer;">

                    <td>Daga</td>
                    <td>Arma Sencilla</td>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio, ratione pariatur vel tempora eum nobis atque vero soluta ab. Fugit deserunt necessitatibus soluta hic. Praesentium repellat omnis consequuntur soluta dolore.</td>
                    <td>2 PO</>
                    <td>1 lb</td>
                    
                </tr>
                <tr style="cursor: pointer;">
                    
                    <td>Espada Larga</td>
                    <td>Arma Marcial</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur similique consequuntur cupiditate eligendi amet provident at ipsum accusamus. Eos omnis necessitatibus fugit obcaecati eligendi doloremque quam soluta deserunt quis facere.</td>
                    <td>15 PO</td>
                    <td>3 lb</td>
                    
                </tr>
            </tbody>
        </table>
    </div>

</div>


<!-- Modal Agregar Objeto -->
<div class="modal fade" id="modalAgregarObj">
  <div class="modal-dialog">
    <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Agrega un objeto nuevo</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        
        <form action="">

            <div>
                <select class="form-control" name="" id="tipoObj" required>
                    <option value="" selected disabled>Seleccione el tipo de objeto</option>
                    <option value="arma">Arma</option>
                    <option value="armadura">Armadura</option>
                    <option value="aventura">Equipo de Aventura</option>

                </select>
            </div>
            
            <div>
                <label for="nombreObj">Nombre</label>
                <input class="form-control" id="nombreObj"type="text" required>                
            </div>

            <div>
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" name="" id="descripcion" cols="30" rows="5" placeholder="Descripción del objeto" required></textarea>
            </div>

            <div>
                <label for="valor">Valor</label>
                <input class="form-control" id="valor" type="text" required>
            </div>
            <div>
                <label for="peso">Peso</label>
                <input class="form-control" id="peso" type="text" required>
            </div>

            <div>
                
            </div>
        </form>
       

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Agregar Objeto</button>
        </div>

    </div>
  </div>
</div>




<!-- Modal Editar Objeto -->
<div class="modal fade" id="modalEditarObj">
  <div class="modal-dialog">
    <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">{{ Nombre del Objeto }}</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        
        <form action="">

            <div>
                <select class="form-control" name="" id="tipoObj">
                    <option value="" selected disabled>Seleccione el tipo de objeto</option>
                    <option value="arma">Arma</option>
                    <option value="armadura">Armadura</option>
                    <option value="aventura">Equipo de Aventura</option>

                </select>
            </div>
            
            <div>
                <label for="nombreObj">Nombre</label>
                <input class="form-control" id="nombreObj"type="text">                
            </div>

            <div>
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" name="" id="descripcion" cols="30" rows="5" placeholder="Descripción del objeto"></textarea>
            </div>

            <div>
                <label for="valor">Valor</label>
                <input class="form-control" id="valor" type="text">
            </div>
            <div>
                <label for="peso">Peso</label>
                <input class="form-control" id="peso" type="text">
            </div>

            <div>
                
            </div>
        </form>
       
       

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
        </div>

    </div>
  </div>
</div>

