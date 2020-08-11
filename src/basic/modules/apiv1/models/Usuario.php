<?php

namespace app\modules\apiv1\models;

use app\models\Personaje;
use app\models\UsuarioPersonaje;


class Usuario extends \app\models\Usuario
{
    public function fields()
    {
        return ['id', 'username', 'email', 'personajes'];
    }

    public function getPersonajes()
    {
        return $this->hasMany(Personaje::class, ['id' => 'personaje_id'])
            ->viaTable(UsuarioPersonaje::tableName(), ['usuario_id' => 'id']);
    }
}
