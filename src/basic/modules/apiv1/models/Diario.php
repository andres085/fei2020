<?php

namespace app\modules\apiv1\models;

use yii\data\ActiveDataProvider;
use Yii;

class Diario extends \app\models\Diario
{
    public function fields()
    {
        return ['id', 'id_personaje', 'fecha_hora', 'info'];
    }

    public function afterFind()
    {
        parent::afterFind();
    }

}
