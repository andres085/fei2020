<?php

namespace app\modules\apiv1\models;


class Trasfondo extends \app\models\Trasfondo
{
    public function fields()
    {
        return ['id', 'nombre', 'descripcion'];
    }
}
