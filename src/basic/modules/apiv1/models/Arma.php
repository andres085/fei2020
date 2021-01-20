<?php

namespace app\modules\apiv1\models;


class Arma extends \app\models\Arma
{
    public function fields()
    {
        return ['id_arma', 'nombre', 'categoria', 'daño', 'tipo_daño', 'tipo_obj', 'mod_daño', 'mod_ataque', 'alcance', 'prop1', 'prop2', 'prop3', 'prop4', 'precio', 'peso'];
    }
}
