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

        // public function beforeSave($insert)
        // {
        //     if (!parent::beforeSave($insert)) {
        //         return false;
        //         }

        //     $this->fecha_hora = Yii::$app->formatter->asDatetime($this->fecha_hora, 'yyyy/MM/dd - HH:mm');
        //     return true;
        // }

        // public function fields()
        // {
        //     return ['fecha_hora', 'info'];
        // }

        // public function extraFields()
        // {
        //     return ['id', 'id_personaje'];
        // }
}
