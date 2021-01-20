<?php

namespace app\modules\apiv1\models;


class Equipo extends \app\models\Equipo
{
    public function fields()
    {
        return ['id_equipo', 'nombre', 'descripcion', 'categoria', 'precio', 'peso'];
    }
}
