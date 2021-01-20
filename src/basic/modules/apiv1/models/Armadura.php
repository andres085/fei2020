<?php

namespace app\modules\apiv1\models;


class Armadura extends \app\models\Armadura
{
    public function fields()
    {
        return ['id_armadura', 'nombre', 'categoria', 'ac', 'bonif_des', 'penalizacion', 'fuerza', 'precio', 'peso'];
    }
}
