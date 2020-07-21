<?php

namespace app\modules\apiv1\models;


class Personaje extends \app\models\Personaje
{
    public function fields()
    {
        return ['id', 'nombre', 'raza', 'clase'];
    }
}
