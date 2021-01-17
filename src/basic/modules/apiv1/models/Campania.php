<?php

namespace app\modules\apiv1\models;

use yii\data\ActiveDataProvider;
use Yii;

class Campania extends \app\models\Campania
{
    public function fields()
    {
        return ['id', 'id_usuario', 'nombre', 'detalles'];
    }

}
