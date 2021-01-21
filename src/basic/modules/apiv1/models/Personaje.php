<?php

namespace app\modules\apiv1\models;


class Personaje extends \app\models\Personaje
{
    public function fields()
    {
        return ['id', 'nombre', 'nivel', 'raza', 'clase', 'fuerza', 'destreza', 'constitucion', 'inteligencia', 'sabiduria', 'carisma', 'trasfondo', 'personalidad', 'ideal', 'vinculo', 'defecto', 'objetos', 'id_campania'];
    }

}
