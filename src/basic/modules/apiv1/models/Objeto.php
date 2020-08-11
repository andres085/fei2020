<?php

namespace app\modules\apiv1\models;


class Personaje extends \app\models\Personaje
{
    public function fields()
    {
        return ['id', 'nombre', 'daño', 'tipo_daño', 'tipo_obj', 'categoria', 'propiedades', 'valor', 'peso'];
    }
}
