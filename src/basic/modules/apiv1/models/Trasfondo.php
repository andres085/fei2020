<?php

namespace app\modules\apiv1\models;


class Trasfondo extends \app\models\Trasfondo
{
    public function fields()
    {
        return ['id', 'nombre', 'descripcion', 'nombre_rasgo', 'rasgo', 'nombre_especialidad', 'especialidad', 'comp_habilidades1', 'comp_habilidades2', 'comp_equipo1', 'comp_equipo2'];
    }
}
