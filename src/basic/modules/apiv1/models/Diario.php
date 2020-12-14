<?php

namespace app\modules\apiv1\models;
use Yii;

class Diario extends \app\models\Diario
{
        public function afterFind()
        {
            parent::afterFind(); 

            $this->fecha_hora = Yii::$app->formatter->asDatetime($this->fecha_hora, 'dd/MM/yyyy - HH:mm');
        }
}
