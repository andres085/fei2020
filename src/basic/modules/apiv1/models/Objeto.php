<?php

namespace app\modules\apiv1\models;


class Objeto extends \app\models\Objeto
{
    public function fields()
    {
        return ['id', 'nombre', 'daño', 'tipo_daño', 'tipo_obj', 'categoria', 'descripcion', 'propiedades', 'valor', 'peso'];
    }
}
