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

        $this->fecha_hora = Yii::$app->formatter->asDatetime($this->fecha_hora, 'dd/MM/yyyy - HH:mm');
    }

    // public function search($params)
    // {
    //     $query = $this->find();


    //     $dataProvider = new ActiveDataProvider([
    //         'query' => $query,
    //     ]);

    //     $this->setAttributes($params,false);

    //     $query->andFilterWhere([
    //         'id' => $this->id,
    //         'id_personaje' => $this->id_personaje,
    //         'fecha_hora' => $this->fecha_hora,
    //         'info' => $this->info,
    //     ]);

    //     $query->andFilterWhere(['like', 'fecha_hora', $this->fecha_hora])
    //         ->andFilterWhere(['like', 'info', $this->info]);

    //     return $dataProvider;
    // }
}
