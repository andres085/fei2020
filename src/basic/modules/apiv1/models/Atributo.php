<?php

namespace app\modules\apiv1\models;


class Atributo extends \app\models\Atributo
{
    public function fields()
    {
        return ['id_personaje', 'fuerza', 'destreza', 'constitucion', 'inteligencia', 'sabiduria', 'carisma'];
    }
}
