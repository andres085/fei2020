<?php

namespace app\modules\apiv1\models;

use yii\data\ActiveDataProvider;
use Yii;

class Diariocampania extends \app\models\Diariocampania
{
    public function fields()
    {
        return ['id', 'id_campania', 'fecha_hora', 'info'];
    }

    public function afterFind()
    {
        parent::afterFind();
    }

}
